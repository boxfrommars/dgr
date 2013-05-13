-- in db postgres with postgres user
\c postgres
DROP DATABASE IF EXISTS dgr;
DROP ROLE IF EXISTS dgr;
CREATE ROLE dgr ENCRYPTED PASSWORD 'dgr' LOGIN;
CREATE DATABASE dgr OWNER dgr;
GRANT ALL ON DATABASE dgr TO dgr;
\c dgr
CREATE EXTENSION ltree;