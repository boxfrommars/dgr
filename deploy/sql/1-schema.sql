DROP TABLE "page" CASCADE;

DROP FUNCTION get_calculated_page_node_path(param_page_id BIGINT) CASCADE;
DROP FUNCTION urltranslit(text) CASCADE;
DROP FUNCTION trig_update_page_node_path() CASCADE;

CREATE TABLE "page" (
  "id" BIGSERIAL NOT NULL,
  "is_published" BOOL DEFAULT 'f',

  "title" VARCHAR(255) NOT NULL,
  "content" TEXT,

  "page_url" VARCHAR(255),
  "page_title" VARCHAR (255),
  "page_description" TEXT,
  "page_keywords" TEXT,
  "order" INT DEFAULT 0,

  "name" VARCHAR(255) UNIQUE,

  "id_parent" BIGINT REFERENCES "page" ("id")  ON DELETE CASCADE,
  "path" LTREE UNIQUE,
  "entity" VARCHAR(255),

  "created_at" TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NOW(),
  "updated_at" TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NOW(),

  PRIMARY KEY("id")
);
CREATE INDEX ON "page" USING GIST (path);


CREATE TABLE "poem_collection" (
  "id_parent" BIGINT REFERENCES "page" ("id")  ON DELETE CASCADE,
  PRIMARY KEY("id")
) INHERITS (page);


CREATE TABLE "poem" (
  "notes" TEXT,
  "images" TEXT,
  "id_parent" BIGINT REFERENCES "poem_collection" ("id")  ON DELETE CASCADE,
  PRIMARY KEY("id")
) INHERITS (page);


CREATE OR REPLACE FUNCTION urltranslit(text) RETURNS text as $$
SELECT
regexp_replace(
	replace(
		replace(
			replace(
				replace(
					replace(
						replace(
							replace(
                translate(
                  lower($1),
                  ' абвгдеёзийклмнопрстуфхыэъь',
                  '-abvgdeezijklmnoprstufhye'
                ), 'ж',	'zh'
							), 'ц',	'ts'
						), 'ч',	'ch'
					), 'ш',	'sh'
				), 'щ',	'sch'
			), 'ю', 'yu'
		), 'я',	'ya'
	)
	,
	'[^a-z0-9-]+',
	'',
	'g'
)
$$ LANGUAGE SQL;

CREATE OR REPLACE FUNCTION get_calculated_page_node_path(param_page_id BIGINT) RETURNS ltree AS
  $$
SELECT
  CASE WHEN p.id_parent IS NULL THEN
    p.id::text::ltree
    ELSE
      get_calculated_page_node_path(p.id_parent) || p.id::text
    END
FROM page AS p
WHERE p.id = $1;
$$
LANGUAGE sql;

CREATE OR REPLACE FUNCTION trig_update_page_node_path()
  RETURNS TRIGGER AS
  $$
    BEGIN
        IF TG_OP = 'UPDATE' THEN
            IF (COALESCE(OLD.id_parent, 0) != COALESCE(NEW.id_parent, 0) OR NEW.id != OLD.id) THEN
                -- update all nodes that are children of this one including this one
                UPDATE page
                SET path = get_calculated_page_node_path(id)
                WHERE OLD.path @> page.path;
            END IF;

        ELSIF TG_OP = 'INSERT' THEN
            UPDATE page SET path = get_calculated_page_node_path(NEW.id) WHERE page.id = NEW.id;

            IF (COALESCE(NEW."name", '') = '') THEN
                UPDATE page SET "name" = urltranslit(NEW.title) WHERE page.id = NEW.id;
            END IF;
            IF (COALESCE(NEW."page_title", '') = '') THEN
                UPDATE page SET "page_title" = NEW.title WHERE page.id = NEW.id;
            END IF;
            IF (COALESCE(NEW."entity", '') = '') THEN
                UPDATE page SET "entity" = TG_TABLE_NAME WHERE page.id = NEW.id;
            END IF;

            IF (COALESCE(NEW."page_url", '') = '' AND COALESCE(NEW."page_title", '') = '') THEN
                UPDATE page SET page_url = urltranslit(NEW.title) WHERE page.id = NEW.id;
            END IF;

        END IF;

        RETURN NEW;
    END
    $$
LANGUAGE 'plpgsql' VOLATILE;

-- сейчас мы вешаем триггер на каждую отнаследованну таблицу от page и на саму page, см. http://www.postgresql.org/docs/9.1/static/ddl-inherit.html#DDL-INHERIT-CAVEATS
CREATE TRIGGER trig_update_page_node_path AFTER INSERT OR UPDATE OF id, id_parent
ON "page" FOR EACH ROW EXECUTE PROCEDURE trig_update_page_node_path();


CREATE TRIGGER trig_update_poemcol_node_path AFTER INSERT OR UPDATE OF id, id_parent
ON "poem_collection" FOR EACH ROW EXECUTE PROCEDURE trig_update_page_node_path();
CREATE TRIGGER trig_update_poem_node_path AFTER INSERT OR UPDATE OF id, id_parent
ON "poem" FOR EACH ROW EXECUTE PROCEDURE trig_update_page_node_path();


INSERT INTO "page" ("title", "name", "page_title", "page_url", "is_published") VALUES ('Главная', 'main', 'Главная', '', true);