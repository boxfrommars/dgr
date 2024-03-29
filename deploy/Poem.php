<?php
namespace App\Service;

class Poem {
	
	private $content;
	
	function __construct(){
        $this->collections = array(
            array(
                'href' => 'different',
                'title' => 'Разные стихотворения',
                'class' => 'collection',
                'parent' => false
            ),
            array(
                'href' => 'moment',
                'title' => 'Мгновение',
                'class' => 'collection',
                'parent' => false
            ),
            array(
                'href' => 'semicolon',
                'title' => 'Двоеточие',
                'class' => 'collection',
                'parent' => false
            ),
            array(
                'href' => 'text',
                'title' => 'Проза',
                'class' => 'collection',
                'parent' => false
            ),
        );

		$this->content = array(
            array(
                'href' => '/',
                'title' => 'Обложка',
                'class' => 'frontpage',
                'parent' => false,
                'items' => array(),
            ),
			array(
				'href' => 'two-monkeys',
				'title' => 'Две обезьяны',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'about-soul',
				'title' => 'Кое-что о душе',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'praise-dreams',
				'title' => 'Похвала снам',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'soliloquy-for-cassandra',
				'title' => 'Монолог для Кассандры',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'ball',
				'title' => 'Бал',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'shadow',
				'title' => 'Тень',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'utopia',
				'title' => 'Утопия',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'torture',
				'title' => 'Пытки',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'impression-of-the-theater',
				'title' => 'Впечатление от театра',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'reality',
				'title' => 'Явь',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'im-too-close',
				'title' => 'Я слишком близко',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'first-picture-of-hitler',
				'title' => 'Первая фотография Гитлера',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'elegiac-arithmetic',
				'title' => 'Элегическая арифметика',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'in-honor-of-my-sister',
				'title' => 'В честь моей сестры',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'station',
				'title' => 'Вокзал',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'ballad',
				'title' => 'Баллада',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'little-girl-pull-tablecloth',
				'title' => 'Маленькая девочка стаскивает скатерть',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'terrorist-he-looks',
				'title' => 'Террорист, он смотрит',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'road-elegy',
				'title' => 'Дорожная элегия',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'people-on-bridge',
				'title' => 'Люди на мосту',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'picture-september-11',
				'title' => 'Фотография 11 сентября',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'in-park',
				'title' => 'В парке',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'note',
				'title' => 'Заметка',
				'class' => 'poem',
				'parent' => 'different',
                'redirect' => '/moment/note',
			),
			array(
				'href' => 'cat-in-empty-apartment',
				'title' => 'Кот в пустой квартире',
				'class' => 'poem',
				'parent' => 'different'
			),
			array(
				'href' => 'absence',
				'title' => 'Отсутствие',
				'class' => 'poem',
				'parent' => 'semicolon'
			),
			array(
				'href' => 'abc',
				'title' => 'АБВ',
				'class' => 'poem',
				'parent' => 'semicolon'
			),
			array(
				'href' => 'road-accident',
				'title' => 'Дорожное происшествие',
				'class' => 'poem',
				'parent' => 'semicolon'
			),
			array(
				'href' => 'next-day-without-us',
				'title' => 'Назавтра — без нас',
				'class' => 'poem',
				'parent' => 'semicolon'
			),
			array(
				'href' => 'forestry-morality',
				'title' => 'Лесное моралите',
				'class' => 'poem',
				'parent' => 'semicolon'
			),
			array(
				'href' => 'case',
				'title' => 'Случай',
				'class' => 'poem',
				'parent' => 'semicolon'
			),
			array(
				'href' => 'repechage',
				'title' => 'Утешение',
				'class' => 'poem',
				'parent' => 'semicolon'
			),
			array(
				'href' => 'old-professor',
				'title' => 'Старый профессор',
				'class' => 'poem',
				'parent' => 'semicolon'
			),
			array(
				'href' => 'outlook',
				'title' => 'Перспектива',
				'class' => 'poem',
				'parent' => 'semicolon'
			),
			array(
				'href' => 'courtesy-blind',
				'title' => 'Учтивость незрячих',
				'class' => 'poem',
				'parent' => 'semicolon'
			),
			array(
				'href' => 'dogs-monologue',
				'title' => 'Монолог пса, заплутавшего в эпохе',
				'class' => 'poem',
				'parent' => 'semicolon'
			),
			array(
				'href' => 'conversation-with-atropos',
				'title' => 'Беседа с Атропой',
				'class' => 'poem',
				'parent' => 'semicolon'
			),
			array(
				'href' => 'poets-nightmare',
				'title' => 'Страшный сон поэта',
				'class' => 'poem',
				'parent' => 'semicolon'
			),
			array(
				'href' => 'maze',
				'title' => 'Лабиринт',
				'class' => 'poem',
				'parent' => 'semicolon'
			),
			array(
				'href' => 'neglect',
				'title' => 'Небрежение',
				'class' => 'poem',
				'parent' => 'semicolon'
			),
			array(
				'href' => 'greek-statue',
				'title' => 'Греческая статуя',
				'class' => 'poem',
				'parent' => 'semicolon'
			),
			array(
				'href' => 'in-fact-any-verse',
				'title' => 'Вообще-то любые стихи',
				'class' => 'poem',
				'parent' => 'semicolon'
			),
			array(
				'href' => 'poet-and-world',
				'title' => 'Поэт и мир (нобелевская лекция)',
				'class' => 'poem',
				'parent' => 'text'
			),
			array(
				'href' => 'literary-mail',
				'title' => 'Литературная почта, или Как стать/не стать писателем (фрагменты)',
				'class' => 'poem',
				'parent' => 'text'
			),
            array(
                'href' => 'moment',
                'title' => 'Мгновение',
                'class' => 'poem',
                'parent' => 'moment'
            ),
            array(
                'href' => 'overabundance',
                'title' => 'В преизбытке',
                'class' => 'poem',
                'parent' => 'moment'
            ),
            array(
                'href' => 'clouds',
                'title' => 'Облака',
                'class' => 'poem',
                'parent' => 'moment'
            ),
            array(
                'href' => 'negative',
                'title' => 'Негатив',
                'class' => 'poem',
                'parent' => 'moment'
            ),
            array(
                'href' => 'handset',
                'title' => 'Телефонная трубка',
                'class' => 'poem',
                'parent' => 'moment'
            ),
            array(
                'href' => 'three-amazing-words',
                'title' => 'Три поразительных слова',
                'class' => 'poem',
                'parent' => 'moment'
            ),
            array(
                'href' => 'plants-silence',
                'title' => 'Молчание растений',
                'class' => 'poem',
                'parent' => 'moment'
            ),
            array(
                'href' => 'plato-or-why',
                'title' => 'Платон, или зачем',
                'class' => 'poem',
                'parent' => 'moment'
            ),
            array(
                'href' => 'little-girl-pulled-tablecloth',
                'title' => 'Маленькая девочка потянула скатерть',
                'class' => 'poem',
                'parent' => 'moment'
            ),
            array(
                'href' => 'from-memories',
                'title' => 'Из воспоминаний',
                'class' => 'poem',
                'parent' => 'moment'
            ),
            array(
                'href' => 'puddle',
                'title' => 'Лужа',
                'class' => 'poem',
                'parent' => 'moment'
            ),
            array(
                'href' => 'first-love',
                'title' => 'Первая любовь',
                'class' => 'poem',
                'parent' => 'moment'
            ),
            array(
                'href' => 'about-soul',
                'title' => 'Кое-что о Душе',
                'class' => 'poem',
                'parent' => 'moment'
            ),
            array(
                'href' => 'at-dawn',
                'title' => 'Спозаранку',
                'class' => 'poem',
                'parent' => 'moment'
            ),
            array(
                'href' => 'in-park',
                'title' => 'В парке',
                'class' => 'poem',
                'parent' => 'moment'
            ),
            array(
                'href' => 'in-addition-to-statistics',
                'title' => 'Дополнительно к статистике',
                'class' => 'poem',
                'parent' => 'moment'
            ),
            array(
                'href' => 'some-people',
                'title' => 'Какие-то люди',
                'class' => 'poem',
                'parent' => 'moment'
            ),
            array(
                'href' => 'picture-september-11',
                'title' => 'Сфотографированное 11 сентября',
                'class' => 'poem',
                'parent' => 'moment'
            ),
            array(
                'href' => 'return-luggage',
                'title' => 'Обратный багаж',
                'class' => 'poem',
                'parent' => 'moment'
            ),
            array(
                'href' => 'ball',
                'title' => 'Бал',
                'class' => 'poem',
                'parent' => 'moment'
            ),
            array(
                'href' => 'note',
                'title' => 'Запись',
                'class' => 'poem',
                'parent' => 'moment'
            ),
            array(
                'href' => 'list',
                'title' => 'Список',
                'class' => 'poem',
                'parent' => 'moment'
            ),
            array(
                'href' => 'everything',
                'title' => 'Всё',
                'class' => 'poem',
                'parent' => 'moment'
            ),
		);
	}
	
	public function getContentTable()
    {
        $content = array();
        foreach ($this->collections as $collection) {
            $content[$collection['href']] = $collection;
        }


		foreach ($this->content as $value){
			if ($value['parent']){
				$content[$value['parent']]['items'][$value['href']] = $value;
			}
		}
		return $content;
	}

    /**
     * @return array
     */
    public function getCollections()
    {
        return $this->collections;
    }

    function getPager($title){

        $cont = $this->content;
        $id = -1;
        $count = 6;

        $content = array();
        foreach ($cont as $key => $value) {
            if ($value['href'] == $title) {
                $id = $key;
                $content[$id] = $value;
                $count--;
                break;
            }
        }
        $i = 1;
        $a = 1;
        while ($count != 0) {
            if (isset($cont[$id + $a]) && $cont[$id + $a]['class'] != 'frontpage'){
                $content[$id + $a] = $cont[$id + $a];
                $count--;
            }
            $i++;
            $a = $a + (-$a/abs($a))*$i;
        }

        ksort($content);
        return array('content' => $content, 'id' => $id);
    }

    function getPoems() {
        return $this->content;
    }

	function getPoem($title){
        $poem = array(
            'name' => $title,
        );
		switch ($title) {
			case 'two-monkeys':
				$poem['title'] = 'Две обезьяны';
				$poem['content'] = '
					<div class="poem">
						<p>
						Вот мой великий сон на аттестат зрелости:<br />
						Сидят у окна две обезьяны, скованные цепью,<br />
						За окном колышется небо<br />
						И плещется море.
						</p>
						<p>
						Я сдаю экзамен по истории человечества.<br />
						Плаваю, заикаюсь.
						</p>
						<p>
						Одна обезьяна слушает, иронически глядя в упор,<br />
						Другая якобы в дремоту погружена,<br />
						Но когда вместо ответа воцаряется тишина,<br />
						Она мне подсказывает тихим бренчаньем оков.
						</p>
						<p class="foot-note">Перевод Андрея Базилевского</p>
					</div>
					<div class="poem">
						<h3>Dwie malpy <span class="tonote" id="tonote001">Bruegla</span></h3>
						<p>
						Tak wyglada moj wielki maturalny sen: <br />
						siedza w oknie dwie malpy przykute lancuchem, <br />
						za oknem fruwa niebo <br />
						i kapie sie morze. 
						</p>
						<p>
						Zdaje z historii ludzi. <br />
						Jakam sie i brne. 
						</p>
						<p>
						Malpa wpatrzona we mnie, ironicznie slucha, <br />
						druga niby to drzemie — <br />
						a kiedy po pytaniu nastaje milczenie, <br />
						podpowiada mi <br />
						cichym brzakaniem lancucha.
						</p>
					</div>
					<div class="poem">
						<h3>Две обезьяны Брейгеля </h3>
						<p>
						Таков мой вечный экзаменационный сон: <br />
						в окне сидят две обезьяны, скованные цепью, <br />
						а за окном <br />
						плещется море и порхает небо. 
						</p>
						<p>
						Сдаю историю людей. <br />
						Плету и заикаюсь. 
						</p>
						<p>
						Глядит с иронией одна из обезьян, <br />
						другая как бы спит в оцепененье, <br />
						когда же на вопрос молчу, замявшись, я, <br />
						она подсказывает мне <br />
						тихим позвякиваньем цепи. 
						</p>
						<p class="foot-note">
						Перевод Натальи Астафьевой
						</p>
					</div>
					<div class="poem">
						<h3>Две обезьяны Брейгеля </h3>
						<p>
						Вот так выглядит во сне мой экзамен <br />
						на аттестат зрелости: в оконном проеме <br />
						сидят на цепи две обезьяны; за ними <br />
						порхает небо и плещется море. 
						</p>
						<p>
						Я сдаю историю людей. <br />
						Мямлю что-то невразумительное. 
						</p>
						<p>
						Обезьяна анфас насмешливо слушает. <br />
						Та, что в профиль, клюет носом, <br />
						а когда я вконец запутываюсь, <br />
						подсказывает: <br />
						тихонько позвякивая цепью. 
						</p>
						<p class="foot-note">
						Перевод Дмитрия Веденяпина
						</p>
					</div>
					<div class="poem">
						<h3>Две обезьяны Брейгеля </h3>
						<p>
						Сон накануне экзамена на аттестат, подтверждающий зрелость: <br />
						две обезьяны прикованы цепью в проеме оконном, <br />
						небо снаружи порхает, <br />
						купается море. 
						</p>
						<p>
						Вот мой билет по истории рода людского. <br />
						Путаюсь и вру. 
						</p>
						<p>
						Взгляд обезьяны, что слева, иронии полон, <br />
						Дремлет как будто другая, — <br />
						когда ж повисает молчание, <br />
						знак подает мне <br />
						бренчанием цепи негромким. 
						</p>
						<p class="foot-note">
						Перевод Марины Курганской
						</p>
					</div>
					<div class="poem">
						<h3>Две обезьяны Брейгеля</h3>
						<p>
						Мой последний экзамен, застывший во сне: <br />
						там сидят на цепи две мартышки в окне, <br />
						за окном кувыркается небо <br />
						и купается море. 
						</p>
						<p>
						По истории рода людского <br />
						плутаю, сбиваясь. 
						</p>
						<p>
						Обезьяна, меня изучая, иронично внимает, <br />
						дремлет вторая, но словно нечаянно, <br />
						когда после вопроса наступает молчание, <br />
						тихим бренчаньем цепи <br />
						мне помогает. 
						</p>
						<p class="foot-note">
						Перевод Ирины Аледьгейм и Алексея Хованского
						</p>
					</div>
					<div class="poem">
						<h3>Две обезьяны Брейгеля</h3>
						<p>
						Таков мой извечный сон выпускницы: <br />
						две скованных цепью обезьяны в нише окна, <br />
						а за окном — небо пляшет <br />
						и море резвится. 
						</p>
						<p>
						Сдаю я историю человечества. <br />
						Запинаюсь и плаваю. 
						</p>
						<p>
						Одна обезьяна, не сводя с меня глаз, благосклонно внимает, <br />
						вторая — похоже что в забытьи, <br />
						а когда после заданного вопроса молчание повисает, <br />
						та, другая, подсказку мне посылает <br />
						тихим позвякиваньем цепи. 
						</p>
						<p class="foot-note">
						Перевод Ирины Подчищаевой
						</p>
					</div>
				';
				$poem['notes'] = '
					<div class="note" id="note001">
						<p>Питер Брейгель-старший, (ок. 1525—1569) — (фламандский) живописец и график. Мастер пейзажа и жанровых сцен.</p>
					</div>
					';
				$poem['images'] = '
					<div class="left-box" id="left-b-001" style="margin-top:300px;">
						<img alt="две обезьяны" src="/img/shimborska/2malpy.jpg" />
						<p>Две обезьяны (1562)</p>
						<p>П. Брейгель</p>
					</div>
					<div class="left-box" id="left-b-001" style="margin-top:20px;">
						<img alt="две обезьяны" src="/img/shimborska/breigel.jpg" />
						<p>Автопортрет</p>
						<p>П. Брейгель</p>
					</div>';
				break;
			case 'about-soul':
				$poem['title'] = 'Кое-что о душе';
				$poem['content'] = '
					<div class="poem">
						<p>
						Душа бывает по временам.<br />
						Ни у кого ее нет непрестанно <br />
						</p>
						<p>
						и навсегда.
						</p>
						<p>
						День за днем, <br />
						год за годом <br />
						могут пройти без нее.
						</p>
						<p>
						Порой разве что в восторгах <br />
						и детских страхах <br />
						заводится на подольше. <br />
						Порой разве что в удивленье, <br />
						что вот и настала старость.
						</p>
						<p>
						Изредка ассистирует <br />
						нам при надсадных занятиях, <br />
						таких, как двиганье мебели, <br />
						таскание чемоданов <br />
						и ходьба в неразношенной обуви.
						</p>
						<p>
						При заполненье анкет <br />
						и рубке бифштексов <br />
						она берет выходной. 
						</p>
						<p>
						На тысячу разговоров <br />
						участвует разве в одном, <br />
						да и то не всегда, <br />
						предпочитая молчание. 
						</p>
						<p>
						Когда наше тело болит и болит, <br />
						незаметно уходит с дежурства. 
						</p>
						<p>
						Привередливая, <br />
						не любит видеть нас в толпе, <br />
						ей претит наша страсть к превосходству <br />
						и деловой крутеж. 
						</p>
						<p>
						Печаль и радость <br />
						для нее не разные чувства. <br />
						Только их сочетанье <br />
						держит ее при нас. 
						</p>
						<p>
						На нее можно рассчитывать,<br /> 
						когда мы ни в чем не уверены, <br />
						но до всего любопытны. 
						</p>
						<p>
						Из материальных предметов 
						</p>
						<p>
						по нраву часы ей с маятником <br />
						и зеркала, что усердствуют, <br />
						даже когда в них не смотришь. 
						</p>
						<p>
						Не скажет, откуда является <br />
						и куда опять подевается, <br />
						но явно ждет этих вопросов. 
						</p>
						<p>
						Похоже, <br />
						что, как и она нам, <br />
						мы ей тоже <br />
						зачем-то нужны. 
						</p>
						<p class="foot-note">
						Перевод Асара Эппеля
						</p>
					</div>
				';
				break;
				
				
			case 'praise-dreams':
				$poem['title'] = 'Похвала снам';
				$poem['content'] = '
					<div class="poem">
						<p>
						Во сне <br />
						я рисую как <span class="tonote" id="tonote001">Вермеер ван Дельфт</span>. 
						</p>
						<p>
						Бегло говорю по-гречески, <br />
						и не только с живыми. 
						</p>
						<p>
						И вожу машину, <br />
						которая мне послушна. 
						</p>
						<p>
						Я способна <br />
						написать великие поэмы. 
						</p>
						<p>
						Я слышу голоса <br />
						не хуже настоящих святых. 
						</p>
						<p>
						Вы удивились бы — <br />
						я изумительно играю на рояле. 
						</p>
						<p>
						И взлетать я умею как надо, <br />
						то есть сама над собой. 
						</p>
						<p>
						И падая с крыши <br />
						я умею упасть мягко в зелень. 
						</p>
						<p>
						И без труда <br />
						я дышу под водой. 
						</p>
						<p>
						Я не жалуюсь: <br />
						мне удалось открыть Атлантиду. 
						</p>
						<p>
						Меня радует, что перед смертью <br />
						я всегда успеваю проснуться. 
						</p>
						<p>
						Я сразу же вслед за взрывом <br />
						переворачиваюсь на другой бок. 
						</p>
						<p>
						Я тоже дитя эпохи, <br />
						но я им быть не обязана. 
						</p>
						<p>
						Несколько лет назад <br />
						я видела два солнца. 
						</p>
						<p>
						А позавчера пингвина. <br />
						И совершенно явственно. 
						</p>
						<p class="foot-note">
						Перевод Виктора Коркия
						</p>
					</div>
				';
				$poem['notes'] = '
					<div class="note" id="note001">
						<p>Ян Вермер — нидерландский художник, мастер бытовой живописи и жанрового портрета. Наряду с Рембрандтом и Франсом Халсом является одним из величайших живописцев золотого века голландского искусства</p>
					</div>
				';
				break;
				
				
			case 'soliloquy-for-cassandra':
				$poem['title'] = 'Монолог для Кассандры';
				$poem['content'] = '
					<div class="poem">
						<p>
						Это я, <span class="tonote" id="tonote001">Кассандра</span>. <br />
						А это мой город под пеплом. <br />
						А это мой посох и ленты жрицы. <br />
						А это моя голова, переполненная сомнениями.
						</p>
						<p>
						Это правда, я победила. <br />
						Моя правота права, как луна в полнолунье. <br />
						Только с пророком, которому напрочь не верят, <br />
						может случиться такое. <br />
						Только с теми, которые вяло взялись за дело, <br />
						и все могло сбыться так быстро, <br />
						как будто и не было вовсе. 
						</p>
						<p>
						Отчетливо помню, <br />
						как люди, увидев меня, смолкали на полуслове. <br />
						Смех обрывался. <br />
						Руки теряли друг друга. <br />
						Дети бежали к матери. <br />
						Я даже не знала их тленных имен. <br />
						А песенка эта о зеленом листике — <br />
						никто ее не закончил при мне. 
						</p>
						<p>
						Я их любила. <br />
						Но со своей колокольни. <br />
						Над жизнью. <br />
						Из будущего. Где всегда пусто <br />
						и откуда проще простого увидеть смерть. <br />
						Я жалею, что мой голос был твердым. <br />
						Посмотрите со звезд на себя, — я кричала, — <br />
						посмотрите со звезд на себя. <br />
						Они слушали и смотрели под ноги. 
						</p>
						<p>
						Жили в жизни они. <br />
						Большими ветрами гонимы.<br /> 
						Предначертанно жили. <br />
						От рожденья в прощальных телах. <br />
						Но жила в них надежда какая-то влажная, <br />
						мерцал огонек, утоляющий голод мерцаньем. <br />
						Знали они, что такое минута, <br />
						о, если хотя бы одна, хоть какая-нибудь, <br />
						прежде чем — 
						</p>
						<p>
						Вышло по-моему. <br />
						Но из этого ничего не следует. <br />
						А это только моя одежка, огнем опаленная. <br />
						А это только мои пророческие лохмотья. <br />
						Это только мое искривленное лицо. <br />
						Лицо, которое не знало, что могло быть прекрасным.
						</p>
						<p class="foot-note">
						Перевод Виктора Коркия
						</p>
					</div>
					<div class="poem">
						<h3>Monolog dla Kasandry</h3>
							<p>
							To ja, Kasandra.<br />
							A to jest moje miasto pod popiołem.<br />
							A to jest moja laska i wstążki prorockie.<br />
							A to jest moja głowa pełna wątpliwości.
							</p>
							<p>
							To prawda, tryumfuję.<br />
							Moja racja aż łuną uderzyła w niebo.<br />
							Tylko prorocy, którym się nie wierzy,<br />
							mają takie widoki.<br />
							Tylko ci, którzy źle zabrali się do rzeczy,<br />
							i wszystko mogło spełnić się tak szybko,<br />
							jakby nie było ich wcale.
							</p>
							<p>
							Wyraźnie teraz przypominam sobie,<br />
							jak ludzie, widząc mnie, milkli wpół słowa.<br />
							Rwał się śmiech.<br />
							Rozpalały się ręce.<br />
							Dzieci biegły do matki.<br />
							Nawet nie znałam ich nietrwałych imion.<br />
							A ta piosenka o zielonym listku —<br />
							nikt jej nie kończył przy mnie.
							</p>
							<p>
							Kochałam ich.<br />
							Ale kochałam z wysoka.<br />
							Sponad życia.<br />
							Z przyszłości. Gdzie zawsze jest pusto<br />
							i skąd cóż łatwiejszego jak zobaczyć śmierć.<br />
							Żałuję, że mój głos był twardy.<br />
							Spójrzcie na siebie z gwiazd — wołałam —<br />
							spójrzcie na siebie z gwiazd.<br />
							Słyszeli i spuszczali oczy.
							</p>
							<p>
							Żyli w życiu.<br />
							Podszyci wielkim wiatrem.<br />
							Przesądzeni.<br />
							Od urodzenia w pożegnalnych ciałach.<br />
							Ale była w nich jakaś wilgotna nadzieja,<br />
							własną migotliwością sycący się płomyk.<br />
							Oni wiedzieli, co to takiego jest chwila,<br />
							och bodaj jedna jakakolwiek<br />
							zanim —<br />
							Wyszło na moje.<br />
							tylko że z tego nie wynika nic.<br />
							A to jest moja szmatka ogniem osmalona.<br />
							A to są moje prorockie rupiecie.<br />
							A to jest moja wykrzywiona twarz.<br />
							Twarz, która nie wiedziała, że mogła być piękna.
							</p>
					</div>
				';
				$poem['images'] = '
					<div class="left-box" style="margin-top:50px;">
						<img alt="кассандра" src="/img/shimborska/cassandra.jpg" />
						<p>Кассандра (1898)</p>
						<p>Э. Де Морган</p>
					</div>';
				$poem['notes'] = '
					<div class="note" id="note001">
						<p>Кассандра (др.-греч. Κασσάνδρα) — персонаж древнегреческой мифологии, дочь Приама и Гекубы. Большинство авторов описывает её как прорицательницу, предсказаниям которой никто не верил. Согласно Гомеру, она была красивейшей из дочерей Приама.</p>
					</div>
				';
				break;
				
				
			case 'ball':
				$poem['title'] = 'Бал';
				$poem['content'] = '
					<div class="poem">
						<p>
						Покуда толком ничего не ясно, <br />
						поскольку нет сигналов долетевших, 
						</p>
						<p>
						пока Земля опять же не такая, <br />
						как ближние и дальние планеты, 
						</p>
						<p>
						покуда нет ни слуху и ни духу <br />
						о прочих травах, предпочтенных ветром, <br />
						о деревах других в коронах кроны, <br />
						другом зверье, как наше, несомненном, 
						</p>
						<p>
						покуда нету эха, кроме местных, <br />
						которое умело б говорить слогами, 
						</p>
						<p>
						покуда ничего не сообщалось <br />
						о худших или лучших <span class="tonote" id="tonote001">амадеях, <br />
						платонах или эдисонах</span>,
						</p>
						<p>
						пока злодейства наши <br />
						соперничают только меж собой, 
						</p>
						<p>
						а приданное нам добросердечье <br />
						ни на какое больше не похоже <br />
						и хоть сомнительно, зато одно такое, 
						</p>
						<p>
						а головы с невнятицей иллюзий — <br />
						единственные, полные иллюзий, 
						</p>
						<p>
						а вопли, что возносим к небосводу <br />
						всего лишь вопли из-под сводов нёба, — 
						</p>
						<p>
						мы мним себя гостями на танцульке <br />
						особыми и отличенными, <br />
						танцуем под музыку местного оркестрика, <br />
						и пусть нам представляется, <br />
						что этот бал один и есть такой; 
						</p>
						<p>
						кому как – не знаю, <br />
						а мне достаточно <br />
						для счастья и для злосчастья 
						</p>
						<p>
						тихое захолустье, <br />
						где звезды говорят спокойной ночи, <br />
						немногозначительно <br />
						перемигиваясь <br />
						по нашему поводу. 
						</p>
						<p class="foot-note">
						Перевод Асара Эппеля 
						</p>
					</div>
				';
				$poem['images'] = '
					<div class="left-box" style="margin-top:50px;">
						<img alt="Моцарт, Вольфганг Амадей" src="/img/shimborska/mozart.jpg" />
						<p>Вольфганг Амадей Моцарт, портрет</p>
						<p>Барбара Крафт (1819)</p>
					</div>
					<div class="left-box">
						<img alt="Платон" src="/img/shimborska/plato.jpg" />
						<p>Платон на фреске Рафаэля Санти (1509)</p>
					</div>
					<div class="left-box">
						<img alt="Томас Эдисон" src="/img/shimborska/edison.jpg" />
						<p>Томас Эдисон (1915)</p>
					</div>';
				$poem['notes'] = '
					<div class="note" id="note001">
						<p>Йоганн Хризостом Вольфганг Теофил Моцарт (1756 — 1791) — величайший австрийский композитор, инструменталист и дирижёр.</p>
						<p>Томас Алва Эдисон (1847 — 1931) — всемирно известный американский изобретатель и предприниматель</p>
						<p>Платон (428 или 427 до н. э. — 348 или 347 до н. э.) — древнегреческий философ, ученик Сократа, учитель Аристотеля.</p>
					</div>
				';
				// Йоганн Хризостом Вольфганг Теофил Моцарт (1756 — 1791) — величайший австрийский композитор, инструменталист и дирижёр.
				break;
				
				
			case 'shadow':
				$poem['title'] = 'Тень';
				$poem['content'] = '
					<div class="poem">
						<p>
						Тень моя — шут при королеве. <br />
						Привстанет королева с кресел, <br />
						а шут в дурацком перепеве — <br />
						скок! — в потолок башкою треснет. 
						</p>
						<p>
						И мучится, быть может, болью <br />
						в своем двухмерном свете. Может, <br />
						он при дворе моем не может <br />
						довольствоваться жалкой ролью. 
						</p>
						<p>
						Она склонится из бойницы, <br />
						а шут и спрыгнет с вышины. <br />
						Всем ухитрились поделиться — <br />
						вот только доли не равны. 
						</p>
						<p>
						Дурак присвоил жестов живость, <br />
						бесстыдство пафоса и лживость — <br />
						все то, на что меня не стать: <br />
						порфиру, скипетр и фальшивость. 
						</p>
						<p>
						Ах, буду легкой в повороте, <br />
						ах, запрокинусь в той келейке, <br />
						король, когда вы прочь уйдете, <br />
						король, на той узкоколейке. 
						</p>
						<p>
						Король, счастливых вам дорог, <br />
						не я — мой шут на рельсы лег. 
						</p>
						<p class="foot-note">
						Перевод Асара Эппеля 
						</p>
					</div>
					<div class="poem">
						<h3>Cien</h3> 
						<p>
						Moj cien jak blazen za krolowej. <br />
						Kiedy krolowa z krzesla wstanie, <br />
						blazen nastroszy sie na scianie <br />
						i stuknie w sufit glupia glowa. 
						</p>
						<p>
						Co moze na swoj sposob boli <br />
						W dwuwymiarowym swiecie. Moze <br />
						blaznowi zle na moim dworze <br />
						i wolalby sie w innej roli. 
						</p>
						<p>
						Krolowa z okna sie wychyli, <br />
						a blazen z okna skoczy w dol. <br />
						Tak kazda czynnosc podzielili, <br />
						Ale to nie jest pol na pol. 
						</p>
						<p>
						Ten prostak wzial na siebie gesty, <br />
						patos i caly jego bezwstyd, <br />
						to wszystko, na co nie mam sil <br />
						— korone, berlo, plaszcz krolewski.
						</p>
						<p>
						Bede, ach, lekka w ruchu ramion, <br />
						ach, lekka w odwroceniu glowy, <br />
						krolu, przy naszym pozegnaniu, <br />
						krolu, na stacji kolejowej. 
						</p>
						<p>
						Krolu, to blazen o tej porze, <br />
						krolu, polozy sie na torze.
						</p>
					</div>
					<div class="poem">
						<h3>Тень</h3>
						<p>
						Тень — точно шут за королевой. <br />
						Лишь королева с кресла встанет, <br />
						он по стене взлетит нелепо <br />
						и в потолок башкою грянет. 
						</p>
						<p>
						Хранит свои, наверно, боли <br />
						двумерный мир его. Наверно, <br />
						ему в тиши дворцовой скверно, <br />
						и об иной мечтал он роли. 
						</p>
						<p>
						Едва склонюсь я на перила, <br />
						бедняга выброситься рад. <br />
						Судьба во всем нас поделила, <br />
						да жаль — не поровну расклад. 
						</p>
						<p>
						Себе забрал он позы, страсти <br />
						с бесстыдным пафосом и пылом, <br />
						и знаки королевской власти — <br />
						все, что самой мне не по силам. 
						</p>
						<p>
						Ах, как легко качну плечами <br />
						и вскину голову в короне, <br />
						с тобой, король мой, без печали <br />
						простясь, король мой, на перроне. 
						</p>
						<p>
						Король мой, это шут с откоса, <br />
						король мой, прянул под колеса. 
						</p>
						<p class="foot-note">
						Перевод Анатолия Гелескула 
						</p>
					</div>
					<div class="poem">
						<h3>Моя тень</h3>
						<p>
						Тень — это шут при королеве. <br />
						Шагнуть мне стоит за порог — <br />
						мой шут уперся в потолок, <br />
						скосил затылок в глупом гневе. 
						</p>
						<p>
						А это больно, может быть, <br />
						жить в тесноте двух измерений, <br />
						среди придворных превращений. <br />
						Хотел бы шут шутом не быть. 
						</p>
						<p>
						В окно взгляну, и поневоле <br />
						на землю прыгает дурак. <br />
						Мы поделили наши роли <br />
						не пополам, не так на так. 
						</p>
						<p>
						Он жесты взял, их щедро мечет, <br />
						в бесстыдстве пафоса кипит, <br />
						он взял все то, что давит плечи: <br />
						корону, мантию и скипетр. 
						</p>
						<p>
						Ах, буду легкой я вдвойне, <br />
						в походке легкой и в поклоне, <br />
						когда, король, придется мне <br />
						с тобой проститься на перроне. 
						</p>
						<p>
						Король, король, ты видишь, лег <br />
						мой шут на рельсы поперек. 
						</p>
						<p class="foot-note">
						Перевод Святослава Свяцкого 
						</p>
					</div>
					<div class="poem">
						<h3>Тень</h3>
						<p>
						За мною тень, как шут придворный, <br />
						Отсутствует меж нами сходство, <br />
						Я встану — шут мой поскользнется <br />
						И въедет в потолок невольно 
						</p>
						<p>
						Башкой садовой. Больно все же <br />
						Бывает и в двухмерном мире, — <br />
						Роль тяжела. В моей порфире <br />
						Шуту не по себе, быть может. 
						</p>
						<p>
						Вот госпожа в окошко взглянет, <br />
						А шут с окна сорвется вниз. <br />
						Мы неразлучны, но не равны: <br />
						Капризы мне — ему карниз. 
						</p>
						<p>
						Простак себе взял тяжесть жеста, <br />
						Бесстыдство пафоса, и вместо <br />
						Бубенчиков — нелегкий груз <br />
						Моих регалий королевских. 
						</p>
						<p>
						Легко, король, пожму плечами, <br />
						Легко, король, я отвернусь <br />
						При расставанье на вокзале <br />
						В последнюю минуту. Пусть, 
						</p>
						<p>
						Король, ты не заметишь даже, <br />
						Как шут на рельсы молча ляжет. 
						</p>
						<p class="foot-note">
						Перевод Марины Курганской 
						</p>
					</div>
					<div class="poem">
						<h3>Тень</h3>
						<p>
						Тень моя, как шут при королеве, <br />
						Неотступно следует за мной. <br />
						Чуть привстану, тень — в слезах иль в гневе — <br />
						Стукнется о стену головой. 
						</p>
						<p>
						Не пытаясь закричать от боли, <br />
						Съежится, коль сяду я опять… <br />
						Может быть, совсем иные роли <br />
						Ей при мне хотелось бы играть… 
						</p>
						<p>
						Я к окошку подойду украдкой, <br />
						Не ступив и взглядом на карниз, <br />
						А она, бедняга, без оглядки <br />
						Норовит туда, <br />
						на камни, <br />
						вниз. 
						</p>
						<p>
						Тень, как шут, своим нелепым жестом <br />
						Королеву выставит на смех <br />
						И величья царственного вместо <br />
						Обнажит отчаянье при всех. 
						</p>
						<p>
						При разлуке с королем любимым <br />
						Легким будет шеи поворот… <br />
						Только тень, скользнув неслышно мимо, <br />
						Горестно на рельсы упадет… 
						</p>
						<p class="foot-note">
						Перевод Виктора Филиппова
						</p>
					</div>
				';
				break;
				
				
			case 'utopia':
				$poem['title'] = 'Утопия';
				$poem['content'] = '
					<div class="poem">
						<p>
						Остров, на котором во всем абсолютная ясность. <br />
						Здесь можно встать на твердую почву доказательств. <br />
						Нет иных путей, чем единственно правильный путь. <br />
						Здесь растет ветвистое <br />
						Древо Озарения. 
						</p>
						<p>
						И поразительно прямое Древо Понимания <br />
						над источником, что зовется — Ах, Вот Оно Как. <br />
						Чем дальше в лес, тем лучше видна <br />
						Долина Очевидного. <br />
						Стоит только возникнуть сомнению, <br />
						ветер тут же его развеет. 
						</p>
						<p>
						Эхо, взяв слово по собственному желанию, <br />
						охотно вам раскроет тайны мироздания. 
						</p>
						<p>
						По правую руку пещера, в которой покоится Смысл.
						</p>
						<p>
						Слева озеро Глубокого Убеждения, <br />
						со дна его легко отрывается Истина и <br />
						всплывает на поверхность. 
						</p>
						<p>
						Над всем господствует пик Непоколебимой Уверенности. <br />
						С него открывается вид на самую суть вещей. 
						</p>
						<p>
						Несмотря на свои преимущества, остров необитаем. <br />
						Мелкие следы ступней на прибрежном песке 
						</p>
						<p>
						все без исключения ведут в сторону моря. 
						</p>
						<p>
						Как если бы отсюда только уходили <br />
						и безвозвратно тонули в пучине вод. 
						</p>
						<p>
						В жизни непостижимой. 
						</p>
						<p class="foot-note">
						Перевод Андрея Базилевского 
						</p>
					</div>
					<div class="poem">		
						<h3>Utopia</h3> 
						<p>
						Wyspa, na ktorej wszystko sie wyjasnia. 
						</p>
						<p>
						Tu mozna stanac na gruncie dowodow. 
						</p>
						<p>
						Nie ma drog innych oprocz drogi dojscia. 
						</p>
						<p>
						Krzaki az uginaja sie od odpowiedzi. 
						</p>
						<p>
						Rosnie tu drzewo Slusznego Domyslu <br />
						o rozwiklanych odwiecznie galeziach. 
						</p>
						<p>
						Olsniewajaco proste drzewo Zrozumienia <br />
						przy zrodle, co sie zowie Ach Wiec To Tak. 
						</p>
						<p>
						Im dalej w las, tym szerzej sie otwiera <br />
						Dolina Oczywistosci. 
						</p>
						<p>
						Jesli jakies zwatpienie, to wiatr je rozwiewa. 
						</p>
						<p>
						Echo bez wywolania glos zabiera <br />
						i wyjasnia ochoczo tajemnice swiatow. 
						</p>
						<p>
						W prawo jaskinia, w ktorej lezy sens. 
						</p>
						<p>
						W lewo jezioro Glebokiego Przekonania. <br />
						Z dna odrywa sie prawda i lekko na wierzch wyplywa. 
						</p>
						<p>
						Goruje nad dolina Pewnosc Niewzruszona. <br />
						Ze szczytu jej roztacza sie Istota Rzeczy. 
						</p>
						<p>
						Mimo powabуw wyspa jest bezludna, <br />
						a widoczne po brzegach slady stop <br />
						bez wyjatku zwrocone sa w kierunku morza. 
						</p>
						<p>
						W zyciu nie do pojecia. 
						</p>
					</div>
					<div class="poem">
						<h3>Утопия</h3>
						<p>
						Остров, где все беспрекословно ясно. 
						</p>
						<p>
						Здесь можно стать на твердом грунте аргументов. 
						</p>
						<p>
						Здесь нет иных путей, лишь путь, ведущий к цели. 
						</p>
						<p>
						Кусты аж гнутся от ответов. 
						</p>
						<p>
						Растет здесь древо Мудрого Предвиденья, <br />
						ветвящееся вечно. 
						</p>
						<p>
						Прямолинейнейшее древо Пониманья <br />
						возле источника Ах — Значит — Это — Так. 
						</p>
						<p>
						Чем дальше в лес, тем шире открывается <br />
						Долина Непреложного. 
						</p>
						<p>
						Если и есть сомненье, ветер его развеет. 
						</p>
						<p>
						Не вызванное эхо берет голос <br />
						и тайны миров объясняет охотно. 
						</p>
						<p>
						Направо пещера, где пребывает смысл. 
						</p>
						<p>
						Налево озеро Глубокого Убежденья. <br />
						Со дна отрывается истина и легко всплывает. 
						</p>
						<p>
						Высится над долиной Неколебимая Вера. <br />
						С ее высоты открывается Суть Вещей. 
						</p>
						<p>
						При всех соблазнах остров сей безлюден, <br />
						на берегах следы ступавших ног, <br />
						все они без исключения в сторону моря. 
						</p>
						<p>
						Как если б все лишь уходили прочь <br />
						и безвозвратно погружались в бездну. 
						</p>
						<p>
						В жизнь что нельзя постичь. 
						</p>
						<p class="foot-note">
						Перевод Натальи Астафьевой 
						</p>
					</div>
					<div class="poem">
						<h3>Утопия</h3>
						<p> 
						Вот оно: царство вожделенной Ясности, 
						</p>
						<p>
						остров Достоверности, 
						</p>
						<p>
						где даже кусты сгибаются под тяжестью точных ответов, 
						</p>
						<p>
						а дороги, все как одна, ведут к цели. 
						</p>
						<p>
						Здесь растет дерево Прозрения, <br />
						и его ветви прекрасны, как солнечные лучи. 
						</p>
						<p>
						У родника, имя которому Ах Вот Оно Что, <br />
						цветет стройное дерево Понимания, 
						</p>
						<p>
						и с каждым шагом все шире распахивается <br />
						Долина Безусловности. 
						</p>
						<p>
						Ветер легко развеивает случайные сомнения, 
						</p>
						<p>
						а нежданное эхо поверяет <br />
						последние тайны вселенной. 
						</p>
						<p>
						Справа — пещера Смысла, 
						</p>
						<p>
						слева — озеро Глубокой Уверенности, <br />
						пронизанное светом Истины. 
						</p>
						<p>
						Впереди — высится гора Неколебимой Веры, <br />
						с которой открывается Суть Вещей. 
						</p>
						<p>
						Однако остров безлюден, <br />
						а цепочки следов на песке <br />
						тянутся к морю. 
						</p>
						<p>
						Как будто все только уходят отсюда, <br />
						чтобы уже навсегда исчезнуть в волнах 
						</p>
						<p>
						необъяснимой жизни. 
						</p>
						<p class="foot-note">
						Перевод Дмитрия Веденяпина 
						</p>
					</div>
					<div class="poem">
						<h3>Утопия</h3>
						<p> 
						Остров, где нисходит просветление. 
						</p>
						<p>
						Здесь можно постоять на почве доказательств. 
						</p>
						<p>
						Здесь нет иных путей, лишь те, что прямо к цели. 
						</p>
						<p>
						Кусты сгибаются под тяжестью ответов. 
						</p>
						<p>
						Стоит Предположений Верных древо <br />
						с развесистой, так повелось уж, кроной. 
						</p>
						<p>
						Стрелой взмывает древо Понимания <br />
						У родника — зовется он Ах Вот Как. 
						</p>
						<p>
						Чем дальше в лес, тем шире перед вами <br />
						Долина Ясности. 
						</p>
						<p>
						Чуть где сомненье — враз развеет ветер. 
						</p>
						<p>
						Эхо никогда не просит слова, <br />
						Первым говорит о Мирозданья тайнах. 
						</p>
						<p>
						Скрытый смысл найдешь в пещере справа. <br />
						</p>
						<p>
						Слева — озеро Глубоких Убеждений. <br />
						С дна его легко всплывает правда. 
						</p>
						<p>
						И царит над всем Уверенность Святая, <br />
						а с ее вершины Суть Вещей струится. 
						</p>
						<p>
						Но заманчивый безлюден остров, <br />
						ног следы по берегам песчаным <br />
						все без исключенья прочь стремятся. 
						</p>
						<p>
						Жизнь — выше пониманья. 
						</p>
						<p class="foot-note">
						Перевод Марины Курганской 
						</p>
					</div>
					<div class="poem">
						<h3>Утопия</h3>
						<p>
						Остров, где все становится ясным. <br />
						Где можно опереться на доказательства. 
						</p>
						<p>
						Где нет путей иных, кроме пути к цели. <br />
						А кусты сгибаются под множеством ответов. 
						</p>
						<p>
						Растет тут дерево Догадки Верной <br />
						С распутанными издавна ветвями. 
						</p>
						<p>
						И удивительно прямое древо Понимания <br />
						Над источником, зовущимся Ах — вот — как... 
						</p>
						<p>
						Чем дальше в лес, тем шире открывается <br />
						Долина Очевидности. 
						</p>
						<p>
						Если залетает сомнение, ветер его развеивает. 
						</p>
						<p>
						Незваным советчиком откликается эхо <br />
						И охотно толкует тайны мироздания. 
						</p>
						<p>
						Направо — пещера, в ней содержится смысл. 
						</p>
						<p>
						Налево — озеро Глубокой Убежденности. <br />
						Со дна поднимается истина и всплывает легко на поверхность. 
						</p>
						<p>
						Царит над долиной Уверенность Несокрушимая. <br />
						С вершины ее разглядеть можно Сущность Вещей. 
						</p>
						<p>
						Несмотря на такие соблазны, остров безлюден, <br />
						Лишь берег привычно хранит следы, <br />
						Все до единого обращеные к морю. 
						</p>
						<p>
						Будто отсюда только уходили <br />
						И безвозвратно погружались в пучину. 
						</p>
						<p>
						В непрозрачные воды жизни. 
						</p>
						<p class="foot-note">
						Перевод Ирины Адельгейм и Алексея Хованского
						</p>
					</div>
				';
				break;
				
				
			case 'torture':
				$poem['title'] = 'Пытки';
				$poem['content'] = '
					<div class="poem">
						<p>
						Ничто не изменилось. <br />
						Телу присуща боль. <br />
						Должно оно есть и дышать и спать, <br />
						кожа у него тонкая, тут же под нею кровь, <br />
						оно имеет во множестве зубы и ногти, <br />
						кости его ломки, суставы его растяжимы. <br />
						В пытках все эти свойства берутся в расчет. 
						</p>
						<p>
						Ничто не изменилось. <br />
						Тело дрожит, как дрожало <br />
						до основанья Рима и после, <br />
						в двадцатом веке, до и после Рождества Христова, <br />
						пытки были и есть, лишь земля стала меньше, <br />
						и все, что происходит, — как будто здесь, за стенкой. 
						</p>
						<p>
						Ничто не изменилось. <br />
						Добавилось лишь людей, <br />
						и кроме старых провинностей явились новые, <br />
						действительные, внушенные, минутные и никакие, <br />
						но крик, которым тело за них отвечает, <br />
						был, есть и будет криком безвинной жертвы, <br />
						согласно вечной мере и реестру. 
						</p>
						<p>
						Ничто не изменилось. <br />
						Лишь манеры, церемонии, танцы. <br />
						Жест рук, заслоняющих голову, <br />
						остался, однако же, прежний. <br />
						Тело извивается, дергается, вырывается, <br />
						сбитое с ног, падает, подгибает колени, <br />
						синеет, пухнет, истекает слюной и кровью. 
						</p>
						<p>
						Ничто не изменилось. <br />
						Кроме теченья рек, <br />
						контура лесов, побережий, пустынь, ледников. <br />
						Средь этих пейзажей душа блуждает, <br />
						исчезнет, вернется, то ближе, то дальше, <br />
						сама себе чужда, неуловима, <br />
						уверена и не уверена в собственном существовании, <br />
						тогда как тело есть и есть и есть, <br />
						и некуда ему деваться. 
						</p>
						<p class="foot-note">
						Перевод Натальи Астафьевой
						</p>
					</div>
					<div class="poem">
						<h3>Tortury</h3>
						<p>
						Nic się nie zmieniło.<br />
						Ciało jest bolesne,<br />
						jeść musi i oddychac powietrzem, i spać,<br />
						ma cienką skóre, a tuż pod nią krew,<br />
						ma spory zasób zębów i paznokci,<br />
						kości jego łamliwe, stawy rozciąglliwe.<br />
						W torturach jest to wszystko brane pod uwagę.
						</p>
						<p>
						Nic się nie zmieniło.<br />
						Ciało drży, jak drżało<br />
						przed założeniem Rzymu i po jego założeniu,<br />
						w dwudziestym wieku przed i po Chrystusie,<br />
						tortury są, jak były, zmalała tylko ziemia<br />
						i cokolwiek się dzieje, to tak jak za scianą.
						</p>
						<p>
						Nic się nie zmieniło.<br />
						Przybyło tylko ludzi,<br />
						obok starych przewinien zjawiły się nowe,<br />
						rzeczywiste, wmówione, chwilowe i żadne,<br />
						ale krzyk, jakim ciało za nie odpowiada,<br />
						był, jest i będzie krzykiem niewinności,<br />
						podług odwiecznej skali i rejestru.
						</p>
						<p>
						Nic się nie zmieniło.<br />
						Chyba tylko maniery, ceremonie, tańce.<br />
						Ruch rąk osłaniających głowę<br />
						pozostał jednak ten sam.<br />
						Ciało się wije, szarpie i wyrywa,<br />
						ścięte z nóg pada, podkurcza kolana,<br />
						sinieje, puchnie, ślini się i broczy.
						</p>
						<p>
						Nic się nie zmieniło.<br />
						Poza biegiem rzek,<br />
						linią lasów, wybrzeży, pustyń i lodowców.<br />
						Wśród tych pejzaży duszyczka się snuje,<br />
						znika, powraca, zbliża się, oddala,<br />
						sama dla siebie obca, nieuchwytna,<br />
						raz pewna, raz niepewna swojego istnienia,<br />
						podczas gdy ciało jest i jest i jest<br />
						i nie ma się gdzie podziać 
						</p>
					</div>
				';
				break;
				
				
			case 'impression-of-the-theater':
				$poem['title'] = 'Впечатление от театра';
				$poem['content'] = '
					<div class="poem">
						<p>
						Наиболее важен в трагедии для меня акт шестой: <br />
						воскресение из мертвых венчает убийства на сцене, <br />
						поправляют парики, тряпки, <br />
						вырывают нож из груди, <br />
						снимают петлю с шеи, <br />
						погибшие выходят вперемежку с живыми <br />
						лицом к публике. 
						</p>
						<p>
						Кланяются в одиночку и вместе: <br />
						белеет ладонь на пронзенном сердце, <br />
						трепетно раскланивается самоубийца, <br />
						отвешивает поклоны отрубленная голова. 
						</p>
						<p>
						Кланяются попарно: <br />
						бешенство под руку со смирением, <br />
						жертва блаженно уставилась на палача, <br />
						бунтарь безобидно встает бок о бок с тираном. 
						</p>
						<p>
						Попрана вечность носком королевского башмачка. <br />
						Развеяны выводы полями шляпы. <br />
						Непоправима решимость завтра начать все сначала. 
						</p>
						<p>
						Шествие гуськом сгинувших еще до финала, <br />
						то есть в третьем, четвертом и между актами. <br />
						Чудесное возвращение пропавших без вести. <br />
						Мысль, что за кулисами они терпеливо ждали, <br />
						не снимая костюма, <br />
						не смывая грима, <br />
						трогает меня больше, чем тирады трагедии. 
						</p>
						<p>
						Но поистине вдохновляет падение занавеса <br />
						и то, что видно еще в узком просвете: <br />
						вот одна рука устремилась к брошенному цветку, <br />
						вот другая поднимает выпавший меч. <br />
						И тогда уже третья, невидимая, <br />
						выполняет свою повинность: <br />
						стискивает мне горло. 
						</p>
						<p class="foot-note">
						Перевод Виктора Коркия 
						</p>
					</div>
					<div class="">
					<h3>Wrażenia z teatru</h3>
						<p>
						Najważniejszy w tragedii jest dla mnie akt szósty;<br />
						zmartwychwstanie z pobojowisk sceny,<br />
						poprawianie peruk, szatek,<br />
						wyrywanie noża z piersi,<br />
						zdejmowanie pętli z szyi,<br />
						ustawianie się w rzędzie pomiędzy żywymi<br />
						twarzą do publiczności.
						</p>
						<p>
						Ukłony pojedyncze i zbiorowe;<br />
						Biała dłoń na ranie serca,<br />
						Dyganie samobójczyni,<br />
						Kiwanie ściętej głowy.
						</p>
						<p>
						Ukłony parzyste:<br />
						Wściekłość podaje ramię łagodności,<br />
						Ofiara patrzy błogo w oczy kata,<br />
						Buntownik bez urazy stąpa przy boku tyrana.
						</p>
						<p>
						Deptanie wieczność i noskiem złotego trzewiczka.<br />
						Rozpędzanie morałów rondem kapelusza.<br />
						Niepoprawna gotowość rozpoczęcia od jutra na nowo.
						</p>
						<p>
						Wejście gęsiego zmarłych dużo wcześniej,<br />
						Bo w akcie trzecim, czwartym oraz pomiędzy aktami.<br />
						Cudowny powrót zaginionych bez wieści.
						</p>
						<p>
						Myśl, że za kulisami czekali cierpliwie,<br />
						Nie zdejmując kostiumu,<br />
						Nie zmywając szminki,<br />
						Wzrusza mniej bardziej niż tyrady tragedii.
						</p>
						<p>
						Ale naprawdę podniosłe jest opadanie kurtyny<br />
						I to, co widać jeszcze w niskiej szparze:<br />
						Tu oto jedna ręka po kwiat spiesznie sięga,<br />
						Tam druga chwyta upuszczony miecz.<br />
						Dopiero wtedy trzecia, niewidzialna,<br />
						Spełnia swoja powinność:<br />
						Ściska mnie za gardło.
						</p>
					</div>
				';
				break;
				
				
			case 'reality':
				$poem['title'] = 'Явь';
				$poem['content'] = '
					<div class="poem">
						<p>
						Явь не ускользает, <br />
						как ускользают сны. <br />
						Ни шорох, ни звонок <br />
						ее не спугнут, <br />
						ни крик, ни грохот <br />
						от нее не пробудят. 
						</p>
						<p>
						Смутны и многозначны <br />
						образы в снах, 
						</p>
						<p>
						и можно их толковать <br />
						и так и сяк. <br />
						Явь означает явь, <br />
						вот это и впрямь загадка. 
						</p>
						<p>
						К снам есть ключи. <br />
						Явь открывается сама, <br />
						и закрыть ее не удается. <br />
						Сыплются из нее <br />
						школьные аттестаты и звезды, <br />
						бабочки детских коллекций, <br />
						души бабушкиных утюгов, <br />
						шапки без головы <br />
						и черепа облаков. 
						</p>
						<p>
						Складывается из этого всего <br />
						неразрешимый ребус. 
						</p>
						<p>
						Снов не было бы без нас. <br />
						Тот, без которого не было б яви, <br />
						неведом, <br />
						продукт же его бессонниц <br />
						дается каждому, <br />
						кто пробуждается. 
						</p>
						<p>
						Это не сны безумны, <br />
						безумна явь, 
						</p>
						<p>
						хотя бы упрямством, <br />
						с каким она держится <br />
						хода событий. 
						</p>
						<p>
						В снах еще жив <br />
						наш недавно умерший, <br />
						тешится добрым здоровьем <br />
						и возвращенной молодостью. <br />
						Явь кладет перед нами <br />
						его мертвое тело. <br />
						Явь не отступит ни на шаг. 
						</p>
						<p>
						Сны эфемерны, <br />
						память легко их стряхивает. <br />
						Явь не забудешь. <br />
						Она неодолима. <br />
						Сидит на нашей шее, <br />
						Давит сердце, <br />
						падает под ноги. 
						</p>
						<p>
						Бежать от нее невозможно, <br />
						она везде будет с нами. <br />
						Нет такой станции <br />
						на всем пути нашего следования, <br />
						где бы она нас ни ждала. 
						</p>
						<p class="foot-note">
						Перевод Натальи Астафьевой
						</p>
					</div>
				';
				break;
				
				
			case 'first-picture-of-hitler':
				$poem['title'] = 'Первая фотография Гитлера';
				$poem['content'] = '
					<div class="poem">
						<p>
						А кто этот бутуз, такой прелестный? <br />
						Это ж малыш Адольф, чадо супругов Гитлер! <br />
						Может быть, вырастет доктором юриспруденции? <br />
						Или же в венской опере будет тенором? <br />
						Чья это ручка, шейка, глазки, ушко, носик? <br />
						Чей это будет животик, еще неизвестно: <br />
						печатника, коммерсанта, врача, священника? <br />
						Куда эти милые ножки, куда они доберутся? <br />
						В садик, в школу, в контору, на свадьбу, <br />
						может быть, даже с дочерью бургомистра? 
						</p>
						<p>
						Лапушка, ангелочек, солнышко, крошка, <br />
						когда на свет рождался год назад, <br />
						на небе и земле не обошлось без знаков: <br />
						весеннее солнце и герани в окнах <br />
						и музыка шарманки во дворе, <br />
						счастливая планета в розовой бумажке, <br />
						а перед родами пророческий сон матери: <br />
						голубя во сне видеть — радостная новость, <br />
						поймать его же — прибудет гость долгожданный. <br />
						Тук-тук, кто там, стучится будущий Адольфик. 
						</p>
						<p>
						Пеленочка, слюнявчик, соска, погремушка, <br />
						мальчонка, слава Богу и тьфу-тьфу, здоровый, <br />
						похож на папу-маму, на котика в корзинке, <br />
						на всех других детишек в семейных альбомах. <br />
						Ну не будем же плакать, господин фотограф <br />
						накроется черной накидкой и сделает: пстрык. 
						</p>
						<p>
						Ателье Клингер, Грабенштрассе, <span class="tonote" id="tonote001">Браунау,</span><br />
						а Браунау — город маленький, но достойный, <br />
						почтенные соседи, солидные фирмы, <br />
						дух дрожжевого теста и простого мыла. <br />
						Не слышно ни воя собак, ни шагов судьбы. <br />
						Учитель истории расстегивает воротничок <br />
						и зевает. 
						</p>
						<p class="foot-note">
						Перевод Натальи Астафьевой
						</p>
					</div>
					<div class="poem">
						<h3>Pierwsza fotografia Hitlera</h3>
						<p>
						A któż to jest ten mały dzidziuś w kaftaniku?<br />
						Toż to mały Adolfek, syn państwa Hitlerów!<br />
						Może wyrośnie na doktora praw?<br />
						Albo będzie tenorem w operze wiedeńskiej?<br />
						Czyja to rączka, czyja, uszko, oczko, nosek?<br />
						Czyj brzuszek pełen mleka, nie wiadomo jeszcze:<br />
						drukarza, konsyliarza, kupca, księdza?<br />
						Dokąd te śmieszne nóżki zawędrują, dokąd?<br />
						Do ogródka, do szkoły, do biura, na ślub<br />
						może z córką burmistrza?
						</p>
						<p>
						Bobo, aniołek, kruszyna, promyczek,<br />
						kiedy rok temu przychodził na świat,<br />
						nie brakło znaków na niebie i ziemi:<br />
						wiosenne słońce, w oknach pelargonie,<br />
						muzyka katarynki na podwórku,<br />
						pomyślna wróżba w bibułce różowej,<br />
						tuż przed porodem proroczy sen matki:<br />
						gołąbka we śnie widzieć - radosna nowina,<br />
						tegoż schwytać - przybędzie gość długo czekany.<br />
						Puk puk, kto tam, to stuka serduszko Adolfka.
						</p>
						<p>
						Smoczek, pieluszka, śliniaczek, grzechotka,<br />
						chłopczyna, chwalić Boga i odpukać, zdrów,<br />
						podobny do rodziców, do kotka w koszyku,<br />
						do dzieci z wszystkich innych rodzinnych albumów.<br />
						No, nie będziemy chyba teraz płakać,<br />
						pan fotograf pod czarną płachtą zrobi pstryk.
						</p>
						<p>
						Atelier Klinger, Grabenstrasse Braunau,<br />
						a Braunau to niewielkie, ale godne miasto,<br />
						solidne firmy, poczciwi sąsiedzi,<br />
						woń ciasta drożdżowego i szarego mydła.<br />
						Nie słychać wycia psów i kroków przeznaczenia.<br />
						Nauczyciel historii rozluźnia kołnierzyk<br />
						i ziewa nad zeszytami. 
						</p>
					</div>
				';
				$poem['images'] = '
					<div class="left-box" style="margin-top:50px;">
						<img alt="кассандра" src="/img/shimborska/younghitler.jpg" />
						<p>А. Гитлер, 12 лет (1901)</p>
						<p>Школьная фотография, г.&nbsp;Ленц</p>
					</div>
					<div class="left-box">
						<img alt="Мемориальный камень против войны и фашизма" src="/img/shimborska/mahnstein.jpg" />
						<p>Памятник перед домом, где родился Гитлер</p>
						<p>«За&nbsp;свободу, мир и&nbsp;демократию. Не&nbsp;допустим фашизма вновь, миллионы погибших просят нас об&nbsp;этом»</p>
					</div>';
				$poem['notes'] = '
					<div class="note" id="note001">
						<p>Браунау-на-Инне — город в&nbsp;Австрии, в&nbsp;федеральной земле Верхняя Австрия, в&nbsp;Браунау 20&nbsp;апреля&nbsp;1889 года родился Адольф Гитлер</p>
					</div>
				';
				break;
				
				
			case 'elegiac-arithmetic':
				$poem['title'] = 'Элегическая арифметика';
				$poem['content'] = '
					<div class="poem">
						<p>
						Сколько тех, кого я знала 
						</p>
						<p>
						(если вправду я их знала) <br />
						мужчин, женщин <br />
						(если такое деленье остается в силе) <br />
						ступило за тот порог <br />
						(если это порог) <br />
						перебежало через этот мост <br />
						(если назвать это мостом) — 
						</p>
						<p>
						Сколько их после жизни долгой или короткой <br />
						(если для них это какая-нибудь разница) <br />
						хорошей, ибо началась <br />
						плохой, ибо кончилась <br />
						(если они не считают что наоборот) <br />
						оказалось на том берегу <br />
						(если оказалось <br />
						и если есть тот берег) — 
						</p>
						<p>
						Не дано мне знать определенно <br />
						их дальнейший жребий <br />
						(если даже это общий их жребий <br />
						и еще это жребий) — 
						</p>
						<p>
						Всё <br />
						(если это слово не слишком узко) <br />
						у них позади <br />
						(если не впереди) — 
						</p>
						<p>
						Сколько их выскочило из мчащегося времени <br />
						и в отдалении все жалостнее тает <br />
						(если стоит верить перспективе) — 
						</p>
						<p>
						Сколько <br />
						(если вопрос имеет смысл, <br />
						если можно прийти к окончательной сумме, <br />
						прежде чем ты добавишь себя самого) <br />
						уснуло глубочайшим сном <br />
						(если нет более глубокого) — 
						</p>
						<p>
						До свиданья. <br />
						До завтра. <br />
						До следующей встречи. <br />
						Этих слов они уже не хотят <br />
						(если не хотят) повторить. <br />
						Обречены на бесконечное <br />
						(если не иное) молчанье. <br />
						Заняты только тем <br />
						(если только тем), <br />
						к чему их принуждает отсутствие. 
						</p>
						<p class="foot-note">
						Перевод Натальи Астафьевой
						</p>
					</div>
					<div class="poem">
						<h3>Rachunek elegijny</h3>
						<p>
						Ilu tych, ktorych znałam<br />
						(jeśli naprawdę ich znałam)<br />
						mężczyzn, kobiet<br />
						(jeśli ten podział pozostaje w mocy)<br />
						przestąpiło ten próg<br />
						(jeżeli to próg)<br />
						przebiegło przez ten most<br />
						(jeśli nazwać to mostem) -
						</p>
						<p>
						Ilu po życiu krótszym albo dłuższym<br />
						(jeśli to dla nich wciąż jakaś różnica)<br />
						dobrym, bo się zaczęło,<br />
						złym, bo się skończyło<br />
						(jeśliby nie woleli powiedzieć na odwrót)<br />
						znalazło się na drugim brzegu<br />
						(jeśii znalazło się<br />
						a drugi brzeg istnieje) -
						</p>
						<p>
						Nie dana mi jest pewność<br />
						ich dalszego losu<br />
						{jeśli to nawet jeden wspólny los<br />
						i jeszcze los) -
						</p>
						<p>
						Wszystko<br />
						(jeżeli słowem tym nie ograniczam)<br />
						mają za sobą<br />
						(jeśli nie przed sobą) -<br />
						Ilu ich wyskoczyło z pędzącego czasu<br />
						i w oddaleniu coraz rzewniej znika<br />
						(jeżeli warto wierzyć perspektywie) -
						</p>
						<p>
						Ilu<br />
						(jeżeli pytanie ma sens.<br />
						jeżeli można dojść do sumy ostatecznej,<br />
						zanim liczący nie doliczy siebie)<br />
						zapadło w ten najgłębszy sen<br />
						(jeśli nie ma głębszego) -
						</p>
						<p>
						Do widzenia.<br />
						Do jutra.<br />
						Do następnego spotkania.<br />
						Już tego nie chcą<br />
						(jeżeli nie chcą) powtórzyć.<br />
						Zdani na nieskończone<br />
						(jeśli nie inne) milczenie.<br />
						Zajęci tylko tym<br />
						(jeżeli tylko tym)<br />
						do czego ich przymusza nieobecność. 
						</p>
					</div>
				';
				break;
				
				
			case 'in-honor-of-my-sister':
				$poem['title'] = 'В честь моей сестры';
				$poem['content'] = '
					<div class="poem">
						<p>
						Моя сестра не пишет стихи <br />
						и вряд ли она вдруг начнет писать их. <br />
						Она вся в мать — та тоже не писала стихов, <br />
						а также в отца, который, как и мать, не писал стихов. <br />
						Мне очень хорошо под крышей ее дома: <br />
						муж моей сестры скорее умрет, чем станет писать стихи. <br />
						И несмотря на то, что я начинаю повторяться, <br />
						правда заключается в том, что никто из моих родственников <br />
						никогда не писал стихи. 
						</p>
						<p>
						В ящиках письменного стола моей сестры нет старых стихов, <br />
						а в ее сумочке вы не найдете новых. <br />
						Когда моя сестра приглашает меня на обед, <br />
						я знаю — она не будет читать мне свои стихи. <br />
						Ее супы прекрасны и без этого, <br />
						и ее кофе никогда не прольется на рукопись. 
						</p>
						<p>
						Есть много семей, где никто никогда не писал стихи, <br />
						но, как говорится, в семье не без урода: поэзия, <br />
						если она случается, начинает протекать сквозь поколения, <br />
						образуя водовороты, в которых может погибнуть любое <br />
						семейное счастье. 
						</p>
						<p>
						У моей сестры не так уж плохо с устной речью, <br />
						но ее письменное наследие состоит лишь из открыток, <br />
						которые она пишет в отпуске, каждый год обещая, <br />
						что когда она вернется, ей будет <br />
						так много <br />
						много <br />
						много, <br />
						что рассказать мне.
						</p>
						<p class="foot-note">
						Перевод Глеба Шульпякова
						</p>
					</div>
				';
				break;
				
				
			case 'station':
				$poem['title'] = 'Вокзал';
				$poem['content'] = '
					<div class="poem">
						<p>
						Я не приехала в город N. <br />
						строго по расписанию. 
						</p>
						<p>
						Как я тебя и предупреждала <br />
						в моих неотправленных письмах. 
						</p>
						<p>
						В общем, ты мог не приходить <br />
						в назначенное мною время. 
						</p>
						<p>
						Поезд подошел к третьей платформе. <br />
						Вышло много народу. 
						</p>
						<p>
						И мое отсутствие присоединилось <br />
						к потоку в сторону выхода в город. 
						</p>
						<p>
						Сразу несколько женщин бросились <br />
						чтобы занять мое место <br />
						в этой толпе. 
						</p>
						<p>
						Кто-то подбежал к одной из них. <br />
						Я никогда не видела его прежде. <br />
						Но она — она узнала его <br />
						сразу же. 
						</p>
						<p>
						И пока они целовались <br />
						чужими губами, <br />
						с перрона исчез чемодан. <br />
						Не мой чемодан. 
						</p>
						<p>
						Итак, вокзал города N. <br />
						сдал на “отлично” экзамен <br />
						на предмет объективного бытия. 
						</p>
						<p>
						Целое по-прежнему было на своем месте. <br />
						Фрагменты мелькали <br />
						на обозначенных линиях. 
						</p>
						<p>
						Каждая встреча состоялась <br />
						тогда, когда была запланирована. <br />
						На недосягаемом от нас <br />
						расстоянии. 
						</p>
						<p>
						В раю с потерянным <br />
						правдоподобием. 
						</p>
						<p>
						Где же еще. <br />
						Где же еще. <br />
						Как шелестят эти маленькие <br />
						словечки. 
						</p>
						<p class="foot-note">
						Перевод Глеба Шульпякова
						</p>
					</div>
				';
				break;
				
				
			case 'absence':
				$poem['title'] = 'Отсутствие';
				$poem['content'] = '
					<div class="poem">
						<p>
						Еще бы немного, <br />
						и моя мать могла выйти <br />
						за пана Збигнева Б. из Воли Здунской, <br />
						а появись у них дочка – ею была бы не я. <br />
						Возможно, много лучше запоминающая имена и лица, <br />
						хоть раз услышанную мелодию. <br />
						Она бы знала какая птица какая. <br />
						Получала бы хорошие отметки по физике и химии <br />
						и поскромней – по польскому, <br />
						но при этом тайком бы писала стихи, <br />
						сразу куда интересней моих. 
						</p>
						<p>
						Еще бы немного, <br />
						и мой отец тогда же мог взять в жены <br />
						панну Ядвигу Р. из Закопане, <br />
						а родись у них дочка – ею была бы не я. <br />
						Возможно, поупрямей в настаивании на своем. <br />
						Храбро прыгающая в глубокую воду. <br />
						Подверженная коллективным эмоциям. <br />
						Беспрестанно замечаемая повсюду, <br />
						но редко над книгой, чаще во дворе <br />
						гоняющей мяч с мальчишками. 
						</p>
						<p>
						Возможно, обе даже бы оказались <br />
						в одной школе и в одном классе. 
						</p>
						<p>
						Но никакой между ними приязни, <br />
						никакого родства, <br />
						и на школьном снимке далеко друг от друга. 
						</p>
						<p>
						Девочки, встаньте сюда – <br />
						велел бы фотограф, – <br />
						кто пониже – вперед, кто повыше – сзади. <br />
						Когда махну, улыбнитесь. <br />
						Только еще раз посчитайтесь – <br />
						все ли тут? 
						</p>
						<p>
						Да, пан фотограф, все.
						</p>
					</div>
				';
				break;
				
				
			case 'abc':
				$poem['title'] = 'АБВ';
				$poem['content'] = '
					<div class="poem">
						<p>
						Никогда уже не получится узнать, <br />
						что думал обо мне А. <br />
						До конца ли простила меня Б. <br />
						Почему В. делал вид, что все в порядке. <br />
						Какова была роль Г. в молчании Д. <br />
						Чего ожидал Е., если ожидал. <br />
						Почему Ж. не показывала, хотя хорошо знала. <br />
						Что 3. было скрывать. <br />
						Что И. не терпелось добавить. <br />
						Имело ли значение, <br />
						что я была рядом, <br />
						для К., для Л. и остального алфавита. 
						</p>
						<p class="foot-note">
						Перевод Асара Эппеля 
						</p>
					</div>
				';
				break;
				
				
			case 'road-accident':
				$poem['title'] = 'Дорожное происшествие';
				$poem['content'] = '
					<div class="poem">
						<p>
						Они пока не знают, <br />
						что полчаса назад <br />
						произошло на шоссе. 
						</p>
						<p>
						На их часах <br />
						некое время как время, <br />
						послеполуденное, четверговое, сентябрьское. 
						</p>
						<p>
						Кто-то откидывает лапшу на дуршлаг, <br />
						Кто-то сгребает во дворике листья. <br />
						Галдя, носятся вокруг стола дети. <br />
						Кому-то милостиво позволяет погладить себя кот. <br />
						Кто-то плачет – <br />
						как оно бывает у телевизора, <br />
						когда бессовестный Диего изменяет Хуаните. <br />
						Слышится стук в дверь – <br />
						это ничего, это соседка возвращает сковородку. <br />
						В глубине квартиры звонит телефон – <br />
						пока что только насчет объявления. 
						</p>
						<p>
						Если бы кто-нибудь подошел к окну <br />
						и поглядел в небо, <br />
						он бы уже смог увидеть тучи, <br />
						присквозившие с места события. <br />
						Клочковатые, правда, и раскиданные, <br />
						но такое за ними водится.
						</p>
						<p class="foot-note">
						Перевод Асара Эппеля 
						</p>
					</div>
				';
				break;
				
				
			case 'next-day-without-us':
				$poem['title'] = 'Назавтра - без нас';
				$poem['content'] = '
					<div class="poem">
						<p>
						Утро ожидается холодным и туманным. <br />
						С запада <br />
						начнут перемещаться дождевые тучи. <br />
						Видимость предположительно слабая. <br />
						Дороги скользкие. 
						</p>
						<p>
						Постепенно в течение дня <br />
						под влиянием северного антициклона <br />
						местами возможны прояснения. <br />
						Однако при переменном и сильном порывистом ветре <br />
						вполне вероятны грозы. 
						</p>
						<p>
						Ночью <br />
						погода улучшится по всей стране, <br />
						только на юго-востоке <br />
						не исключены осадки. <br />
						Температура заметно понизится, <br />
						зато давление возрастет. 
						</p>
						<p>
						Завтрашний день <br />
						обещает быть солнечным, <br />
						хотя тем, кому жить дальше, <br />
						не помешает зонтик.
						</p>
						<p class="foot-note">
						Перевод Асара Эппеля 
						</p>
					</div>
				';
				break;
				
				
			case 'forestry-morality':
				$poem['title'] = 'Лесное моралите';
				$poem['content'] = '
					<div class="poem">
						<p>
						Он входит в дебри, <br />
						чтоб запропасть в них; <br />
						он знает лес на пролет и птичий полет, <br />
						на отлет превратный и прилет обратный. 
						</p>
						<p>
						Он вволю приволен в трущобе чащобы, <br />
						в зеленых сплетеньях, <br />
						в тенях и подтеньях, <br />
						в тиши, что в уши шуршит, <br />
						когда шаг ее ворошит. 
						</p>
						<p>
						Всё тут слажено рифмой, <br />
						словно в присловьях детских. <br />
						Между чащей и пущей, <br />
						как между стен соседских. 
						</p>
						<p>
						Видит, как рдеет, реет, спервоначалу зреет, <br />
						в укромных и скоромных завязях и связях, <br />
						что спехом тут, что смехом, что лесным орехом, <br />
						а в прорехе огрехом. 
						</p>
						<p>
						Знает, что шустро-быстро, <br />
						кто делен, кто отделен, <br />
						что за лучик из тучек <br />
						расселён меж расселин. 
						</p>
						<p>
						Где бочаги в овраге, муравейник в коряге, <br />
						кто там скоком-поскоком и наскоком боком, <br />
						что лещиной, лощиной, что лозой, что березой – <br />
						смерть здесь только вещает <br />
						обыденной прозой. 
						</p>
						<p>
						Знает, что мигом, прыгом, <br />
						по тропинке шмыгом <br />
						куда из ниоткуда, <br />
						хотя и чудо-юдо, <br />
						единственное в природе, так себе по породе. 
						</p>
						<p>
						Знает, где готика кроны, <br />
						где барокко дубравы, <br />
						что тут вихорь, что вяхирь, <br />
						как тут корой корявы <br />
						и ожидают управы <br />
						дыбом дубы от расправы. 
						</p>
						<p>
						Ну а после и возле <br />
						поляна снова медвяна, <br />
						вовсе теперь не такая, какою казалась рано. 
						</p>
						<p>
						А меж людей его тотчас обуревает злость – <br />
						всякий по нём курьезный, кто от разных розный.
						</p>
						<p class="foot-note">
						Перевод Асара Эппеля 
						</p>
					</div>
				';
				break;
				
				
			case 'case':
				$poem['title'] = 'Случай';
				$poem['content'] = '
					<div class="poem">
						<p>
						Небо, земля, утро, <br />
						время восемь пятнадцать. <br />
						В пожелтелой траве саванны <br />
						покой и безмолвие. <br />
						В отдаленье эбеновое дерево <br />
						с зеленой, как всегда, листвой <br />
						и петляющими по земле корнями. 
						</p>
						<p> 
						Внезапно в блаженной тишине что-то случается. <br />
						Две жаждущие жить жизни сорвались с места. <br />
						Стремглав уносится антилопа, <br />
						за ней львица, запыхавшаяся и голодная. <br />
						Шансы обеих пока что равны. <br />
						Даже некоторое преимущество у беглянки. <br />
						И если бы не корень, <br />
						торчащий из земли, <br />
						если бы не споткнулось <br />
						одно из четырех копытец, <br />
						если бы не четверть секунды <br />
						сбитого ритма, <br />
						чем пользуется львица, <br />
						метнувшись долгим прыжком... 
						</p>
						<p>
						На вопрос: кто виноват, <br />
						ничего, только молчанье. <br />
						Невиноватое небо, circulus coelestis. <br />
						Невиноватая terra nutrix, земля-кормилица. <br />
						Невиноватое tempus fugitivum, время. <br />
						Невиноватая антилопа, gazelle dorcas. <br />
						Невиноватая львица, leo massaicus. <br />
						Невиноватое дерево, diospyros mespiliformis. <br />
						И наблюдатель с биноклем, <br />
						всегдашний в подобных случаях <br />
						homo sapiens innocens. 
						</p>
						<p class="foot-note">
						Перевод Асара Эппеля 
						</p>
					</div>
				';
				break;
				
				
			case 'repechage':
				$poem['title'] = 'Утешение';
				$poem['content'] = '
					<div class="poem">
						<p>
						<span class="tonote" id="tonote001">Дарвин</span>.<br />
						Для отдохновения якобы читал романы. <br />
						Однако терпеть не мог, <br />
						если они кончались печально. <br />
						Когда ему такой попадался, <br />
						яростно швырял его в камин. 
						</p>
						<p>
						Правда, неправда – <br />
						а я склонна верить. 
						</p>
						<p>
						Обозрев разумом столько пространств и времен, <br />
						наглядевшись стольких вымерших видов, <br />
						таких триумфов сильных над слабыми, <br />
						такой уймы попыток просуществовать, <br />
						уже с начала или в результате напрасных, <br />
						что хотя бы от вымысла <br />
						с его микромасштабом <br />
						имел право ожидать хеппи-энда. 
						</p>
						<p>
						То есть обязательно: лучик из-за туч, <br />
						любовники снова вместе, семьи помирились, <br />
						сомнения рассеяны, верность вознаграждена, <br />
						ценности откопаны, состояния возвращены, <br />
						соседи сожалеют о своем ожесточении, <br />
						доброе имя восстановлено, алчность устыжена, <br />
						старые девы выданы за почтенных пасторов, <br />
						интриганы сосланы в другое полушарие, <br />
						подделыватели документов спущены с лестниц, <br />
						соблазнители девиц спешат к алтарям, <br />
						вдовы утешены, сироты не брошены, <br />
						гордыня смирена, раны обихожены, <br />
						блудные сыновья позваны к столу, <br />
						горькая чаша выплеснута в море, <br />
						платки мокры от слез примиренья, <br />
						повсюду ликованье – музыка и пенье, <br />
						а <span class="tonote" id="tonote002">собачка Фидо</span>, <br />
						потерявшаяся еще в первой главе, <br />
						пускай опять бегает по дому <br />
						и радостно тявкает.
						</p>
						<p class="foot-note">
						Перевод Асара Эппеля 
						</p>
					</div>
				';
				$poem['images'] = '
					<div class="left-box" style="margin-top:50px;">
						<img alt="Чарлз Дарвин" src="/img/shimborska/darwin.jpg" />
						<p>Чарлз Дарвин (1881)</p>
					</div>
					<div class="left-box" style="margin-top:100px;">
						<img alt="Чарлз Дарвин" src="/img/shimborska/fido_the_lincolns_dog.jpg" />
						<p>Фидо (1861)<br />
						собака А.&nbsp;Линкольна<br />
						Автор F.&nbsp;W.Ingmire</p>
					</div>';
				$poem['notes'] = '
					<div class="note" id="note001">
						<p>Чарлз Роберт Дарвин (1809&nbsp;—&nbsp;1882)&nbsp;— английский натуралист и&nbsp;путешественник, одним из&nbsp;первых осознал и&nbsp;наглядно продемонстрировал, что все живые организмы эволюционируют во&nbsp;времени от&nbsp;общих предков.</p>
					</div>
					<div class="note" id="note002">
						<p>Фидо&nbsp;&mdash; популярная в&nbsp;США кличка собаки. В&nbsp;переводе с&nbsp;латинского означает &laquo;Я&nbsp;доверяю&raquo;. Причина популярности клички Фидо у&nbsp;американских владельцев собак заключается в&nbsp;том, что так звали собаку Авраама Линкольна.</p>
					</div>
				';
				break;
				
				
			case 'old-professor':
				$poem['title'] = 'Старый профессор';
				$poem['content'] = '
					<div class="poem">
						<p>
						Спросила его о времени, <br />
						когда мы были еще такие молодые, <br />
						наивные, запальчивые, глупые, неготовые. 
						</p>
						<p>
						Кое-что, кроме молодости, осталось <br />
						– ответил. 
						</p>
						<p>
						Спросила его, по-прежнему ли он знает, что для человечества хорошо, а что плохо. 
						</p>
						<p>
						Самое смертоносное заблуждение из возможных <br />
						– ответил. 
						</p>
						<p>
						Спросила его о будущем, <br />
						все ли еще оно ему ясно зримо. 
						</p>
						<p>
						Слишком много я прочел исторической литературы <br />
						– ответил. 
						</p>
						<p>
						Спросила его о фотографии <br />
						в рамке на письменном столе. 
						</p>
						<p>
						Были, сплыли. Брат, кузен, жена брата, <br />
						жена, дочка на коленях жены, <br />
						кот на руках у дочки <br />
						и цветущая черешня, а над черешней <br />
						неопознанная летающая птичка <br />
						– ответил. 
						</p>
						<p>
						Спросила его, бывает ли он <br />
						счастлив. 
						</p>
						<p>
						Работаю <br />
						– ответил. 
						</p>
						<p>
						Спросила о друзьях, есть ли они еще. 
						</p>
						<p>
						Несколько бывших моих ассистентов, <br />
						у которых уже тоже бывшие ассистенты, <br />
						пани Людмила – помощница по дому, <br />
						некто очень близкий, но заграницей, <br />
						две сотрудницы библиотеки, обе всегда улыбаются, <br />
						маленький Юрек из квартиры напротив и Марк Аврелий <br />
						– ответил. 
						</p>
						<p>
						Спросила его о здоровье и самочувствии. 
						</p>
						<p>
						Запрещают мне кофе, водку, папиросы, <br />
						переносить тяжелые воспоминания и вещи. <br />
						Вынужден делать вид, что этого не слышу <br />
						– ответил. 
						</p>
						<p>
						Спросила про садик и скамейку в садике. 
						</p>
						<p>
						В ясные вечера наблюдаю небо. <br />
						Не устаю удивляться, <br />
						сколько там точек зрения <br />
						– ответил.
						</p>
						<p class="foot-note">
						Перевод Асара Эппеля 
						</p>
					</div>
				';
				break;
				
				
			case 'outlook':
				$poem['title'] = 'Перспектива';
				$poem['content'] = '
					<div class="poem">
						<p>
						Разминулись как чужие, <br />
						без жеста и слова, <br />
						она по дороге в лавку, <br />
						он к машине. 
						</p>
						<p>
						Может, в смятенье <br />
						или рассеянности, <br />
						или позабыв, <br />
						что какое-то время <br />
						любили друг друга до гроба. 
						</p>
						<p>
						К тому же нет гарантии, <br />
						что это были они. <br />
						Может, издали так, <br />
						а вблизи не совсем. 
						</p>
						<p>
						Я увидела их из окна, <br />
						а кто глядит сверху, <br />
						скорей всего ошибается. 
						</p>
						<p>
						Она исчезла за стеклянной дверью, <br />
						он сел за руль <br />
						и уехал. <br />
						То есть ничего не произошло, <br />
						даже если произошло. 
						</p>
						<p>
						А я, всего лишь мгновенье <br />
						уверенная, что видела, <br />
						пытаюсь в случайном стихотвореньице <br />
						убедить вас, Читателей, <br />
						что было это печально.
						</p>
						<p class="foot-note">
						Перевод Асара Эппеля 
						</p>
					</div>
				';
				break;
				
				
			case 'courtesy-blind':
				$poem['title'] = 'Учтивость незрячих';
				$poem['content'] = '
					<div class="poem">
						<p>
						Поэт читает стихи незрячим. <br />
						Он и думать не думал, что будет так сложно. <br />
						Дрожит его голос. <br />
						Дрожат руки. 
						</p>
						<p>
						Поэт чувствует, что каждая фраза <br />
						подвержена здесь испытанию тьмой <br />
						и должна справляться сама, <br />
						неосвещенная, нецветная. 
						</p>
						<p>
						Рискованное приключение <br />
						в его строчках для звезд, <br />
						зари, облаков, радуги, неоновых реклам, луны, <br />
						для рыбы, до сих пор столь серебряной под водою, <br />
						и ястреба столь тихо, высоко в поднебесье. 
						</p>
						<p>
						Он читает – потому что поздно уже не читать – <br />
						о мальчике в куртке желтой на лужайке зеленой, <br />
						о доступных сосчитать их красных кровлях в долине, <br />
						о мелькающих номерах на майках игроков <br />
						и голой незнакомке в приотворенной двери. 
						</p>
						<p>
						Он бы хотел промолчать – хотя уже невозможно – <br />
						святых и блаженных на своде собора, <br />
						прощальный взмах в вагонном окошке, <br />
						стеклышко микроскопа и лучик в перстне <br />
						и экраны и зеркала и альбом с фотографиями. 
						</p>
						<p>
						Но велика учтивость незрячих, <br />
						велики снисходительность и великодушие. <br />
						Слушают, улыбаются, рукоплещут. 
						</p>
						<p>
						Кто-то даже подходит <br />
						с книжкой открытой задом наперед, <br />
						прося невидимый для себя автограф. 
						</p>
						<p class="foot-note">
						Перевод Асара Эппеля 
						</p>
					</div>
				';
				break;
				
				
			case 'dogs-monologue':
				$poem['title'] = 'Монолог пса, заплутавшего в эпохе';
				$poem['content'] = '
					<div class="poem">
						<p>
						Есть псы и псы. Я избранным был псом. <br />
						С отменной родословной и волчьей кровью в жилах. <br />
						Я жил на взгорье, чуя носом виды <br />
						лугов под солнцем, елей после ливней <br />
						и груд земли на прогалинах. 
						</p>
						<p>
						У меня был солидный дом с послушной прислугой. <br />
						Меня кормили, мыли, чесали щеткой, <br />
						водили на чудесные прогулки. <br />
						Но уважительно, без панибратства. 
						</p>
						<p>
						Все понимали, кто я. <br />
						Чей я пес. 
						</p>
						<p>
						Любая паршивая дворняга может иметь хозяина. <br />
						Но осторожней – никаких сравнений. <br />
						Мой был единственный такой на свете. <br />
						За ним повсюду следовала стая, <br />
						не отстававшая ни на шаг <br />
						и взиравшая с опасливым восхищеньем. 
						</p>
						<p>
						Мне же предназначались улыбки <br />
						с плохо скрываемой завистью. <br />
						Ибо только я имел право <br />
						встречать его радостными прыжками, <br />
						только я – прощаться, хватая зубами за брюки. <br />
						Только мне разрешалось <br />
						с головой на его коленях <br />
						удостаиваться, чтоб гладил и тормошил уши. <br />
						Только я мог притвориться при нем, что сплю, <br />
						и тогда он ко мне наклонялся и что-то шептал. 
						</p>
						<p>
						На других он сердился часто и громко. <br />
						Рычал на всех, бранился, <br />
						бегал от стены к стене. <br />
						Думаю, любил он только меня <br />
						и больше никогда никого. 
						</p>
						<p>
						Еще мне полагалось: ждать и не сомневаться. <br />
						А он ненадолго появлялся и надолго исчезал. <br />
						Что его держало в долине, не знаю. <br />
						Однако понимаю, что неотложные дела, <br />
						столь же, наверно, неотложные, <br />
						как для меня перепалки с кошками <br />
						и всем, что зачем-то двигается. 
						</p>
						<p>
						Есть разная судьба. Моя вдруг изменилась. <br />
						Настала какая-то весна, <br />
						а его со мной не было. <br />
						Дома поднялась непонятная беготня. <br />
						Ящики, чемоданы, сундуки взваливали на машины. <br />
						Колеса с визгом съезжали вниз <br />
						и умолкали за поворотом. 
						</p>
						<p>
						На террасе горело старье и тряпье, <br />
						желтые блузы, повязки с черными знаками <br />
						и много, очень много рваных картонок, <br />
						из которых повываливались флажки. 
						</p>
						<p>
						Я метался в этой сумятице, <br />
						скорее озадаченный, чем злой. <br />
						Чувствовал шерстью недобрые взгляды. <br />
						Словно был ничьею собакой, <br />
						приблудным дармоедом, <br />
						которого гонят метлой уже от ступенек. 
						</p>
						<p>
						Кто-то сорвал с меня ошейник с серебряным набором. <br />
						Кто-то пнул мою миску, не первый уже день пустую. <br />
						А потом кто-то последний, прежде чем отъехать, <br />
						высунулся из кабины <br />
						и выстрелил в меня два раза. 
						</p>
						<p>
						И даже не сумел попасть куда надо, <br />
						потому что я умирал тяжело и долго <br />
						в жужжании обнаглевших мух. 
						</p>
						<p>
						Словно был ничьею собакой, <br />
						приблудным дармоедом, <br />
						которого гонят метлой уже от ступенек. 
						</p>
						<p>
						Кто-то сорвал с меня ошейник с серебряным набором. <br />
						Кто-то пнул мою миску, не первый уже день пустую. <br />
						А потом кто-то последний, прежде чем отъехать, <br />
						высунулся из кабины <br />
						и выстрелил в меня два раза. 
						</p>
						<p>
						И даже не сумел попасть куда надо, <br />
						потому что я умирал тяжело и долго <br />
						в жужжании обнаглевших мух. <br />
						Я – пес моего хозяина. 
						</p>
						<p class="foot-note">
						Перевод Асара Эппеля 
						</p>
					</div>
				';
				break;
				
				
			case 'conversation-with-atropos':
				$poem['title'] = 'Беседа с Атропой';
				$poem['content'] = '
					<div class="poem">
						<p>
						Госпожа <span class="tonote" id="tonote001">Атропа</span>? 
						</p>
						<p>
						Верно, это я. 
						</p>
						<p>
						Из трех дочерей Необходимости <br />
						у Вас наисквернейшая репутация. 
						</p>
						<p>
						Явное преувеличение, милая моя поэтесса, <br />
						Клото прядет нить жизни, <br />
						и нить эта непрочная, <br />
						ее легко перерезать. <br />
						Лахесис отмеряет длину аршином. <br />
						Они ведь тоже не малые дети. 
						</p>
						<p>
						Однако ножницы в Ваших руках. 
						</p>
						<p>
						Поскольку в моих, я ими и пользуюсь. 
						</p>
						<p>
						Вижу, что даже сейчас, пока мы беседуем... 
						</p>
						<p>
						Я трудоголик, такая уж у меня натура. 
						</p>
						<p>
						Не чувствуете ли Вы себя усталой, утомленной, <br />
						не выспавшейся, скажем, ночью? Нет, неужели нет? <br />
						Без отпусков, уик-эндов, празднования праздников, <br />
						перерывов на покурить? 
						</p>
						<p>
						Накопилось бы работы, а я этого не люблю. 
						</p>
						<p>
						Непостижимое усердие. <br />
						И ниоткуда одобрения, <br />
						премий, отличий, кубков, орденов? <br />
						Или хотя бы дипломов в рамках? 
						</p>
						<p>
						Как в парикмахерской? Благодарю покорно. 
						</p>
						<p>
						Кто-нибудь Вам помогает? Если да, то кто? 
						</p>
						<p>
						Занятный парадокс - сами же вы, смертные. <br />
						Всякие диктаторы, бесчисленные фанатики. <br />
						Хотя не я их приневоливаю. <br />
						Сами рвутся в дело. 
						</p>
						<p>
						Наверно, и войны должны Вас радовать, <br />
						от них ведь значительная подмога. 
						</p>
						<p>
						Радовать ? Не знаю такого чувства. <br />
						Не я к ним призываю, <br />
						не я руковожу их ходом. <br />
						Но признаю: главным образом благодаря им <br />
						я есмь всякую минуту. 
						</p>
						<p>
						Не жаль вам нитей, перерезанных слишком коротко? 
						</p>
						<p>
						Слишком коротко, не слишком коротко - <br />
						тут разница только для вас. 
						</p>
						<p>
						А если бы кто-то поважней вздумал от Вас избавиться <br />
						и отправил на пенсию? 
						</p>
						<p>
						Не поняла. Выражайся яснее. 
						</p>
						<p>
						Спрошу по-другому: есть ли над Вами Начальство? 
						</p>
						<p>
						...Попросила бы следующий вопрос. 
						</p>
						<p>
						Больше вопросов нету. 
						</p>
						<p>
						В таком случае прощайте. <br />
						Вернее... 
						</p>
						<p>
						Понятно. Понятно. До свидания.
						</p>
						<p class="foot-note">
						Перевод Асара Эппеля 
						</p>
					</div>
				';
				$poem['images'] = '
					<div class="left-box" style="margin-top:50px;">
						<img alt="атропа" src="/img/shimborska/atropos.jpg" />
						<p>Атропа (барельеф)</p>
					</div>';
				$poem['notes'] = '
					<div class="note" id="note001">
						<p>Атропос или Атропа («Неотвратимая») — неумолимая, неотвратимая участь (смерть). Одна из трёх мойр, греческих богинь судьбы. Перерезающая нить.</p>
					</div>
				';
				break;
				
				
			case 'poets-nightmare':
				$poem['title'] = 'Страшный сон поэта';
				$poem['content'] = '
					<div class="poem">
						<p>
						Послушай, что мне приснилось. <br />
						С виду всё как у нас. <br />
						Под ногами земля, вода, огонь, воздух, <br />
						вертикаль, горизонталь, колесо, треугольник, <br />
						левая и правая сторона. <br />
						Погоды сносные, пейзажи недурные <br />
						и множество существ, наделенных речью. <br />
						Однако речь не такая, как на земле. <br />
						Во фразах преобладает несослагательное наклонение. <br />
						Названия точно прилегают к вещам. <br />
						Ничего не добавить, не отнять, <br />
						не изменить и не переставить. 
						</p>
						<p>
						Время всегда какое на часах. <br />
						У прошлого с будущим недолгое дленье. <br />
						Для воспоминаний – конкретная минувшая секунда, <br />
						для предопределений – другая, <br />
						которая как раз наступает. 
						</p>
						<p>
						Слова не нужны. Ни на одно больше чем следует, <br />
						а это значит, что нет поэзии, <br />
						нет философии и нет религии. <br />
						Подобные шалости не принимаются в расчет. 
						</p>
						<p>
						Ничего, что бы можно всего лишь подумать <br />
						или с закрытыми глазами увидеть. <br />
						Если искать, то лишь то, что явственно рядом. <br />
						Если вопрошать, только то, на что есть ответ. 
						</p>
						<p>
						Они очень бы удивились, <br />
						если б могли удивиться, <br />
						что где-то существуют причины удивляться. 
						</p>
						<p>
						Слово "смятенье" сочтено у них неприличным <br />
						и не решилось бы стоять в словаре. 
						</p>
						<p>
						Мир представляется отчетливым, <br />
						даже когда не видно ни зги. <br />
						Каждому отпускается по доступной цене. <br />
						Не отходя от кассы никто не требует сдачи. 
						</p>
						<p>
						Из чувств – удовлетворение. И никаких скобок. <br />
						Жизнь с точкой на поводке. <br />
						И грохотанье галактик. 
						</p>
						<p>
						Согласись, что ничего хуже <br />
						не может случиться поэту. <br />
						А потом – ничего лучше, <br />
						если быстро проснуться.
						</p>
						<p class="foot-note">
						Перевод Асара Эппеля 
						</p>
					</div>
				';
				break;
				
				
			case 'maze':
				$poem['title'] = 'Лабиринт';
				$poem['content'] = '
					<div class="poem">
						<p>
						– а сейчас несколько шагов <br />
						от стены к стене, <br />
						по тем ступенькам вверх <br />
						или по этим вниз; <br />
						потом чуть-чуть левей, <br />
						если не правей, <br />
						от стены между стен <br />
						до седьмого порога, <br />
						откуда-то куда-то <br />
						вплоть до пересеченья, <br />
						где выпало сойтись, <br />
						чтоб сразу разойтись, <br />
						твоим надеждам, ошибкам, промашкам, <br />
						попыткам, намерениям и снова надеждам. 
						</p>
						<p>
						Дорога за дорогой, <br />
						а обратной нету. <br />
						Доступно только то, <br />
						что впереди и дальше, <br />
						а дальше в утешенье <br />
						восемь поворотов, <br />
						дивись и удивляйся, <br />
						за кулисой кулиса. <br />
						Выбрать даже можно, <br />
						где быть или не быть, <br />
						перескочить, сбочить, <br />
						но чтоб не проскочить. 
						</p>
						<p>
						Значит, туда и сюда, <br />
						или же вон туда, <br />
						по догадке, отгадке, <br />
						напрямик, на память, <br />
						на как придется, <br />
						на путаные перепутья. <br />
						Сквозь проходы ворот <br />
						в коридорный ход <br />
						спешно, ибо во времени <br />
						у тебя мало времени, <br />
						с места на место <br />
						к еще пока отворенным, <br />
						где темень и смятенье, <br />
						но просвет на свет, <br />
						где радость, хоть не в радость, <br />
						возле и после, <br />
						невесть где, но есть где, <br />
						везде и всюду <br />
						счастье в несчастье, <br />
						словно скобка в скобках, <br />
						и все бы разлюбезно, <br />
						но внезапно бездна, <br />
						бездна, но мосток, <br />
						мосток, но шаткий, <br />
						шаткий, но единственный, <br />
						ибо нет другого. 
						</p>
						<p>
						Ведь вне всяких сомнений <br />
						должен быть выход. <br />
						Но не ты его ищешь, <br />
						он тебя ищет, <br />
						это он изначально <br />
						за тобой в погоне, <br />
						а лабиринт сей <br />
						не что иное как только, <br />
						только твое, покуда возможно, <br />
						твое, пока что твое, <br />
						бегство, бегство – 
						</p>
						<p class="foot-note">
						Перевод Асара Эппеля 
						</p>
					</div>
				';
				break;
				
				
			case 'neglect':
				$poem['title'] = 'Небрежение';
				$poem['content'] = '
					<div class="poem">
						<p>
						Неважно я вчера повела себя в космосе. <br />
						Прожила целые сутки, ни о чем не спросила, <br />
						ничему не удивилась. 
						</p>
						<p>
						Занималась обычными делами, <br />
						словно только оно и требовалось. 
						</p>
						<p>
						Вдох, выдох, шаг за шагом, обязанности, <br />
						но без мысли, устремленной далее <br />
						выхода из дому и прихода домой. 
						</p>
						<p>
						Мир мог быть воспринят как потрясающий, <br />
						а я воспользовалась им для заурядного потребления. 
						</p>
						<p>
						Никаких как и почему, <br />
						и как он здесь такой оказался, <br />
						и зачем ему уйма неугомонных подробностей. 
						</p>
						<p>
						Я была точно гвоздь, слабо вколоченный в стенку, <br />
						или <br />
						(здесь сравнение, которого не нашлось). 
						</p>
						<p>
						Одна за одной происходили перемены <br />
						даже в ограниченном поле мгновения ока. 
						</p>
						<p>
						Рукою на день моложе за столом помоложе <br />
						был иначе нарезан вчерашний хлеб. 
						</p>
						<p>
						Тучи – как ни разу и дождь как ни разу, <br />
						ибо падал новыми каплями. 
						</p>
						<p>
						Земля обернулась вокруг оси, <br />
						но уже в покинутом навсегда пространстве. 
						</p>
						<p>
						Продолжалось это добрых 24 часа. <br />
						1440 минут оказии. <br />
						86 4оо секунд для ознакомления. 
						</p>
						<p>
						Космический savoir-vivre <br />
						хотя насчет нас и помалкивает, <br />
						однако чего-то все же добивается: <br />
						толики внимания, нескольких фраз Паскаля, <br />
						ошеломленного участия в этой <br />
						с неведомыми правилами 
						игре.
						</p>
						<p class="foot-note">
						Перевод Асара Эппеля 
						</p>
					</div>
				';
				break;
				
				
			case 'greek-statue':
				$poem['title'] = 'Греческая статуя';
				$poem['content'] = '
					<div class="poem">
						<p>
						Усилиями людей и всяческих стихий <br />
						над ней досконально поработало время. <br />
						Сперва лишило носа, потом гениталий, <br />
						потом пальцев рук и стоп, <br />
						с годами одного плеча и другого, <br />
						ляжки правой и ляжки левой, <br />
						спины, головы и ягодиц, <br />
						а что отвалилось, смололо в осколки, <br />
						в щебень, в гравий, в песок. 
						</p>
						<p>
						Когда таким манером умирают живые, <br />
						от каждого удара бывает много крови. 
						</p>
						<p>
						Однако мрамор статуй гибнет белоцветно <br />
						и не всегда до конца. 
						</p>
						<p>
						От этой, о которой речь, остался только торс, <br />
						весь словно сдерживаемое при усилии дыханье, <br />
						ибо должен теперь <br />
						взять <br />
						на себя <br />
						достоинство и красоту <br />
						утраченного остального. 
						</p>
						<p>
						Это ему удается, <br />
						пока еще удается, <br />
						удается и восхищает, <br />
						восхищает и длится – 
						</p>
						<p>
						И добрых слов заслуживает время тоже, <br />
						ибо приостановило работу, <br />
						отложив кое-что на потом. 
						</p>
						<p class="foot-note">
						Перевод Асара Эппеля 
						</p>
					</div>
				';
				break;
				
				
			case 'in-fact-any-verse':
				$poem['title'] = 'Вообще-то любые стихи';
				$poem['content'] = '
					<div class="poem">
						<p>
						Вообще-то любые стихи <br />
						могут быть названы "Мгновение". 
						</p>
						<p>
						Довольно одной фразы <br />
						во времени настоящем, <br />
						бывшем и даже будущем; 
						</p>
						<p>
						довольно, если что-то, <br />
						несомое словами, <br />
						зашелестит, вспыхнет, <br />
						просвищет, проплывет <br />
						или же пребудет <br />
						вроде бы неизменным, <br />
						но с переменчивой тенью; 
						</p>
						<p>
						довольно, если говорится <br />
						о ком-то рядом с кем-то <br />
						или о ком-то возле чего-то; 
						</p>
						<p>
						про Алю, у которой есть кот <br />
						или кота больше нету; 
						</p>
						<p>
						или о других Алях, <br />
						котах и не котах <br />
						из других букварей, <br />
						листаемых ветром; 
						</p>
						<p>
						довольно, если в поле зрения <br />
						автор устроит временные горы <br />
						и недолговечные долины; 
						</p>
						<p>
						если, воспользовавшись возможностью, <br />
						скажет о небе <br />
						только с виду вечном и бесконечном; 
						</p>
						<p>
						если объявится под пишущей рукой <br />
						хотя бы единственная вещь, <br />
						названная чьей-нибудь вещью; 
						</p>
						<p>
						если черным по белому, <br />
						или хотя бы в предположении, <br />
						по важному или пустому поводу, <br />
						поставлены будут знаки вопроса, <br />
						а в ответе – <br />
						если двоеточие:
						</p>
						<p class="foot-note">
						Перевод Асара Эппеля 
						</p>
					</div>
				';
				break;
			case 'poet-and-world':
				$poem['title'] = 'Поэт и мир';
				$poem['content'] = '
					<div class="text">
						<h3>Нобелевская лекция 1996&nbsp;года</h3>
						<p>Самой трудной, когда произносишь речь, считается первая фраза. У&nbsp;меня это, стало быть, уже позади&hellip; Но&nbsp;я&nbsp;чувствую, что и&nbsp;последующие фразы будут непростыми&nbsp;&mdash; третья, шестая, десятая, вплоть до&nbsp;последней, ведь я&nbsp;собираюсь говорить о&nbsp;поэзии. На&nbsp;эту тему я&nbsp;высказываюсь редко, крайне редко. И&nbsp;всегда мне сопутствует ощущение, что делаю я&nbsp;это не&nbsp;наилучшим образом. Потому моя речь не&nbsp;будет чересчур длинной. Всякое несовершенство легче стерпеть, если оно преподносится в&nbsp;небольших&nbsp;дозах.</p>
						<p>Сегодняшний поэт скептичен и&nbsp;подозрителен даже&nbsp;&mdash; а&nbsp;возможно, прежде всего&nbsp;&mdash; по&nbsp;отношению к&nbsp;самому себе. Он&nbsp;неохотно вслух называет себя поэтом&nbsp;&mdash; словно&nbsp;бы немножечко этого стыдится. В&nbsp;нашу крикливую эпоху куда легче признать собственные недостатки&nbsp;&mdash; конечно, если они эффектно выглядят,&nbsp;&mdash; чем достоинства, которые глубже спрятаны и&nbsp;в&nbsp;которых мы&nbsp;сами не&nbsp;до&nbsp;конца уверены&hellip; В&nbsp;различных анкетах или в&nbsp;беседах со&nbsp;случайными попутчиками, когда поэт вынужден обозначить род своих занятий, он&nbsp;обходится неопределенным &laquo;литератор&raquo;&nbsp;&mdash; или называет свою дополнительную специальность. Сообщение о&nbsp;том, что перед ними поэт, чиновники или пассажиры автобуса принимают с&nbsp;легким недоверием и&nbsp;опаской. Думаю, с&nbsp;подобной реакцией сталкивается и&nbsp;философ. Однако философ все-таки в&nbsp;лучшем положении: он&nbsp;сплошь и&nbsp;рядом имеет возможность украсить свою профессию каким-нибудь ученым званием. Доктор философии&nbsp;&mdash; это звучит уже гораздо&nbsp;солидней.</p>
						<p>А&nbsp;вот докторов поэзии нет. Будь оно так, профессия &laquo;поэт&raquo; требовала&nbsp;бы специального образования, регулярной сдачи экзаменов, наличия теоретических трудов, подкрепленных библиографией и&nbsp;сносками, наконец, торжественно вручаемых дипломов. А&nbsp;это, в&nbsp;свою очередь, означало&nbsp;бы, что недостаточно исписанного&nbsp;&mdash; пускай прекраснейшими стихами&nbsp;&mdash; листка бумаги: чтобы считаться поэтом, нужна&nbsp;&mdash; и&nbsp;это необходимое условие&nbsp;&mdash; некая бумажка с&nbsp;печатью. Вспомним, что именно из-за отсутствия таковой был отправлен в&nbsp;ссылку будущий лауреат Нобелевской премии, гордость российской поэзии Иосиф Бродский. Его сочли &laquo;тунеядцем&raquo;, поскольку он&nbsp;не&nbsp;имел официального документа, дозволяющего ему быть&nbsp;поэтом&hellip;</p>
						<p>Несколько лет назад я&nbsp;имела честь и&nbsp;удовольствие познакомиться с&nbsp;Ним лично. Я&nbsp;заметила, что изо всех известных мне стихотворцев он&nbsp;один любил говорить о&nbsp;себе &laquo;поэт&raquo;, произнося это слово без внутреннего сопротивления, даже с&nbsp;какой-то вызывающей свободой. Думаю, потому, что не&nbsp;забыл жестокие унижения, которые претерпел&nbsp;в&nbsp;молодости.</p>
						<p>В&nbsp;более счастливых странах, где не&nbsp;так легко попирается человеческое достоинство, поэты, разумеется, мечтают, чтобы их&nbsp;печатали, читали, понимали, но&nbsp;уже не&nbsp;делают ничего&nbsp;&mdash; или почти ничего&nbsp;&mdash; для того, чтобы в&nbsp;повседневной жизни выделяться среди своего окружения. А&nbsp;ведь ещё так недавно, в&nbsp;первые десятилетия нашего века, поэты любили шокировать публику затейливыми нарядами, эксцентрическим&nbsp;поведением.</p>
						<p>Однако это всегда было зрелищем на&nbsp;потребу общественного&nbsp;мнения.</p>
						<p>Рано или поздно наступал момент, когда поэт закрывал за&nbsp;собой дверь, сбрасывал все эти пелерины, блестящие украшения и&nbsp;прочие поэтические аксессуары и&nbsp;оказывался в&nbsp;тишине, в&nbsp;ожидании самого себя, наедине с&nbsp;ещё пустым листом бумаги. Потому что, по&nbsp;сути дела, это&nbsp;&mdash; главное.</p>
						<p>Характерное явление. Снимается много биографических фильмов о&nbsp;великих ученых и&nbsp;великих художниках. Честолюбивые режиссеры ставят перед собой задачу достоверно изобразить творческий процесс, в&nbsp;результате которого были сделаны важные научные открытия или созданы знаменитые произведения искусства. Можно весьма успешно показать работу ученого: лаборатория, разнообразные приборы, действующие механизмы способны на&nbsp;некоторое время приковать внимание зрителей. Кроме того, на&nbsp;экране удается очень драматично представить минуты неуверенности, напряженного ожидания: получится&nbsp;ли повторяемый уже в&nbsp;тысячный раз, только с&nbsp;мелкими изменениями,&nbsp;эксперимент?</p>
						<p>Зрелищными могут быть и&nbsp;фильмы о&nbsp;художниках&nbsp;&mdash; нетрудно воспроизвести все стадии создания картины, от&nbsp;первого штриха до&nbsp;последнего прикосновения кисти к&nbsp;холсту. Фильмы о&nbsp;композиторах наполнены музыкой&nbsp;&mdash; с&nbsp;первых тактов, которые творец слышит в&nbsp;себе, до&nbsp;окончательно созревшего, инструментованного произведения. Все это не&nbsp;более чем наивно и&nbsp;ничего не&nbsp;говорит о&nbsp;том странном состоянии духа, которое принято называть вдохновением, однако зрителю хотя&nbsp;бы есть на&nbsp;что посмотреть и&nbsp;что&nbsp;послушать.</p>
						<p>Гораздо хуже обстоит дело с&nbsp;поэтами. Их&nbsp;работа безнадежно нефотогенична. Человек сидит за&nbsp;столом или лежит на&nbsp;диване, уперев неподвижный взгляд в&nbsp;стену или в&nbsp;потолок, время от&nbsp;времени напишет семь строк, одну из&nbsp;которых через четверть часа зачеркнет, и&nbsp;потом ещё целый час ничего не&nbsp;происходит&hellip; Какой зритель выдержит&nbsp;подобное?</p>
						<p>Я&nbsp;упомянула о&nbsp;вдохновении. На&nbsp;вопрос &laquo;что это?&raquo;&nbsp;&mdash; если это существует,&nbsp;&mdash; современные поэты дают уклончивые ответы. Не&nbsp;потому, что никогда не&nbsp;ощутили благодати этого внутреннего&nbsp;импульса.</p>
						<p>Причина иная. Нелегко объяснить кому-либо нечто, непонятное&nbsp;самому.</p>
						<p>И&nbsp;я, когда меня иногда об&nbsp;этом спрашивают, далеко обхожу суть дела. Я&nbsp;отвечаю так: вдохновение вовсе не&nbsp;исключительная привилегия поэтов или вообще художников. Есть, была и&nbsp;всегда будет определенная категория людей, которых посещает вдохновение. Это все те, кто сознательно выбирает себе занятие и&nbsp;трудится с&nbsp;любовью и&nbsp;с&nbsp;фантазией. Бывают такие врачи, бывают такие учителя, бывают такие садовники; можно перечислить ещё сотню других профессий. Для этих людей работа может стать неизменно увлекательным приключением&nbsp;&mdash; если только они не&nbsp;оставят без внимания ни&nbsp;один брошенный ею&nbsp;вызов. Несмотря на&nbsp;трудности, на&nbsp;поражения, их&nbsp;любопытство не&nbsp;иссякает. Каждая решенная проблема влечет за&nbsp;собой целый рой новых вопросов. Вдохновение, чем&nbsp;бы оно ни&nbsp;было, рождается из&nbsp;постоянного&nbsp;&laquo;не&nbsp;знаю&raquo;.</p>
						<p>Таких людей не&nbsp;слишком много. Большинство обитателей этой земли работают, чтобы обеспечить себе средства к&nbsp;существованию, работают, потому что должны работать. Не&nbsp;они по&nbsp;велению сердца выбирают работу, за&nbsp;них делают выбор жизненные обстоятельства. Работа нелюбимая, работа скучная, работа, которую ценишь только потому, что даже в&nbsp;такой форме она не&nbsp;всем доступна,&nbsp;&mdash; горькая недоля, одна из&nbsp;самых тяжких, какие выпадают человеку. И&nbsp;не&nbsp;похоже, чтобы в&nbsp;ближайшие столетия произошла какая-нибудь счастливая&nbsp;перемена.</p>
						<p>Тем не&nbsp;менее прошу обратить внимание, что я, хотя и&nbsp;отнимаю у&nbsp;поэтов монополию на&nbsp;вдохновение, все&nbsp;же помещаю их&nbsp;в&nbsp;немногочисленную группу баловней&nbsp;судьбы.</p>
						<p>Но&nbsp;тут у&nbsp;слушателей могут возникнуть&nbsp;сомнения.</p>
						<p>Всевозможные палачи, диктаторы, фанатики, демагоги, борющиеся за&nbsp;власть с&nbsp;помощью нескольких&nbsp;&mdash; главное, чтобы погромче! &mdash;&nbsp;лозунгов, тоже любят свою работу и&nbsp;тоже выполняют её&nbsp;рьяно и&nbsp;изобретательно. Да, но&nbsp;они &laquo;знают&raquo;. Они знают, и&nbsp;того, что знают, им&nbsp;абсолютно достаточно. Ничто сверх уже известного их&nbsp;не&nbsp;интересует, ибо может поколебать их&nbsp;убежденность в&nbsp;собственной правоте. А&nbsp;всякое знание, которое не&nbsp;порождает очередных вопросов, очень быстро умирает, утрачивает необходимый для жизни накал. В&nbsp;самых крайних случаях&nbsp;&mdash; чему есть примеры и&nbsp;в&nbsp;древней, и&nbsp;в&nbsp;новейшей истории&nbsp;&mdash; оно даже может стать смертельно опасным для&nbsp;общества.</p>
						<p>Поэтому я&nbsp;так высоко ценю два коротких слова: &laquo;не&nbsp;знаю&raquo;. Маленьких, но&nbsp;всемогущих. Открывающих для нас пространства, которые спрятаны в&nbsp;нас самих, и&nbsp;пространства, в&nbsp;которых затеряна наша крошечная Земля. Если&nbsp;бы Исаак Ньютон не&nbsp;сказал себе &laquo;не&nbsp;знаю&raquo;, яблоки в&nbsp;его саду могли&nbsp;бы сыпаться градом у&nbsp;него на&nbsp;глазах, а&nbsp;он&nbsp;бы в&nbsp;лучшем случае подбирал их&nbsp;и&nbsp;с&nbsp;аппетитом съедал. Если&nbsp;бы моя соотечественница Мария Склодовская-Кюри не&nbsp;сказала себе &laquo;не&nbsp;знаю&raquo;, она&nbsp;бы, вероятно, преподавала химию в&nbsp;пансионе для благородных девиц, и&nbsp;в&nbsp;этой&nbsp;&mdash; вполне достойной&nbsp;&mdash; работе прошла&nbsp;бы вся её&nbsp;жизнь. Но&nbsp;она сказала &laquo;не&nbsp;знаю&raquo;, и&nbsp;именно эти слова привели её, притом дважды, в&nbsp;Стокгольм, где людям с&nbsp;неспокойной и&nbsp;вечно ищущей душой вручают Нобелевскую&nbsp;премию.</p>
						<p>И&nbsp;поэт, если он&nbsp;настоящий поэт, должен неустанно повторять про себя: &laquo;не&nbsp;знаю&raquo;. Каждым своим стихотворением он&nbsp;пытается что-то объяснить, но&nbsp;едва ставит точку, как его начинают одолевать сомнения, он&nbsp;начинает понимать, что объяснение это недолговечное и&nbsp;неисчерпывающее. И&nbsp;тогда он&nbsp;делает ещё одну попытку и&nbsp;ещё одну, а&nbsp;потом все эти доказательства его недовольства собой историки литературы скрепят огромной скрепкой и&nbsp;назовут &laquo;творческим&nbsp;багажом&raquo;.</p>
						<p>Иногда мне представляются совершенно нереальные ситуации. Например, я&nbsp;имею дерзость вообразить, будто у&nbsp;меня появилась возможность побеседовать с&nbsp;Екклесиастом, автором необычайно волнующего плача о&nbsp;тщете любых человеческих начинаний. Я&nbsp;бы низко ему поклонилась, ведь он&nbsp;один из&nbsp;самых важных&nbsp;&mdash; по&nbsp;крайней мере, для меня&nbsp;&mdash; поэтов. Но&nbsp;потом схватила&nbsp;бы его за&nbsp;руку. &laquo;Нет ничего нового под солнцем&raquo;,&nbsp;&mdash; сказано Тобою, Екклесиаст. Но&nbsp;Ты&nbsp;же сам родился новым под солнцем. А&nbsp;поэма, которая сочинена Тобой, тоже новая под солнцем, потому что до&nbsp;Тебя её&nbsp;никто не&nbsp;написал. И&nbsp;новые под солнцем все Твои читатели, ибо до&nbsp;Тебя они не&nbsp;могли её&nbsp;прочесть. И&nbsp;кипарис, в&nbsp;тени которого Ты&nbsp;присел, не&nbsp;растет здесь от&nbsp;сотворения мира. Ему дал начало какой-то другой кипарис, подобный Твоему, но&nbsp;не&nbsp;в&nbsp;точности такой&nbsp;же. А&nbsp;кроме того, позволь спросить у&nbsp;Тебя, Екклесиаст, что нового под солнцем Тебе хочется ещё написать. Нечто такое, что дополнило&nbsp;бы Твои рассуждения, или&nbsp;же Тебя искушает желание кое-какие из&nbsp;них опровергнуть? В&nbsp;уже написанной поэме Ты&nbsp;в&nbsp;числе прочего заметил и&nbsp;радость&nbsp;&mdash; пусть преходящую, ну&nbsp;и&nbsp;что с&nbsp;того? Так, может быть, о&nbsp;ней будет Твоя новая под солнцем поэма? Есть уже у&nbsp;Тебя какие-нибудь заметки, предварительные наброски? Не&nbsp;скажешь&nbsp;же Ты, надеюсь: &laquo;Я&nbsp;все написал, мне нечего больше добавить&raquo;. Такого не&nbsp;может сказать ни&nbsp;один поэт на&nbsp;свете, а&nbsp;уж&nbsp;тем паче такой великий, как&nbsp;Ты.</p>
						<p>Мир, что&nbsp;бы мы&nbsp;о&nbsp;нем ни&nbsp;подумали, напуганные его необъятностью и&nbsp;собственным перед ним бессилием, обиженные его равнодушием к&nbsp;страданиям отдельных существ&nbsp;&mdash; людей, зверей, а&nbsp;может быть, и&nbsp;растений, ибо откуда эта уверенность, что растения избавлены от&nbsp;страданий; что&nbsp;бы мы&nbsp;ни&nbsp;подумали о&nbsp;его пространствах, пронизанных излучением звезд, звезд, вокруг которых мало-помалу открывают какие-то планеты&nbsp;&mdash; уже мертвые? ещё мертвые? &mdash;&nbsp;неизвестно; что&nbsp;бы мы&nbsp;ни&nbsp;сказали о&nbsp;том вселенском театре, куда у&nbsp;нас, правда, есть билет, но&nbsp;действителен он&nbsp;до&nbsp;смешного короткое время, ограниченное двумя заданными датами; что&nbsp;бы мы&nbsp;ни&nbsp;подумали об&nbsp;этом мире&nbsp;&mdash; он&nbsp;удивителен.</p>
						<p>Но&nbsp;в&nbsp;определении &laquo;удивительный&raquo; скрывается некая логическая ловушка. Ведь обычно нас удивляет то, что отступает от&nbsp;известной и&nbsp;общепризнанной нормы, не&nbsp;укладывается в&nbsp;некую очевидность, к&nbsp;которой мы&nbsp;привыкли. Так вот, такого очевидного мира просто нет. Наше удивление возникает самопроизвольно и&nbsp;не&nbsp;вытекает из&nbsp;сравнений с&nbsp;чем&nbsp;бы&nbsp;то&nbsp;ни&nbsp;было.</p>
						<p>Согласна, в&nbsp;бытовой речи, не&nbsp;заставляющей нас задумываться над каждым словом, мы&nbsp;широко пользуемся определениями &laquo;обычная жизнь&raquo;, &laquo;обычный мир&raquo;, &laquo;обычный порядок вещей&raquo;&hellip; Однако в&nbsp;поэзии, где взвешивается каждое слово, ничто не&nbsp;является обычным и&nbsp;нормальным. Ни&nbsp;один холм и&nbsp;ни&nbsp;одно облако над ним. Ни&nbsp;один день и&nbsp;ни&nbsp;одна наступающая за&nbsp;ним ночь. И&nbsp;главное&nbsp;&mdash; ничье существование на&nbsp;этом&nbsp;свете.</p>
						<p>Похоже, что у&nbsp;поэтов всегда будет много&nbsp;работы.</p>
						<p class="foot-note">Перевод с&nbsp;польского Ксении&nbsp;Старосельской</p>
					</div>
					<div class="text">
						<h3>От&nbsp;переводчика</h3>
						<p>Виславу Шимборскую не&nbsp;нужно представлять постоянному&nbsp;&mdash; особенно давнишнему&nbsp;&mdash; читателю нашего журнала: он&nbsp;знаком с&nbsp;ней ровно тридцать лет. Впервые её&nbsp;стихи появились в&nbsp;&laquo;Иностранной литературе&raquo; в&nbsp;1967 году&nbsp;&mdash; перевел их&nbsp;Асар Эппель. А&nbsp;в&nbsp;1973-м она вместе со&nbsp;своим, ныне покойным, мужем, прекрасным прозаиком Корнелем Филиповичем, была гостем редакции, после чего журнал опубликовал запись беседы с&nbsp;польскими писателями. Во&nbsp;время этой встречи и&nbsp;была сделана фотография, которая сейчас перед вами. Впоследствии стихи Шимборской печатались в&nbsp;&laquo;ИЛ&raquo; в&nbsp;1974, 1978 (также в&nbsp;переводах А.Эппеля) и&nbsp;в&nbsp;1994 годах (в&nbsp;переводах Натальи Астафьевой). Надо сказать, что опубликовать Шимборскую в&nbsp;70-х годах было далеко не&nbsp;просто: её&nbsp;фамилия числилась в&nbsp;&laquo;черных&raquo; списках, которыми услужливые &laquo;польские друзья&raquo; снабжали посольство СССР и&nbsp;которые затем попадали к&nbsp;&laquo;кураторам&raquo; культуры. Переводчику и&nbsp;редакторам журнала приходилось проявлять большую настойчивость и&nbsp;отвагу, а&nbsp;то&nbsp;и&nbsp;хитрить, чтобы &laquo;протащить&raquo; в&nbsp;номер стихи неблагонадежного&nbsp;автора.</p>
						<p>И&nbsp;сейчас редакция с&nbsp;удовольствием присоединяет свой голос к&nbsp;хору поздравивших новую Нобелевскую лауреатку почитателей её&nbsp;таланта. Мы&nbsp;вспоминаем, какую высокую оценку дала Шимборской переводившая её&nbsp;Анна Ахматова, отмечавшая зрелость мысли и&nbsp;отточенность стиля поэтессы; нам хочется процитировать прошлогоднего лауреата Нобелевской премии ирландца Шеймаса Хини, который в&nbsp;ответ на&nbsp;вопрос, знает&nbsp;ли он, кто получил эту премию в&nbsp;1996 году, воскликнул: &laquo;Вислава, это прекрасно! Потрясающе, что &bdquo;Нобеля&ldquo; получила поэтесса, которую я&nbsp;так высоко ценю. /&hellip;/ Шимборская&nbsp;&mdash; как Беккет&nbsp;&mdash; останется свободной. Как и&nbsp;он, она будет по-прежнему следовать за&nbsp;той тоненькой стрелкой компаса, которая у&nbsp;нее в&nbsp;голове, и, полагаю, ничто не&nbsp;собьет её&nbsp;с&nbsp;этого пути&raquo;; мы&nbsp;согласны с&nbsp;Чеславом Милошем, ещё одним польским лауреатом Нобелевской премии, который сказал, что присужденная Шимборской награда&nbsp;&mdash; подтверждение высокой позиции польской поэзии в&nbsp;мире; и&nbsp;с&nbsp;Иосифом Бродским, который включил&nbsp;бы &laquo;Конец и&nbsp;начало&raquo; Шимборской в&nbsp;антологию ста лучших стихотворений&nbsp;XX&nbsp;века.</p>
						<p>Мы&nbsp;надеемся, что впредь ещё не&nbsp;раз предоставим читателю возможность познакомиться с&nbsp;новыми стихами и&nbsp;эссе замечательной поэтессы, умнейшего, тонкого и&nbsp;обаятельного&nbsp;человека.</p>
					</div>
				';
				break;
			case 'literary-mail':
				$poem['title'] = 'Литературная почта, или Как стать/не стать писателем (фрагменты)';
				$poem['content'] = '
				<div class="text">
					<h3>Вместо предисловия</h3>
					
					<p><b>Из беседы критика и литературоведа Тересы Валяс с Виславой Шимборской</b></p>
					
					<p><b>Тереса Валяс.</b> Кто в&nbsp;&laquo;<span class="tonote" id="tonote001">Жицелитерацке</span>&raquo; придумал&nbsp;&laquo;Почту&raquo;?</p>
					<p><b>Вислава Шимборская.</b> Придумывать ничего не&nbsp;понадобилось. Это давняя традиция, практиковавшаяся в&nbsp;литературных журналах. Как отвечать автору, в&nbsp;особенности начинающему? Не&nbsp;писать&nbsp;же всем подробные письма. Обычно ограничиваются кратким &laquo;не&nbsp;можем опубликовать&raquo; или &laquo;советуем ещё поработать&raquo;. Мы&nbsp;сочли, что иногда следует наши решения обосновывать.&nbsp;&lt;&hellip;&gt;</p>
					<p><b>Т.&thinsp;В.</b> Отвергая то&nbsp;или иное произведение и, вероятно, представляя себе беззащитного, дрожащего автора, ты&nbsp;никогда не&nbsp;чувствовала себя&nbsp;бессердечной?</p>
					<p><b>В.&thinsp;Ш.</b> Бессердечной? Да&nbsp;я&nbsp;сама начинала с&nbsp;плохих стихов и&nbsp;плохих рассказов. И&nbsp;знаю, что ушат холодной воды на&nbsp;голову&nbsp;&mdash; отличное терапевтическое средство. А&nbsp;вот когда особа, именующая себя педагогом, пишет &laquo;сровнение&raquo;, я&nbsp;становлюсь&nbsp;безжалостной.</p>
					<p><b>Т.&thinsp;В.</b> Ну, это просто безграмотность и&nbsp;к&nbsp;искусству отношения&nbsp;не&nbsp;имеет.</p>
					<p><b>В.&thinsp;Ш.</b> На&nbsp;уровне &laquo;Почты&raquo; об&nbsp;искусстве речи не&nbsp;шло. Я&nbsp;старалась объяснять элементарные вещи, советовала хорошенько обдумывать то, что пишешь, относиться к&nbsp;себе хоть мало&mdash;мальски критически. Наконец, призывала читать книги. Возможно, я&nbsp;ошибаюсь, но, хочется надеяться, кое у&nbsp;кого эта прекрасная привычка останется на&nbsp;всю жизнь.&nbsp;&lt;&hellip;&gt;</p>
					<p><b>Т.&thinsp;В.</b> Ты&nbsp;всегда была уверена в&nbsp;правильности своих&nbsp;оценок?</p>
					<p><b>В.&thinsp;Ш.</b> Не&nbsp;всегда&nbsp;&mdash; только в&nbsp;случаях ярко выраженной&nbsp;графомании.</p>
					<p><b>Т.&thinsp;В.</b> Графомания&nbsp;&mdash; жестокое слово. Не&nbsp;знаю, приходило&nbsp;ли тебе в&nbsp;голову, что в&nbsp;других сферах человеческой деятельности нет столь негативных оценочных понятий. &laquo;Халтурщик&raquo;, например, тоже звучит обидно, но&nbsp;ему далеко до&nbsp;&laquo;графомана&raquo;. Плохой столяр, плохой сантехник, часовщик-недоучка живут себе преспокойно, и&nbsp;никто не&nbsp;ставит на&nbsp;них клеймо. Нападкам подвергаются главным образом писатели-неудачники. И&nbsp;ещё, пожалуй, незадачливые любовники: &laquo;импотент&raquo; не&nbsp;менее оскорбителен, чем&nbsp;&laquo;графоман&raquo;.</p>
					<p><b>В.&thinsp;Ш.</b> Да, но&nbsp;графоман&nbsp;&mdash; в&nbsp;своей области&nbsp;&mdash; может! Много может, слишком много! Впрочем, если не&nbsp;ошибаюсь, в&nbsp;&laquo;Почте&raquo; я&nbsp;никого не&nbsp;называла графоманом. Просто старалась направить повышенную писательскую активность в&nbsp;другое русло. Например, рекомендовала писать письма, вести дневник или сочинять для близких стишки на&nbsp;случай.&nbsp;&lt;&hellip;&gt;</p>
					<p><b>Т.&thinsp;В.</b> Читая &laquo;Почту&raquo;, я&nbsp;подумала: мало кто находит в&nbsp;себе мужество сказать начинающему писателю, что нужно обладать талантом,&nbsp;&mdash; ты&nbsp;одна из&nbsp;немногих. Серьезные критики сейчас неохотно употребляют это&nbsp;слово.</p>
					<p><b>В.&thinsp;Ш.</b> И, наверно, правильно делают: талант&nbsp;&mdash; понятие, не&nbsp;поддающееся научному определению. Хотя это не&nbsp;означает, что то, чему нельзя дать точное определение, не&nbsp;существует. Но&nbsp;я&nbsp;не&nbsp;критик и&nbsp;могу позволить себе некоторую свободу высказываний. Талант&hellip; У&nbsp;одного он&nbsp;есть, у&nbsp;другого нет, и&nbsp;все тут. Из&nbsp;чего, впрочем, не&nbsp;следует, что последний&nbsp;&mdash; неудачник. Возможно, он&nbsp;станет выдающимся биохимиком или откроет Северный&nbsp;полюс.</p>
					<p><b>Т.&thinsp;В.</b> Насколько я&nbsp;помню, Северный полюс давно&nbsp;открыт.</p>
					<p><b>В.&thinsp;Ш.</b> Верно, это я&nbsp;маху дала. Хотела сказать, что таланты встречаются не&nbsp;только в&nbsp;литературе, но&nbsp;и&nbsp;в&nbsp;любых других областях.&nbsp;&lt;&hellip;&gt;</p>
					<p><b>Т.&thinsp;В.</b> Скажи, а&nbsp;с&nbsp;каким чувством ты&nbsp;сейчас перечитывала&nbsp;&laquo;Почту&raquo;?</p>
					<p><b>В.&thinsp;Ш.</b> Мне она показалась скорее забавной, чем полезной с&nbsp;дидактической точки зрения. И&nbsp;ответственность за&nbsp;это лежит в&nbsp;значительной степени&nbsp;на&nbsp;мне.</p>
					<p class="foot-note">Октябрь&nbsp;2000</p>
				</div>
				<div class="text">
					<p><b>Наблюдателю.</b> Вы&nbsp;обвиняете нас в&nbsp;том, что мы&nbsp;безжалостны к&nbsp;юным дарованиям. &laquo;Эти хилые растеньица нужно холить и&nbsp;лелеять, а&nbsp;не&nbsp;критиковать за&nbsp;слабость и&nbsp;неспособность плодоносить, как это делаете Вы&raquo;. Мы&nbsp;против теплиц. Литературные дарования должны произрастать в&nbsp;естественных климатических условиях и&nbsp;уметь к&nbsp;ним приспосабливаться. Иногда растеньицу кажется, что оно станет дубом, а&nbsp;мы&nbsp;видим, что это обыкновенная травка, которая даже при самом заботливом уходе не&nbsp;превратится в&nbsp;дуб. Конечно, иной раз нам случается ошибаться. Но&nbsp;ведь расти мы&nbsp;этим травкам не&nbsp;запрещаем, не&nbsp;вырываем их&nbsp;с&nbsp;корнем. Пусть растут и&nbsp;когда-нибудь докажут, что мы&nbsp;были неправы,&nbsp;&mdash; мы&nbsp;охотно признаем свое поражение. Впрочем, если&nbsp;б Вы&nbsp;с&nbsp;меньшей предвзятостью читали эту нашу рубрику, могли&nbsp;бы заметить: мы&nbsp;хвалим все, что того заслуживает. И&nbsp;не&nbsp;наша вина, если хвалим не&nbsp;часто. Литературный талант&nbsp;&mdash; вещь&nbsp;штучная.</p>
					<p><b>Кристине Е.</b> Дорогая пани К. Е., мы&nbsp;идеи не&nbsp;покупаем и&nbsp;не&nbsp;продаем. Как и&nbsp;не&nbsp;служим посредниками при купле-продаже. Один только раз&nbsp;&mdash; по&nbsp;доброте душевной и&nbsp;совершенно бескорыстно&nbsp;&mdash; попытались подсунуть своему знакомому идею романа&nbsp;&mdash; о&nbsp;торговце, который сам себя взорвал. Но&nbsp;наш знакомый счел эту идею экстравагантной и&nbsp;заявил, что она обречена на&nbsp;провал. С&nbsp;тех пор, почувствовав себя посрамленными, мы&nbsp;ничего подобного себе&nbsp;не&nbsp;позволяем.</p>
					<p><b>Супругам Магро.</b> Уважаемые господа, Вы&nbsp;слишком многого от&nbsp;нас требуете. Вы&nbsp;оба пишете стихи и&nbsp;во&nbsp;что&nbsp;бы то&nbsp;ни&nbsp;стало хотите узнать, кто пишет лучше. Мы&nbsp;предпочитаем в&nbsp;Вашу жизнь не&nbsp;вмешиваться, тем более что в&nbsp;письме нас испугала фраза &laquo;От&nbsp;этого многое зависит&hellip;&raquo; Соперничество в&nbsp;семейной жизни заканчивается хорошо только в&nbsp;кинокомедиях. Да&nbsp;и&nbsp;стиль у&nbsp;Вас обоих примерно одинаковый, поэтому разобраться трудно. Будучи горячими сторонниками нерушимости домашнего очага, мы&nbsp;этим соломоновым решением&nbsp;ограничиваемся.</p>
					<p><b>ОЛ.</b> Если Вам не&nbsp;хватает мужества прийти к&nbsp;нам и&nbsp;поговорить о&nbsp;Ваших стихах, приходите без мужества. Несмелых мы&nbsp;принимаем очень тепло. Как правило, они предъявляют к&nbsp;себе более высокие требования, проявляют больше упорства и&nbsp;энергичнее шевелят мозгами, чем смельчаки. Качества эти сами по&nbsp;себе ещё ничего не&nbsp;означают, но&nbsp;при наличии врожденных способностей оказывают их&nbsp;владельцу неоценимую услугу&nbsp;&mdash; превращают способности в&nbsp;талант. Фрак для визита не&nbsp;потребуется&nbsp;&mdash; редакция принимает посетителей в&nbsp;дневные&nbsp;часы!</p>
					<p><b>П. З. В.</b> &laquo;Либо подарите надежду на&nbsp;публикацию, либо, на&nbsp;худой конец, утешьте&hellip;&raquo; Ознакомившись с&nbsp;Вашими стихами, мы&nbsp;остановились на&nbsp;втором. Итак, внимание: утешаем. Ваша участь прекрасна: Вы&nbsp;станете читателем, притом наивысшей категории,&nbsp;&mdash; читателем бескорыстным. С&nbsp;литературой у&nbsp;Вас сложатся любовные отношения, в&nbsp;которых преимущество окажется на&nbsp;Вашей стороне: не&nbsp;Вы, а&nbsp;Вас станут завоевывать. Вы&nbsp;будете читать разные разности ради чистого удовольствия. Не&nbsp;выискивая у&nbsp;автора &laquo;приемов&raquo;, не&nbsp;раздумывая, можно&nbsp;ли то&nbsp;или сё написать лучше либо так&nbsp;же хорошо, как он, но&nbsp;иначе. Не&nbsp;испытывая зависти, не&nbsp;впадая в&nbsp;депрессию, не&nbsp;страдая подозрительностью, свойственной читателю, который сам занимается сочинительством. Данте для Вас будет Данте, независимо от&nbsp;того, была или не&nbsp;была у&nbsp;него &laquo;рука&raquo; в&nbsp;издательстве. По&nbsp;ночам Вас не&nbsp;будет терзать вопрос, почему Икса, который не&nbsp;умеет рифмовать, напечатали, а&nbsp;про мои стихи, хотя я&nbsp;все зарифмовал и&nbsp;на&nbsp;пальцах подсчитал слоги, ни&nbsp;словечка не&nbsp;написали. Вам (почти) плевать будет на&nbsp;кислые физиономии редакторов и&nbsp;чинимые издателями преграды. А&nbsp;вот ещё одна немалая корысть: писатель легко может прослыть &laquo;неудачником&raquo;, а&nbsp;про читателя такого не&nbsp;услышишь. Конечно, существует целая рать любителей чтения, у&nbsp;которых отношения с&nbsp;книгой не&nbsp;складываются (Вы, естественно, не&nbsp;из&nbsp;их&nbsp;числа), но&nbsp;им&nbsp;это особо жизни не&nbsp;портит, а&nbsp;вот если человек пишет, но&nbsp;получается у&nbsp;него неважнецки, все вокруг сразу начинают качать головой и&nbsp;вздыхать. Даже на&nbsp;поддержку своей девушки не&nbsp;очень-то можно рассчитывать. Ну&nbsp;как? Почувствовали, что Вы&nbsp;кум королю? Надеюсь,&nbsp;да.</p>
					<p><b>Халине В.</b> Вынуждены Вам сказать нечто весьма неприятное: Вы&nbsp;слишком простодушны и&nbsp;чистосердечны, чтобы хорошо писать. В&nbsp;недрах души талантливого писателя полно разных демонов. И&nbsp;даже если эти демоны (как им&nbsp;и&nbsp;положено) дремлют перед тем, как он&nbsp;взялся за&nbsp;перо, и&nbsp;после того, как поставил точку, то&nbsp;в&nbsp;процессе сочинительства они развивают бурную деятельность. Без их&nbsp;помощи автор не&nbsp;мог&nbsp;бы изобразить сложный внутренний мир своих героев. &laquo;Ничто человеческое мне не&nbsp;чуждо&raquo;&nbsp;&mdash; ох, эта сентенция не&nbsp;о&nbsp;безгрешных.&nbsp;С&nbsp;уважением&hellip;</p>
					<p><b>Уле.</b> Определить, что такое поэзия, одной фразой? Хм&hellip; Нам известны по&nbsp;меньшей мере пять сотен определений, но&nbsp;ни&nbsp;одно из&nbsp;них не&nbsp;кажется достаточно точным и&nbsp;емким. Вдобавок каждое отражает дух только своей эпохи. Врожденный скептицизм не&nbsp;позволяет нам придумывать собственное определение. Зато мы&nbsp;запомнили замечательный афоризм Карла Сэндберга: &laquo;Поэзия&nbsp;&mdash; это дневник, который пишет морское животное, живущее на&nbsp;суше и&nbsp;мечтающее о&nbsp;полетах&raquo;. Сгодится на&nbsp;первое&nbsp;время?</p>
					<p><b>Хелиодору.</b> Вы&nbsp;пишете:&laquo;Знаю, стихи у&nbsp;меня местами слабые, но&nbsp;что поделаешь, больше ничего исправлять я&nbsp;уже не&nbsp;буду&raquo;. А, собственно, почему, уважаемый Хелиодор? Не&nbsp;потому&nbsp;ли, что поэзия&nbsp;&mdash; это святое? А&nbsp;может быть, потому, что не&nbsp;заслуживает серьезного отношения? И&nbsp;то, и&nbsp;другое ошибочно, хуже того: избавляет начинающих поэтов от&nbsp;обязанности трудиться. Сладко и&nbsp;приятно говорить знакомым, что в&nbsp;пятницу в&nbsp;0.45 на&nbsp;тебя снизошло озарение и&nbsp;незримый дух принялся нашептывать тебе на&nbsp;ухо тайные истины с&nbsp;таким жаром, что только успевай записывать. Даже великим поэтам случалось рассказывать подобные байки ошеломленным друзьям. Но&nbsp;дома, украдкой, они не&nbsp;жалея сил эти самые потусторонние диктанты исправляли, черкали, переделывали. Духи духами, но&nbsp;и&nbsp;у&nbsp;поэзии есть свои прозаические&nbsp;стороны.</p>
					<p><b>К.&thinsp;К.</b> Нам очень неприятно без конца повторять: незрело, банально, бесформенно&hellip; Но&nbsp;ведь наша рубрика&nbsp;&mdash; не&nbsp;для нобелевских лауреатов, а&nbsp;для тех, кто лишь со&nbsp;временем сошьет себе фрак для поездки в&nbsp;Стокгольм. Нас огорчает, что Вы&nbsp;полагаете, будто свободный белый стих освобождает от&nbsp;всяческих рамок. Вы&nbsp;небрежно набрасываете строчки, которые затем ломаете, и&nbsp;переставляете слова в&nbsp;произвольном порядке: это&nbsp;&mdash; налево, это&nbsp;&mdash; направо. Поэзия (как&nbsp;бы ещё мы&nbsp;её&nbsp;ни&nbsp;определяли) есть, была и&nbsp;будет игрой, а&nbsp;игр без правил не&nbsp;существует. Это знают все дети, почему&nbsp;же взрослые&nbsp;забывают?</p>
					<p><b>Ч.&thinsp;Б.</b> Дорогой Чесек, нам было страшно интересно, кто&nbsp;же преступник,&nbsp;&mdash; Ты&nbsp;до&nbsp;самого конца держал нас в&nbsp;напряжении. И&nbsp;вдруг сам покойник встает из&nbsp;гроба и&nbsp;указывает на&nbsp;убийцу! Вот это да, вот это сюрприз! Что&nbsp;бы Ты&nbsp;нам впредь ни&nbsp;прислал, мы&nbsp;все прочтем с&nbsp;живым интересом. Но&nbsp;серьезной оценки Тебе придется ещё пару лет подождать, ибо все указывает на&nbsp;то, что Ты&nbsp;не&nbsp;очень давно появился на&nbsp;свет божий. Вскоре Ты&nbsp;убедишься, что не&nbsp;только Агата сочиняет истории, от&nbsp;которых захватывает дух, но&nbsp;и&nbsp;господин Гомер, господин Шекспир, господин Достоевский, ещё кое-кто. С&nbsp;наилучшими&nbsp;пожеланиями&hellip;</p>
					<p><b>М.&thinsp;О.</b> &laquo;Прощание с&nbsp;летом выплывает будто белые перси из&nbsp;туники, сколотой изумрудом&hellip;&raquo; Возникает много вопросов: почему будто перси? почему обязательно белые? почему выплывает? почему из&nbsp;туники? Дальнейшее не&nbsp;разрешает наших сомнений. Зато в&nbsp;конце появляется Адам, обольщаемый змеем&hellip; Ход смелый, но&nbsp;вряд&nbsp;ли это открытие укоренится в&nbsp;человеческом сознании. Люди с&nbsp;большим удовольствием приняли к&nbsp;сведению, что во&nbsp;всем виновата&nbsp;Ева.</p>
					<p><b>ЯнушуБрт.</b> Почему в&nbsp;Ваших стихах Изида мечется по&nbsp;двору, не&nbsp;зная, к&nbsp;чему приложить руки? Почему Наполеон падает, пронзенный копьем? Почему колоннаразлетается вдребезги как кипяток, а&nbsp;фуга обагряет кровью глыбу&nbsp;ожидания?<br />Полоний&nbsp;бы сказал, что в&nbsp;этом безумии нет последовательности. Речь естественно идет о&nbsp;беседе Полония с&nbsp;капитаном Куком, когда они вместе отправились&nbsp;по&nbsp;грибы.</p>
					<p><b>КамиллеВ.</b> Что разделяет людей? Незримая стена. С&nbsp;чем надлежит сравнить большой город? С&nbsp;ульем либо с&nbsp;джунглями. Что можно сказать о&nbsp;пустоте? Что она бесплодна. Что происходит с&nbsp;натянутой струной? Разумеется, она лопается. Что разочаровало редактора? Вот&nbsp;это.</p>
					<p><b>Эл. М.&thinsp;Т.</b> Пятистраничная поэма под названием &laquo;Поэт&raquo; литературными достоинствами не&nbsp;обладает, однако является любопытным примером довольно распространенной легенды о&nbsp;поэте как любимце муз, путь которого усеян розами и&nbsp;которому принадлежат все сокровища мира. Пани Эля, где Вы&nbsp;такого видели? Сообщите, пожалуйста, фамилию и&nbsp;адрес этого полубога. Мы&nbsp;хотели&nbsp;бы узнать, какое издательство платит ему чистым золотом за&nbsp;строчку, кто неустанно осыпает его цветами и&nbsp;как он&nbsp;ухитряется видеть исключительно сладкие сны? Известным нам поэтам чего только не&nbsp;снится, кроме того, у&nbsp;них иногда болят зубы, они частенько страдают от&nbsp;безденежья и&nbsp;жизнь далеко не&nbsp;всегда им&nbsp;улыбается. На&nbsp;чью-то долю конечно выпадают маленькие радости, но&nbsp;не&nbsp;сказать, чтобы&nbsp;беспрестанно.</p>
					<p><b>Роб. И.</b> Нет, нет, нет, никто не&nbsp;пишет &laquo;для себя&raquo;, вы&nbsp;глубоко заблуждаетесь. Всё, начиная с&nbsp;надписи мелом на&nbsp;стене &laquo;Йоськабалван&raquo; и&nbsp;кончая &laquo;Иосифом и&nbsp;его братьями&raquo;, родилось из&nbsp;неодолимого желания навязать другим свои мысли. &laquo;Для себя&raquo; мы&nbsp;записываем разве что адреса в&nbsp;записную книжку, а&nbsp;если хватает духу, то&nbsp;ещё и&nbsp;сколько кому&nbsp;должны.</p>
					<p><b>В. и&nbsp;К.</b> В&nbsp;ответ на&nbsp;просьбу разрешить спор о&nbsp;том, чем освещать клуб во&nbsp;время авторских вечеров&nbsp;&mdash; лампочками или свечами,&nbsp;&mdash; заявляем, что мы&nbsp;предпочитаем лампочки. Настроение&nbsp;&mdash; штука хорошая, но&nbsp;свечи кажутся нам слишком претенциозными и&nbsp;наводят на&nbsp;мысль о&nbsp;пресыщенности цивилизацией, чего у&nbsp;нас в&nbsp;Польше пока ещё не&nbsp;наблюдается. Кроме того, автор не&nbsp;только беседует со&nbsp;слушателями, но&nbsp;и&nbsp;читает, а&nbsp;поди найди при таком освещении нужную строчку. Не&nbsp;говоря о&nbsp;том, что лик автора, освещаемый снизу свечой,&nbsp;&mdash; это уже личина классового врага из&nbsp;румынских фильмов. Искренне желаем Вам обеим всего&nbsp;наилучшего.</p>
					<p><b>М-Л.</b> Мы&nbsp;не&nbsp;намерены заводить постоянную рубрику для произведений на&nbsp;эсперанто. Это искусственный, лишенный социальной окраски язык, на&nbsp;котором никто не&nbsp;думает и&nbsp;которым не&nbsp;пользуются в&nbsp;быту. Так что мы&nbsp;не&nbsp;считаем произведения, написанные на&nbsp;этом языке, жизненно необходимыми, однако разделяем Вашу мечту о&nbsp;едином языке человечества. И&nbsp;надеемся, что когда-нибудь таковой возникнет в&nbsp;результате мирной (дай-то бог!) эволюции всех языков. Однако не&nbsp;отсутствие общего языка&nbsp;&mdash; причина войн. Подтверждением тому служит история и&nbsp;повседневный опыт. Вот Вам пример: в&nbsp;данную минуту в&nbsp;подворотне А. лупит по&nbsp;голове&nbsp;Б., хотя их&nbsp;объединяет родной польский&nbsp;язык.</p>
					<p><b>Л.&thinsp;И.&thinsp;П.</b> Уже на&nbsp;следующий день после кончины знаменитого человека нам начинают присылать стихи, посвященные его памяти. С&nbsp;одной стороны, это трогательно, ибо свидетельствует об&nbsp;эмоциональности авторов, но, с&nbsp;другой, возникают сомнения в&nbsp;художественной ценности написанного. Торопливость, за&nbsp;крайне редкими исключениями, рождает полуфабрикаты. Что в&nbsp;первую очередь просится на&nbsp;бумагу? То, что под рукой, а&nbsp;под рукой главным образом банальности, затертые метафоры и&nbsp;расхожий пафос. Искренний порыв пропадает втуне, если выражается в&nbsp;штампе. А&nbsp;штамп, как правило, выглядит так: &laquo;Ты&nbsp;ушел, тебя уже нет с&nbsp;нами, но, хотя тебя нет, творения твои будут жить&raquo;. Весьма популярный прием&nbsp;&mdash; обращаться к&nbsp;усопшему по&nbsp;имени и&nbsp;на&nbsp;&laquo;ты&raquo;. Как будто смерть&nbsp;&mdash; разновидность брудершафта. В&nbsp;связи со&nbsp;смертью <span class="tonote" id="tonote002">Ксаверия Дуниковского</span> мы&nbsp;получили уже немало посвященных ему стихов. Все, запросто называя покойного Ксаверием, уведомляют его, что он&nbsp;был и&nbsp;останется великим скульптором. Не&nbsp;лучше&nbsp;ли отнестись к&nbsp;стихотворению как к&nbsp;скульптуре и&nbsp;немножко помучиться, пока мысль не&nbsp;обретет законченную и&nbsp;неповторимую&nbsp;форму?</p>
					<p><b>Томашу К.</b> &laquo;Случайно написал двадцать стихотворений. Хотел&nbsp;бы увидеть их&nbsp;напечатанными&hellip;&raquo; К&nbsp;сожалению, прав был великий Пастер, говоря, что случай благосклонен лишь к&nbsp;подготовленным умам. Муза застала Вас в&nbsp;духовном&nbsp;дезабилье.</p>
					<p><b>Э.&thinsp;Ц.</b> &laquo;Тоскую по&nbsp;жизни, хоть жить не&nbsp;умеем (не&nbsp;умею), / Тоскую по&nbsp;пиву, хоть пить не&nbsp;умеем (не&nbsp;умею)&raquo;&hellip; Варианты, приведенные в&nbsp;скобках, кажутся нам менее&nbsp;удачными.</p>
					<p><b>Т.&thinsp;К.</b> Рассказ может, в&nbsp;крайнем случае, не&nbsp;иметь начала и&nbsp;конца, но&nbsp;середина, по&nbsp;нашему мнению, должна быть&nbsp;обязательно.</p>
					<p><b>Хонорате О.</b> &laquo;О, Кихотполоумный с&nbsp;одиночеством-катом, и&nbsp;в&nbsp;объятьях Офелии ты&nbsp;будешь мне братом!.." Как&nbsp;бы только этому не&nbsp;воспротивилась Телимена, похищенная Фаустом и&nbsp;увезенная&nbsp;им&nbsp;в&nbsp;Трою!</p>
					<p><b>А.&thinsp;К.</b> &laquo;Наш остров овевает циклоп страсти&hellip;&raquo; Страшновато, но&nbsp;все&nbsp;же лучше, чем если&nbsp;бы это был одноглазый&nbsp;циклон.</p>
					<p><b>Люде.</b> Да, Элюар действительно не&nbsp;умел писать по-польски, но&nbsp;надо&nbsp;ли, переводя его стихи, так уж&nbsp;это&nbsp;подчеркивать?</p>
					<p><b>Маркусу.</b> В&nbsp;первой части поэмы плохая женщина вырывает из&nbsp;груди героя окровавленное сердце и&nbsp;выбрасывает на&nbsp;помойку, где его пожирает крыса. Ближе к&nbsp;финалу герой признается этой&nbsp;же самой женщине, что сердце его бьется только ради нее. Запасное сердце&nbsp;&mdash; случай чрезвычайно редкий. Будем надеяться, это вызовет интерес в&nbsp;научном&nbsp;мире.</p>
					<p><b>Пегасу.</b> Вы&nbsp;в&nbsp;стихотворной форме спрашиваете, есть&nbsp;ли у&nbsp;жизни смысел. Орфографический словарь дает отрицательный&nbsp;ответ.</p>
					<p><b>Малине З.</b> &laquo;Меняйте, что хотите, только опубликуйте!&raquo; Мы&nbsp;произвели основательные изменения&nbsp;&mdash; получились &laquo;<span class="tonote" id="tonote003">Лозаннские лирические миниатюры</span>&raquo;, к&nbsp;сожалению, уже&nbsp;опубликованные.</p>
					<p class="foot-note">Перевод Ксении Старосельской</p>
				</div>
				';
				$poem['notes'] = '
					<div class="note" id="note001">
						<p>Литературный еженедельник, в котором в 1953-1981 гг. работала Вислава Шимборская.</p>
					</div>
					<div class="note" id="note002">
						<p>Ксаверий Дуниковский (1875-1964) — польский скульптор и живописец.</p>
					</div>
					<div class="note" id="note003">
						<p>Цикл стихотворений Адама Мицкевича, написанных в 1839 г. в Лозанне.</p>
					</div>
					';
				break;
			case 'ballad':
				$poem['title'] = 'Баллада';
				$poem['content'] = '
				<div class="poem">
					<p>
					Вот баллада об убитой,<br /> 
					что внезапно встала с кресла.<br /><br /> 
					Вот баллада правды ради,<br /> 
					что записана в тетради.
					</p>
					<p>
					При окне без занавески<br /> 
					и при лампе все случилось,<br /> 
					каждый видеть это мог.
					</p>
					<p>
					И когда, захлопнув двери,<br /> 
					с лестницы сбежал убийца,<br /> 
					встала, как еще живая,<br /> 
					пробудившись в тишине.
					</p>
					<p>
					Встала, головой качнула<br /> 
					и глазами, как из перстня,<br /> 
					поглядела по углам.
					</p>
					<p>
					Не по воздуху летала -<br /> 
					стала медленно ступать<br /> 
					по скрипучим половицам.
					</p>
					<p>
					А потом следы убийства<br /> 
					в печке жгла спокойно:<br /> 
					кипу старых фотографий<br /> 
					и шнурки от башмаков.
					</p>
					<p>
					Не задушенная вовсе, <br /> 
					не застреленная даже,<br /> 
					смерть она пережила.
					</p>
					<p>
					Может жить обычной жизнью,<br /> 
					плакать от любой безделки<br /> 
					и кричать, перепугавшись,<br /> 
					если мышь бежит. Так много<br /> 
					есть забавных мелочей,<br /> 
					и подделать их нетрудно.
					</p>
					<p>
					И она встает и ходит,<br />
					как встают и ходят все.
					</p>
					<p class="foot-note">Перевод Анны Ахматовой</p>
				</div>
				';
				break;
			case 'terrorist-he-looks':
				$poem['title'] = 'Террорист, он смотрит';
				$poem['content'] = '
				<div class="poem">
					<p>
					Бомба взорвется в баре в тринадцать двадцать.<br />
					Сейчас тринадцать шестнадцать.<br />
					Кто-то успеет войти,<br />
					кто-то успеет выйти.<br />
					Террорист переходит улицу.<br />
					Взрыв ему не опасен,<br />
					а видно все, как в кино:
					</p>
					<p>
					Женщина к желтой куртке, заходит.<br />
					Мужчина в темных очках, он выходит.<br />
					Парни, одетые в джинсы, о чем-то там говорят.
					</p>
					<p>
					Тринадцать семнадцать четыре секунды.<br />
					Тот, кто пониже, — счастливчик, садится на мотоцикл,<br />
					а тот, кто повыше, заходит внутрь.
					</p>
					<p>
					Тринадцать семнадцать и сорок секунд.<br />
					Проходит девушка, в волосах зеленая лента,<br />
					внезапно ее заслоняет автобус.
					</p>
					<p>
					Тринадцать восемнадцать<br />
					И девушки не видно.<br />
					Неужели она так глупа и вошла, или нет,<br />
					мы узнаем тогда, когда начнут выносить.
					</p>
					<p>
					Тринадцать девятнадцать.<br />
					Никто не заходит.<br />
					Но вышел лысый толстяк.<br />
					Он ищет что-то в карманах и<br />
					в тридцать девять без десяти секунд<br />
					вернулся назад за никчемной перчаткой.
					</p>
					<p>
					Тринадцать двадцать.<br />
					Время, как оно тянется.<br />
					Уже, наверно, теперь.<br />
					Еще не теперь.<br />
					Да, теперь.<br />
					Бомба, она взрывается.
					</p>
					<p class="foot-note">Перевод Михаила Микляева</p>
				</div>
				';
				break;
			case 'im-too-close':
				$poem['title'] = 'Я слишком близко';
				$poem['content'] = '
				<div class="poem">
					<p>
					Я слишком близко, чтоб присниться ему.<br />
					Не порхаю над ним, не иду от него<br />
					под корнями деревьев. Я слишком близко.<br />
					И голосом не моим рыба запела в сети.<br />
					Не с моего это пальца колечко скатилось.<br />
					Я слишком близко. Дом запылал<br />
					без меня, не могу звать на помощь. Слишком близко,<br />
					чтоб в моих волосах зазвенел колокольчик.<br />
					Слишком близко, не войти мне гостем,<br />
					пред которым распахнуты стены.<br />
					Уже никогда не умру так легко, так вне тела, так безотчетно,<br />
					как прежде в его сновидениях. Я слишком близко,<br />
					слишком близко. Слышу шипение<br />
					и вижу блестящую кожицу слова,<br />
					застыла в объятиях. Он спит,<br />
					в этот момент доступен он более<br />
					кассирше из шапито, что странствовал со львом,<br />
					чем мне, лежащей с ним рядом.<br />
					Теперь для нее в нем открыта краснолистная<br />
					долина, закрытая снежной горой<br />
					в лазурном воздухе. Я слишком близко,<br />
					чтоб птицею с неба упасть к нему. Мой крик<br />
					мог бы лишь разбудить. Бедная,<br />
					оказалась в границах тела,<br />
					я была березой, бывала ящерицей<br />
					из времен выходила<br />
					в цветных переливах атласов кожи. Имела счастье<br />
					исчезать с изумленных внезапностью глаз, —<br />
					это было богатством богатств. Я близко,<br />
					слишком близко, чтоб сниться ему.<br />
					Достаю из-под спящего руку,<br />
					оцепеневшую, всю в булавках.<br />
					На кончике каждой из них —<br />
					по падшему ангелу.
					</p>
					<p class="foot-note">Перевод Михаила Микляева</p>
				</div>
				';
				break;
			case 'road-elegy':
				$poem['title'] = 'Дорожная элегия';
				$poem['content'] = '
				<div class="poem">
					<p>
					Все мое, но не надолго,<br />
					все не насовсем на память,<br />
					а мое, покуда вижу.
					</p>
					<p>
					Были ли, уже не вспомню,<br />
					головы у богинь.
					</p>
					<p>
					От города Самоков только дождь<br />
					и ничего кроме дождя.
					</p>
					<p>
					Париж от Лувра до деталей<br />
					затягивается бельмом.
					</p>
					<p>
					От бульвара Сен-Мартен одни ступени,<br />
					и ведут они в провал.
					</p>
					<p>
					Всего лишь полтора моста<br />
					в Ленинграде многомостном.
					</p>
					<p>
					От Упсалы бедной:<br />
					кусочек большого собора.
					</p>
					<p>
					Несчастный танцор софийский,<br />
					тело без лица.
					</p>
					<p>
					Отдельно его лицо без глаз,<br />
					отдельно его глаза без зрачков,<br />
					отдельно зрачки кота.
					</p>
					<p>
					Кавказский орел ширяет<br />
					над реконструкцией ущелья,<br />
					золото солнца не червонно<br />
					и фальшивы камни.
					</p>
					<p>
					Все мое, но не надолго,<br />
					все не насовсем на память,<br />
					а мое, пока гляжу.
					</p>
					<p>
					Неоглядны, необъятны,<br />
					а подробны аж до жилки,<br />
					до песчинки, до каждой капли<br />
					— пейзажи.
					</p>
					<p>
					Не сберечь мне ни былинки<br />
					в полной подлинности зримой.
					</p>
					<p>
					Приветствие с прощаньем<br />
					в одном и том же взгляде.
					</p>
					<p>
					Обретенье и потеря —<br />
					в одном движенье шеи.
					</p>
					<p class="foot-note">Перевод Натальи Астафьевой</p>
				</div>
				';
				break;
			case 'little-girl-pull-tablecloth':
				$poem['title'] = 'Маленькая девочка стаскивает скатерть';
				$poem['content'] = '
				<div class="poem">
					<p>
					Вот уже год на этом свете,<br />
					а тут еще не все исследовано<br />
					и взято под контроль.
					</p>
					<p>
					Теперь опробуются вещи,<br />
					которые не двигаются сами.
					</p>
					<p>
					Нужно им в этом помочь,<br />
					подвинуть, подтолкнуть,<br />
					брать с места и переносить.
					</p>
					<p>
					Не все хотят, например, шкаф, буфет,<br />
					неподдающиеся стены, стол.
					</p>
					<p>
					Но скатерть на столе упрямом —<br />
					если схватиться за края покрепче —<br />
					согласна ехать.
					</p>
					<p>
					А на скатерти стаканы, ложки, чашка<br />
					аж трясутся от охоты.
					</p>
					<p>
					Очень интересно,<br />
					какое они выберут движенье,<br />
					когда окажутся уж на краю:<br />
					гулять по потолку?<br />
					летать ли вокруг лампы?<br />
					прыгнуть на подоконник, а оттуда на дерево?
					</p>
					<p>
					Мистер Ньютон пока не при чем.<br />
					Пусть себе смотрит с неба и машет руками.
					</p>
					<p>
					Эта попытка сделана должна быть.<br />
					И будет сделана.
					</p>
					<p class="foot-note">Перевод Натальи Астафьевой</p>
				</div>
				';
				break;
			case 'people-on-bridge':
				$poem['title'] = 'Люди на мосту';
				$poem['content'] = '
				<div class="poem">
					<p>
					Странная эта планета и странные на ней люди.<br />
					Подчиняются времени, но признать его не хотят.<br />
					Есть у них способы, чтобы выразить свой протест.<br />
					Картинки, например. Такая, скажем:
					</p>
					<p>
					Ничего особенного, на первый взгляд.<br />
					Видна вода.<br />
					Виден один из берегов.<br />
					Лодка, упрямо плывущая против теченья.<br />
					Мост над водой и люди на мосту.<br />
					Люди заметно прибавляют шагу,<br />
					поскольку вдруг из темной тучи<br />
					дождь начал остро сечь.
					</p>
					<p>
					Все дело в том, что ничего не происходит дальше.<br />
					Туча не изменяет цвет и форму.<br />
					Дождь не усиливается и не утихает.<br />
					Лодка плывет без движенья.<br />
					Люди на мосту<br />
					бегут все на том же месте.
					</p>
					<p>
					Без комментария не обойтись:<br />
					Картинка не такая уж простая.<br />
					Художником остановлено время.<br />
					Отвергнуты его законы.<br />
					Оно лишено влиянья на ход событий.<br />
					Пренебрегли им и его презрели.
					</p>
					<p>
					По воле бунтовщика,<br />
					некоего <span class="tonote" id="tonote001">Хиросиге Утагавы</span><br />
					(который, впрочем,<br />
					давно как и положено минул),<br />
					время споткнулось и упало.<br />
					Может быть, это лишь озорная шутка,<br />
					шалость в масштабе двух-трех галактик,<br />
					на всякий случай однако<br />
					добавим, что следует ниже:
					</p>
					<p>
					Здесь считают хорошим тоном<br />
					восторгаться этой картинкой,<br />
					высоко ее ценят уж многие годы.
					</p>
					<p>
					Есть такие, которым и этого мало.<br />
					Слышат даже шум дождя,<br />
					ощущают холодные капли на шеях и спинах,<br />
					смотрят на мост и людей,<br />
					будто видят там и себя,<br />
					в том же самом нескончаемом беге<br />
					бесконечной дорогой, отбываемой вечно,<br />
					и верят в своем самомненье,<br />
					что так и на самом деле.
					</p>
					<p class="foot-note">Перевод Натальи Астафьевой</p>
				</div>
				';
				$poem['images'] = '
					<div class="left-box" style="margin-top:50px;">
						<img alt="Мост Осаши" src="/img/shimborska/hirosige.jpg" />
						<p>Мост Осаши</p>
						<p>Андо Хиросигэ. Из цикла 100 известных видов Эдо (1856—1858)</p>
					</div>';
				$poem['notes'] = '
					<div class="note" id="note001">
						<p>Утагава Хиросигэ (歌川広重; 1797—1858) — японский художник-график, представитель направления укиё-э, мастер цветной ксилографии. Работал под пседонимом Андо Хиросигэ</p>
					</div>
					';
				break;
			case 'picture-september-11':
				$poem['title'] = 'Фотография 11 сентября';
				$poem['content'] = '<div class="poem">
					<p>
					Прыгнули вниз из горящего зданья —<br />
					один, два, несколько человек<br />
					выше, ниже.
					</p>
					<p>
					Фотография их задержала при жизни,<br />
					а теперь сохраняет<br />
					над землею к земле.
					</p>
					<p>
					Каждый из них еще цел,<br />
					со своим лицом<br />
					и кровью хорошо укрытой.
					</p>
					<p>
					Времени еще хватает,<br />
					чтобы волосы растрепались,<br />
					а из карманов повыпадали<br />
					ключи, мелкие деньги.
					</p>
					<p>
					Они еще витают в воздухе,<br />
					в пределах этого пространства,<br />
					которое как раз открылось.
					</p>
					<p>
					Только две вещи я могу для них сделать —<br />
					описать их полет<br />
					и не добавлять последней фразы.
					</p>
					<p class="foot-note">Перевод Натальи Астафьевой</p>
				</div>
				';
				$poem['images'] = '
					<div class="left-box" style="margin-top:35px;">
						<img alt="11 сентября, выпрыгнувший из торгового центра человек" src="/img/shimborska/11september.jpg" />
						<p>Фотограф Ричард Дрю, Ассошиэйтед Пресс</p>
					</div>';
				break;
			case 'in-park':
				$poem['title'] = 'В парке';
				$poem['content'] = '
				<div class="poem">
					<p>
					— Ой-ёй — удивляется мальчик —<br />
					а кто эта пани?<br />
					— Это памятник Милосердья или чего-то такого — отвечает мама.<br />
					— А почему эта пани так по… о… б… бита?
					</p>
					<p>
					— Не знаю, сколько помню,<br />
					всегда была в таком виде.<br />
					Город должен что-то с этим сделать.<br />
					Или ее обновить или выбросить вовсе.<br />
					Ну, ладно, ладно, идем дальше.
					</p>
					<p class="foot-note">Перевод Натальи Астафьевой</p>
				</div>
				';
				break;
			case 'note':
				$poem['title'] = 'Заметка';
				$poem['content'] = '
				<div class="poem">
					<p>
					Жизнь — единственный способ,<br />
					чтобы обрастать листвой,<br />
					ловить ртом воздух на песке, взлетать на крыльях;
					</p>
					<p>
					быть собакой<br />
					или гладить ее по теплой шерсти;<br />
					отличать боль<br />
					от всего, что не является ею;
					</p>
					<p>
					быть в орбите событий,<br />
					теряться в пейзажах,<br />
					искать наименьшей среди ошибок.
					</p>
					<p>
					Исключительный шанс,<br />
					чтобы хоть мгновенье помнить,<br />
					о чем беседа шла<br />
					при потушенной лампе;
					</p>
					<p>
					и чтобы хоть раз однажды споткнуться о камень,<br />
					под дождем промокнуть,<br />
					ключи потерять в траве;
					</p>
					<p>
					и взглядом следить за искрой при ветре;
					</p>
					<p>
					и всегда какой-то важной вещи<br />
					не знать, не ведать.
					</p>
					<p class="foot-note">Перевод Натальи Астафьевой</p>
				</div>
				';
				break;
			case 'cat-in-empty-apartment':
				$poem['title'] = 'Кот в пустой квартире';
				$poem['content'] = '
				<div class="poem">
					<p>
					Умереть — так с котом нельзя. <br />
					Ибо что же кот будет делать в пустой квартире. <br />
					Лезть на стену. <br />
					Отираться среди мебели. <br />
					Ничего как бы не изменилось, <br />
					Но все как будто подменили. <br />
					Ничего как бы не сдвинуто с места, <br />
					Но все не на месте. <br />
					И вечерами лампа уж не светит. 
					</p>	
					<p>
					На лестнице слышны шаги, но не те. <br />
					Рука, что клала рыбу на тарелку, <br />
					Тоже не та, другая. 
					</p>	
					<p>
					Что-то тут не начинается <br />
					В свою обычную пору. <br />
					Что-то тут не происходит как должно. <br />
					Кто-то тут был и был, а потом вдруг исчез, и нет его и нет. 
					</p>	
					<p>
					Обследованы все шкафы. <br />
					Облазаны все полки. <br />
					Заглянуто под ковер. <br />
					Даже вопреки запрету <br />
					Разбросаны бумаги. <br />
					Что тут еще можно сделать? <br />
					Только спать и ждать. 
					</p>	
					<p>
					Но пусть он только вернется, <br />
					Пусть только покажется. <br />
					Уж тут-то он узнает, <br />
					Что так с котом нельзя. 
					</p>	
					<p>
					Надо пойти в его сторону, <br />
					Будто совсем не хочется, <br />
					Потихонечку, <br />
					На очень обиженных лапах. <br />
					И никаких там прыжков, <br />
					Мяуканий поначалу.
					</p>
					<p class="foot-note">Перевод Натальи Астафьевой</p>
				</div>
				';
				break;

            case 'moment':
                $poem['title'] = 'Мгновение';
                $poem['content'] = '
                <div class="poem">
                    <p>Иду по&nbsp;зеленому склону.<br />
                    Трава, в&nbsp;траве цветочки &mdash;<br />
                    <nobr>точь-в-точь</nobr> картинка из&nbsp;дошкольной книжки.<br />
                    Серое уже голубеющее небо.<br />
                    Прочие взгорья простерлись в&nbsp;тишине.</p>
                    <p>Словно не&nbsp;было тут кембриев и&nbsp;силуриев,<br />
                    скал, скалившихся друг на&nbsp;друга,<br />
                    разверзающихся пучин,<br />
                    огнепламенных ночей,<br />
                    дней в&nbsp;клублениях тьмы.</p>
                    <p>Словно не&nbsp;елозили тут низины<br />
                    в&nbsp;горячечном бреду,<br />
                    в&nbsp;стылых содроганиях.</p>
                    <p>Словно не&nbsp;тут,<br />
                    раздирая берега горизонтов,<br />
                    метались моря.</p>
                    <p>Сейчас девять тридцать по&nbsp;местному времени.<br />
                    Всё на&nbsp;своих местах притом в&nbsp;добрососедстве.<br />
                    В&nbsp;ложбинке ручеек собой как ручеек.<br />
                    Тропинка как тропинка от&nbsp;всегда до&nbsp;всегда.</p>
                    <p>Лес видом лес и&nbsp;присно, и&nbsp;аминь,<br />
                    Летают птицы как летают птицы.</p>
                    <p>Куда ни&nbsp;глянь господствует мгновенье.<br />
                    Из&nbsp;самых из&nbsp;земных,<br />
                    благоволимых длиться.</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>
				';
                break;

            case 'overabundance':
                $poem['title'] = 'В преизбытке';
                $poem['content'] = '
                <div class="poem">
                    <p>Я&nbsp;это я.<br />
                    Непостижимый случай,<br />
                    как и&nbsp;любой другой.</p>
                    <p>Окажись моими<br />
                    иные предки,<br />
                    я&nbsp;бы выпорхнула<br />
                    из&nbsp;другого гнезда,<br />
                    <nobr>из-под</nobr> другого пня<br />
                    выползла&nbsp;бы в&nbsp;чешуе.</p>
                    <p>В&nbsp;костюмерной природы<br />
                    одеяний несчётно &mdash;<br />
                    паука, чайки, полевой мыши.<br />
                    Каждое слово сидит как влитое<br />
                    и&nbsp;выглядит новым<br />
                    пока не&nbsp;износишь.</p>
                    <p>Я&nbsp;не&nbsp;выбирала,<br />
                    но&nbsp;грех жаловаться.<br />
                    Могла ведь возникнуть<br />
                    вовсе маловажной.</p>
                    <p><nobr>Кем-то</nobr> с&nbsp;отмели, из&nbsp;муравейника, из&nbsp;гудящего роя,<br />
                    или мотаемой ветром деталькой пейзажа.</p>
                    <p><nobr>Кем-нибудь</nobr> не&nbsp;столь счастливым,<br />
                    разводимым на&nbsp;мех,<br />
                    для праздничного стола,<br />
                    чем то, плавающим под стёклышком.</p>
                    <p>Деревом, увязшим в&nbsp;земле,<br />
                    к&nbsp;которому торопится пожар.</p>
                    <p>Стеблем, вытаптываемым<br />
                    ходом непонятных событий.</p>
                    <p>Тёмной <nobr>какой-нибудь</nobr> личностью,<br />
                    хоть пусть для <nobr>кого-то</nobr> и&nbsp;светлой.</p>
                    <p>А&nbsp;вдруг&nbsp;бы я&nbsp;вызывала страх,<br />
                    или отвращение,<br />
                    или всего лишь жалость?</p>
                    <p>А&nbsp;вдруг&nbsp;бы появилась<br />
                    не&nbsp;в&nbsp;каком надо племени<br />
                    и&nbsp;закрылись&nbsp;бы передо мной дороги?</p>
                    <p>Судьба пока<br />
                    была ко&nbsp;мне расположена.</p>
                    <p>Могла&nbsp;же не&nbsp;быть придана<br />
                    память о&nbsp;добрых минутах.</p>
                    <p>Могла быть отнята<br />
                    склонность к&nbsp;сравнениям.</p>
                    <p>Могла&nbsp;бы стать и&nbsp;собой&nbsp;&mdash; но&nbsp;без удивления,<br />
                    а&nbsp;это значит,<br />
                    <nobr>кем-то</nobr> совсем иной.</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>';
                break;

            case 'clouds':
                $poem['title'] = 'Облака';
                $poem['content'] = '
                <div class="poem">
                    <p>Описывая облака,<br />
                    следует поторопиться &mdash;<br />
                    <nobr>какая-то</nobr> доля секунды,<br />
                    и&nbsp;они уже не&nbsp;такие.</p>
                    <p>В&nbsp;их&nbsp;привычках<br />
                    не&nbsp;повторяться<br />
                    в&nbsp;полутонах, позах, формах и&nbsp;порядке.</p>
                    <p>Не&nbsp;обремененные памятью ни&nbsp;о&nbsp;чем,<br />
                    они попросту скользят над фактами.</p>
                    <p>Никакие из&nbsp;них свидетели чего&nbsp;бы то&nbsp;ни&nbsp;было &mdash;<br />
                    тотчас развеиваются во&nbsp;все стороны.</p>
                    <p>В&nbsp;сравнении с&nbsp;облаками<br />
                    жизнь представляется укорененной,<br />
                    упроченной, чуть&nbsp;ли даже не&nbsp;вечной,</p>
                    <p>камень и&nbsp;тот<br />
                    все равно что брат,<br />
                    на&nbsp;которого можно положиться,<br />
                    они&nbsp;же&nbsp;&mdash; далекие ветреные и&nbsp;двоюродные.</p>
                    <p>Пусть люди себе побудут, если охота,<br />
                    а&nbsp;потом по&nbsp;очереди поумирают,<br />
                    им, облакам, что за&nbsp;дело<br />
                    до&nbsp;таковых<br />
                    удивительностей.</p>
                    <p><nobr>По-над</nobr> всей твоей жизнью<br />
                    и&nbsp;моей, еще не&nbsp;всей,<br />
                    плывут величавые, как плыли.</p>
                    <p>Нет у&nbsp;них зарока вместе с&nbsp;нами сгинуть,<br />
                    повиднелись и&nbsp;только, чтоб уплыть и&nbsp;минуть.</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>';
                break;

            case 'negative':
                $poem['title'] = 'Негатив';
                $poem['content'] = '
                <div class="poem">
                    <p>На&nbsp;буром небе<br />
                    вовсе бурое облако<br />
                    с&nbsp;черной каемкой солнца.</p>
                    <p>По&nbsp;левую или правую руку<br />
                    белая ветка черешни в&nbsp;черном цвету.</p>
                    <p>На&nbsp;твоем темном лице светлые тени.</p>
                    <p>Ты&nbsp;положил на&nbsp;стол<br />
                    сереющие ладони<br />
                    и&nbsp;выглядишь духом,<br />
                    вздумавшим вызвать живых.</p>
                    <p>(Поскольку я&nbsp;пока что к&nbsp;таковым причисляюсь,<br />
                    мне&nbsp;бы явиться и&nbsp;простучать:<br />
                    доброй ночи или день добрый,<br />
                    прощай или ну&nbsp;здравствуй.<br />
                    И&nbsp;дать расспросить себя,<br />
                    несмотря на&nbsp;отстутствие ответов,<br />
                    касающихся жизни,<br />
                    то&nbsp;бишь бури перед молчаньем.)</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>';
                break;

            case 'handset':
                $poem['title'] = 'Телефонная трубка';
                $poem['content'] = '
                <div class="poem">
                    <p>Снится мне, что я&nbsp;проснулась,<br />
                    от&nbsp;телефонного звонка.</p>
                    <p>Снится уверенность,<br />
                    что звонит умерший.</p>
                    <p>Снится, что тянусь<br />
                    к&nbsp;трубке.</p>
                    <p>Она&nbsp;же<br />
                    оказывается<br />
                    неимоверно тяжелой,<br />
                    словно во&nbsp;<nobr>что-то</nobr> втиснулась,<br />
                    вросла,<br />
                    <nobr>что-то</nobr> оплела корнями.<br />
                    Вырвать ее&nbsp;получится<br />
                    только с&nbsp;остальной Землей.</p>
                    <p>Снятся мне напрасные<br />
                    мои усилия.</p>
                    <p>Снится безмолвие,<br />
                    поскольку звонок умолк.</p>
                    <p>Снится, что я&nbsp;засыпаю<br />
                    и&nbsp;просыпаюсь опять.</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>';
                break;

            case 'three-amazing-words':
                $poem['title'] = 'Три поразительных слова';
                $poem['content'] = '
                <div class="poem">
                    <p>Довольно сказать &laquo;грядущее&raquo;,<br />
                    и&nbsp;первый слог неминуемо оказывается в&nbsp;прошлом.</p>
                    <p>Стоит вымолвить &laquo;тишина&raquo;,<br />
                    и&nbsp;я&nbsp;ее&nbsp;тотчас уничтожаю.</p>
                    <p>Молвлю &laquo;ничто&raquo;,<br />
                    и&nbsp;получается нечто, не&nbsp;вместимое ни&nbsp;в&nbsp;какое небытие.</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>';
                break;

            case 'plants-silence':
                $poem['title'] = 'Молчание растений';
                $poem['content'] = '
                <div class="poem">
                    <p>Одностороннее знакомство между мной и&nbsp;вами<br />
                    развивается весьма успешно.</p>
                    <p>Я&nbsp;знаю, что листок, что лепесток,<br />
                    колос, шишка, стебель,<br />
                    что с&nbsp;вами бывает в&nbsp;апреле, а&nbsp;что в&nbsp;декабре.</p>
                    <p>Хотя мой интерес пока без взаимности,<br />
                    к&nbsp;некоторым из&nbsp;вас я&nbsp;склоняюсь,<br />
                    перед <nobr>какими-то</nobr> задираю голову.</p>
                    <p>Вы&nbsp;у&nbsp;меня с&nbsp;именами:<br />
                    клен, лопух, перелеска,<br />
                    вереск, можжевельник, омела, незабудка,<br />
                    а&nbsp;я&nbsp;у&nbsp;вас&nbsp;&mdash; без.</p>
                    <p>У&nbsp;нас одна дорога.<br />
                    Но&nbsp;в&nbsp;пути обычно завязывается разговор,<br />
                    скажем, о&nbsp;погоде<br />
                    или о&nbsp;мелькающих за&nbsp;окошком станциях.</p>
                    <p>Темы&nbsp;бы нашлись, нас многое связывает.<br />
                    Одна и&nbsp;таже звезда присматривает за&nbsp;нами.<br />
                    По&nbsp;одинаковому принципу отбрасываем тени.</p>
                    <p>Каждый на&nbsp;свой манер пытаемся о&nbsp;<nobr>чем-то</nobr> прознать,<br />
                    а&nbsp;чего не&nbsp;знаем, тоже одинаково.</p>
                    <p>Я&nbsp;объясню, как умею, вы&nbsp;только поинтересуйтесь:<br />
                    что такое видеть глазами,<br />
                    зачем бьется мое сердце<br />
                    и&nbsp;почему не&nbsp;укоренено тело.</p>
                    <p>Но&nbsp;как ответить, если не&nbsp;спросили,<br />
                    и&nbsp;к&nbsp;тому&nbsp;же <nobr>кто-то</nobr><br />
                    столь явно для вас никто?</p>
                    <p>Заросли, камыши, луга и&nbsp;перелески,<br />
                    всё, с&nbsp;чем к&nbsp;вам обращаюсь,&nbsp;&mdash; монолог,<br />
                    и&nbsp;не&nbsp;вы&nbsp;ему внемлете.</p>
                    <p>Разговор наш неизбежен и&nbsp;невозможен.<br />
                    Безотлагателен в&nbsp;поспешной жизни<br />
                    и&nbsp;отложен на&nbsp;никогда.</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>';
                break;

            case 'plato-or-why':
                $poem['title'] = 'Платон, или зачем';
                $poem['content'] = '
                <div class="poem">
                    <p>По&nbsp;непонятным причинам<br />
                    при неведомых обстоятельствах<br />
                    Идеальное Бытие перестало быть самодостаточно.</p>
                    <p>А&nbsp;ведь из&nbsp;мрака вызволенное, из&nbsp;света вызыванное &mdash;<br />
                    могло без конца длиться и&nbsp;длиться<br />
                    в&nbsp;надмирных дремлющих своих садах.</p>
                    <p>Зачем, черт побери, вздумало оно искать впечатлений<br />
                    в&nbsp;плохой компании с&nbsp;материей?</p>
                    <p>Зачем ему подражатели,<br />
                    несообразные, неудачливые,<br />
                    без видов на&nbsp;вечность?</p>
                    <p>Прихрамывающая мудрость<br />
                    с&nbsp;тернием, впившимся в&nbsp;пятку?<br />
                    Гармония раздираемая<br />
                    расходившимися водами?<br />
                    Красота<br />
                    с&nbsp;неприятными внутри кишками<br />
                    и&nbsp;Добро &mdash;<br />
                    почему с&nbsp;тенью,<br />
                    если прежде ее&nbsp;не&nbsp;наблюдалось?</p>
                    <p>Должна&nbsp;же быть <nobr>какая-то</nobr> причина,<br />
                    пусть&nbsp;бы и&nbsp;никакая с&nbsp;виду,<br />
                    но&nbsp;этого не&nbsp;обнаружит даже Голая Правда,<br />
                    поглощенная перетряхиванием<br />
                    земного гардероба.</p>
                    <p>А&nbsp;еще, Платон, эти ужасные поэты,<br />
                    разносимый ветром сор <nobr>из-под</nobr> статуй,<br />
                    утиль великой на&nbsp;вершинах Тишины.</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>';
                break;

            case 'little-girl-pulled-tablecloth':
                $poem['title'] = 'Маленькая девочка потянула скатерть';
                $poem['content'] = '
                <div class="poem">
                    <p>Она на&nbsp;этом свете больше года,<br />
                    а&nbsp;на&nbsp;нем не&nbsp;всё пока разведано<br />
                    и&nbsp;не&nbsp;всё под присмотром.</p>
                    <p>Оказывается, некоторые вещи<br />
                    сами не&nbsp;шевеляться.</p>
                    <p>Им&nbsp;надо помочь,<br />
                    сдвинуть, подтолкнуть,<br />
                    взять, где стоят, и&nbsp;перенести.</p>
                    <p>Не&nbsp;каждая на&nbsp;это согласна, скажем, кровать,<br />
                    комод, своенравные стены, стол.</p>
                    <p>А&nbsp;вот скатерть на&nbsp;упрямом столе<br />
                    &mdash;&nbsp;если потянуть &mdash;<br />
                    желание поехать обнаруживает.</p>
                    <p>Стаканам на&nbsp;ней, тарелкам,<br />
                    молочнику с&nbsp;молоком, блюдцу,<br />
                    ужасно охота проехаться.</p>
                    <p>Интересно,<br />
                    что им&nbsp;придет в&nbsp;голову,<br />
                    когда качнуться на&nbsp;краю:<br />
                    гулять по&nbsp;потолку?<br />
                    летать вокруг лампы?<br />
                    прыгнуть на&nbsp;подоконник, а&nbsp;с&nbsp;него на&nbsp;дерево?</p>
                    <p>Мистер Ньютон покамест ни&nbsp;при чем.<br />
                    Пускай глядит с&nbsp;небес и&nbsp;размахивает руками.</p>
                    <p>Этому опыту суждено быть.<br />
                    И&nbsp;он&nbsp;будет.</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>';
                break;

            case 'from-memories':
                $poem['title'] = 'Из воспоминаний';
                $poem['content'] = '
                <div class="poem">
                    <p>Сидели мы, болтали,<br />
                    внезапно умолкли.<br />
                    На&nbsp;веранду вышла девушка,<br />
                    ну&nbsp;до&nbsp;чего красивая,<br />
                    слишком красивая,<br />
                    Для нашего безмятежного тут житья.</p>
                    <p>Барбара в&nbsp;панике глянула на&nbsp;мужа.<br />
                    Кристина положила ладонь<br />
                    на&nbsp;руку Збышека.<br />
                    А&nbsp;я&nbsp;подумала: позвоню тебе,<br />
                    пока&nbsp;&mdash; скажу&nbsp;&mdash; не&nbsp;приезжай,<br />
                    на&nbsp;ближайшие дни обещали дождь.</p>
                    <p>И&nbsp;только Ванда, вдова,<br />
                    улыбнулась красивой.</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>';
                break;

            case 'puddle':
                $poem['title'] = 'Лужа';
                $poem['content'] = '
                <div class="poem">
                    <p>На&nbsp;всю жизнь запомнился детский страх.<br />
                    Я&nbsp;обходила лужи,<br />
                    особенно недавние, после дождя.<br />
                    <nobr>Какая-то</nobr> могла оказаться бездоной,<br />
                    хоть по&nbsp;виду не&nbsp;отличалась от&nbsp;остальных.</p>
                    <p>Наступлю вдруг и&nbsp;целиком сорвусь,<br />
                    начну взлетать вниз,<br />
                    глубже и&nbsp;глубже,<br />
                    туда к&nbsp;отразившимся тучам<br />
                    и&nbsp;еще дальше.</p>
                    <p>Потом лужа высохнет,<br />
                    сомкнется надо мной,<br />
                    а&nbsp;я&nbsp;навсегда канувшая&nbsp;&mdash; куда? &mdash;<br />
                    с&nbsp;не&nbsp;долетающим наружу криком.</p>
                    <p>И&nbsp;только позже я&nbsp;поняла:<br />
                    не&nbsp;все недобрые приключения<br />
                    включены в&nbsp;правила мира<br />
                    и, даже если&nbsp;бы захотели,<br />
                    не&nbsp;могут произойти.</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>';
                break;

            case 'first-love':
                $poem['title'] = 'Первая любовь';
                $poem['content'] = '
                <div class="poem">
                    <p>Говорят,<br />
                    первая любовь&nbsp;&mdash; <nobr>самая-самая</nobr>.<br />
                    Весьма романтично,<br />
                    но&nbsp;со&nbsp;мной всё не&nbsp;так.</p>
                    <p><nobr>Что-то</nobr> между нами было и&nbsp;не&nbsp;было,<br />
                    творилось и&nbsp;затворилось.</p>
                    <p>У&nbsp;меня дрожат руки,<br />
                    когда натыкаюсь на&nbsp;разные вещицы<br />
                    и&nbsp;письма, перевязанные веревочкой &mdash;<br />
                    нет чтобы лентой.</p>
                    <p>Единственная наша встреча спустя годы &mdash;<br />
                    разговор двух стульев<br />
                    у&nbsp;холодного столика.</p>
                    <p>Другие любови<br />
                    всё еще глубоко дышат во&nbsp;мне.<br />
                    А&nbsp;у&nbsp;этой нет вдоха даже для вздоха.</p>
                    <p>И&nbsp;всё&nbsp;же, <nobr>какая-никакая</nobr>,<br />
                    она умеет то, что другим не&nbsp;под силу:</p>
                    <p>позабытая,<br />
                    даже не&nbsp;снящаяся,<br />
                    приучает меня к&nbsp;смерти.</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>';
                break;

            case 'about-soul':
                $poem['title'] = 'Кое-что о Душе';
                $poem['content'] = '
                <div class="poem">
                    <p>Душой обзаводятся по&nbsp;временам.<br />
                    Ни&nbsp;у&nbsp;кого ее&nbsp;нет постоянно<br />
                    и&nbsp;навсегда.</p>
                    <p>День за&nbsp;днем,<br />
                    год за&nbsp;годом<br />
                    могут миновать без нее.</p>
                    <p>Порой разве что в&nbsp;восторгах<br />
                    и&nbsp;детских страхах<br />
                    заводится на&nbsp;подольше.<br />
                    Порой разве что в&nbsp;удивленье,<br />
                    что вот и&nbsp;настала старость.</p>
                    <p>Изредка ассистирует<br />
                    нам при надсадных занятьях,<br />
                    таких, как двиганье мебели,<br />
                    подтаскивание чемоданов<br />
                    и&nbsp;ходьба в&nbsp;неразношенной обуви.</p>
                    <p>При заполненье анкет<br />
                    и&nbsp;отбиванье бифштексов<br />
                    она берет выходной.</p>
                    <p>На&nbsp;тысячу разговоров<br />
                    участвует разве в&nbsp;одном,<br />
                    да&nbsp;и&nbsp;то&nbsp;не&nbsp;всегда,<br />
                    предпочитая молчание.</p>
                    <p>Когда наше тело болит и&nbsp;болит,<br />
                    незаметно уходит с&nbsp;дежурства.</p>
                    <p>Привередливая,<br />
                    не&nbsp;любит видеть нас в&nbsp;толпе,<br />
                    ей&nbsp;претит наша страсть к&nbsp;превосходству<br />
                    и&nbsp;деловая надсада.</p>
                    <p>Печаль и&nbsp;радость<br />
                    для нее не&nbsp;различны.<br />
                    Только их&nbsp;сочетанье<br />
                    держит ее&nbsp;при нас.</p>
                    <p>На&nbsp;нее можно рассчитывать,<br />
                    когда мы&nbsp;ни&nbsp;в&nbsp;чем не&nbsp;уверены,<br />
                    но&nbsp;до&nbsp;всего любопытны.</p>
                    <p>Из&nbsp;материальных предметов.<br />
                    по&nbsp;нраву часы ей&nbsp;с&nbsp;маятником<br />
                    и&nbsp;зеркала, что усердствуют,<br />
                    даже когда не&nbsp;смотришься.</p>
                    <p>Не&nbsp;скажет, откуда является<br />
                    и&nbsp;куда опять подевается,<br />
                    но&nbsp;явно ждет этих вопросов.</p>
                    <p>Похоже,<br />
                    что мы&nbsp;ей&nbsp;тоже,<br />
                    как и&nbsp;она нам,<br />
                    <nobr>зачем-то</nobr> надобны.</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>';
                break;

            case 'at-dawn':
                $poem['title'] = 'Спозаранку';
                $poem['content'] = '
                <div class="poem">
                    <p>Я&nbsp;еще сплю,<br />
                    а&nbsp;тут совершаются факты.<br />
                    Забелелось окно,<br />
                    посерели потемки,<br />
                    из&nbsp;неотчетливостей возникает комната,<br />
                    ищут себе в&nbsp;ней места слабые бледные полосы.</p>
                    <p>По&nbsp;очереди, неспешно<br />
                    (это&nbsp;же церемония)<br />
                    днеют поверхности потолка и&nbsp;стен,<br />
                    заотличались одна от&nbsp;другой<br />
                    формы,<br />
                    левая сторона от&nbsp;правой.</p>
                    <p>Развиднелись расстояния между предметами,<br />
                    на&nbsp;стакане и&nbsp;дверной ручке<br />
                    чирикнули первые блики.<br />
                    Уже не&nbsp;мерещится, но&nbsp;отчетливо есть<br />
                    то, что вчера передвинуто,<br />
                    упало на&nbsp;пол,<br />
                    разместилось в&nbsp;рамах.<br />
                    Разве только частности<br />
                    не&nbsp;явлены в&nbsp;поле зрения.</p>
                    <p>Но&nbsp;глядите, глядите, глядите,<br />
                    многое говорит за&nbsp;то, что вернулись цвета,<br />
                    всякая мелочь обретает свой,<br />
                    а&nbsp;заодно и&nbsp;оттенок тени.</p>
                    <p>Жаль, я&nbsp;редко этому удивляюсь, хотя должна&nbsp;бы.<br />
                    Проснешься в&nbsp;роли запоздалого свидетеля,<br />
                    а&nbsp;чудо уже состоялось,<br />
                    день явно настал,<br />
                    и&nbsp;дорассветность умело перешла в&nbsp;порассветность.</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>';
                break;

            case 'in-park':
                $poem['title'] = 'В парке2';
                $poem['content'] = '
                <div class="poem">
                    <p>&mdash;&nbsp;Ой,&nbsp;&mdash; удивляется мальчик &mdash;<br />
                    а&nbsp;кто вон та&nbsp;тетя?</p>
                    <p>&mdash;&nbsp;Статуя Милосердия<br />
                    или <nobr>что-то</nobr> вроде &mdash;<br />
                    отвечает мама.</p>
                    <p>&mdash;&nbsp;А&nbsp;почему она<br />
                    такая <nobr>облу-у-упленная</nobr>?</p>
                    <p>&mdash;&nbsp;Не&nbsp;знаю. Сколько помню<br />
                    всегда так было.<br />
                    Городские власти должны наконец <nobr>что-то</nobr> придумать<br />
                    Или ее&nbsp;убрать, или хотя&nbsp;бы покрасить.<br />
                    Ну&nbsp;<nobr>всё-всё</nobr>, пошли дальше.</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>';
                break;

            case 'in-addition-to-statistics':
                $poem['title'] = 'Дополнительно к статистике';
                $poem['content'] = '
                <div class="poem">
                    <p>На&nbsp;сто человек</p>
                    <p>таких, кто знает всё лучше всех<br />
                    &mdash;&nbsp;пятьдесят два;</p>
                    <p>неуверенных в&nbsp;каждом шаге<br />
                    &mdash;&nbsp;почти все остальные;</p>
                    <p>готовых помочь,<br />
                    если на&nbsp;это не&nbsp;уйдет много времени<br />
                    &mdash;&nbsp;целых сорок девять;</p>
                    <p>всегда хороших,<br />
                    потому что не&nbsp;могут иначе<br />
                    &mdash;&nbsp;четверо, ну&nbsp;пятеро;</p>
                    <p>склонных восхититься не&nbsp;завидуя<br />
                    &mdash;&nbsp;восемнадцать;</p>
                    <p>живущих во&nbsp;всегдашней опаске<br />
                    перед <nobr>кем-то</nobr> или <nobr>чем-то</nobr><br />
                    &mdash;&nbsp;семьдесят семь;</p>
                    <p>умеющих быть счастливыми<br />
                    &mdash;&nbsp;самое большее двадцать с&nbsp;лишним;</p>
                    <p>нестрашных поодиночке,<br />
                    но&nbsp;звереющих в&nbsp;толпе<br />
                    &mdash;&nbsp;уж&nbsp;точно больше половины;</p>
                    <p>жестоких,<br />
                    если вынудят обстоятельства<br />
                    &mdash;&nbsp;даже приблизительно<br />
                    лучше не&nbsp;знать;</p>
                    <p>крепких задним умом<br />
                    &mdash;&nbsp;не&nbsp;намного больше,<br />
                    чем тем&nbsp;же умом некрепких;</p>
                    <p>берущих от&nbsp;жизни только вещи и&nbsp;ничего кроме<br />
                    &mdash;&nbsp;сорок,<br />
                    хотя хотелось&nbsp;бы ошибиться;</p>
                    <p>съежившихся, удрученных<br />
                    и&nbsp;впотьмах без фонарика<br />
                    &mdash;&nbsp;восемьдесят и&nbsp;трое<br />
                    прежде и&nbsp;впредь;</p>
                    <p>заслуживающих сочуствия<br />
                    &mdash;&nbsp;девяносто девять;</p>
                    <p>смертных<br />
                    &mdash;&nbsp;сто на&nbsp;сто.<br />
                    Показатель, как прежде, тот&nbsp;же.</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>';
                break;

            case 'some-people':
                $poem['title'] = 'Какие-то люди';
                $poem['content'] = '
                <div class="poem">
                    <p><nobr>Какие-то</nobr> люди бегут от&nbsp;<nobr>каких-то</nobr> людей.<br />
                    В&nbsp;<nobr>какой-то</nobr> стране под солнцем<br />
                    и&nbsp;некоторыми облаками.</p>
                    <p>В&nbsp;спешке побросав <nobr>какое-то</nobr> свое всё,<br />
                    <nobr>каких-то</nobr> кур, собак, посевы<br />
                    и&nbsp;зеркальца, куда огонь глядится.</p>
                    <p>У&nbsp;них за&nbsp;спинами баклажки, узелочки,<br />
                    какие чем пустее, тем больше тяжелее.</p>
                    <p>Тихонько происходит <nobr>чье-то</nobr> убыванье,<br />
                    и&nbsp;<nobr>чье-то</nobr> у&nbsp;<nobr>кого-то</nobr> хлеба сворованье<br />
                    и&nbsp;<nobr>чье-то</nobr> мертвого ребенка сотрясанье.</p>
                    <p><nobr>Какая-то</nobr> все время не&nbsp;туда дорога,<br />
                    не&nbsp;тот, какой&nbsp;бы надо мост<br />
                    над <nobr>почему-то</nobr> розоватой речкой.<br />
                    <nobr>Какая-то</nobr> стрельба, то&nbsp;вдалеке, то&nbsp;рядом,<br />
                    а&nbsp;сверху самолет кружит.</p>
                    <p>Им&nbsp;бы сейчас невидимость сгодилась,<br />
                    <nobr>какая-нибудь</nobr> бурая булыжность,<br />
                    несуществуемость весьма&nbsp;бы и&nbsp;весьма&nbsp;бы<br />
                    хоть на&nbsp;момент, но&nbsp;лучше на&nbsp;подольше.</p>
                    <p><nobr>Что-то</nobr> еще случится, только где и&nbsp;что.<br />
                    <nobr>Кто-то</nobr> выйдет навстречу, но&nbsp;когда и&nbsp;кто,<br />
                    в&nbsp;каком количестве и&nbsp;с&nbsp;какой целью.<br />
                    Вдруг у&nbsp;него будет выбор<br />
                    и&nbsp;он&nbsp;не&nbsp;пожелает стать врагом,<br />
                    оставив их&nbsp;в&nbsp;<nobr>каких-нибудь</nobr> живых.</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>';
                break;

            case 'picture-september-11':
                $poem['title'] = 'Сфотографированное 11 сентября';
                $poem['content'] = '
                <div class="poem">
                    <p>Прыгнули с&nbsp;горящих этажей вниз &mdash;<br />
                    один, двое, несколько<br />
                    выше, ниже.</p>
                    <p>Фотография остановила их&nbsp;в&nbsp;живых<br />
                    и&nbsp;сейчас упасает<br />
                    над землей, к&nbsp;земле.</p>
                    <p>Каждый пока еще цельность<br />
                    со&nbsp;своим лицом<br />
                    и&nbsp;надежно скрытого кровью.</p>
                    <p>Еще довольно времени,<br />
                    чтоб разметало волосы,<br />
                    а&nbsp;из&nbsp;кармана вывалились<br />
                    ключи и, конечно, мелочь.</p>
                    <p>Они пока что в&nbsp;пределах воздуха,<br />
                    в&nbsp;его отрезках,<br />
                    которые мгновение как отворились.</p>
                    <p><nobr>Всего-то</nobr> две вещи я&nbsp;могу для них сделать &mdash;<br />
                    описать полет<br />
                    и&nbsp;не&nbsp;ставить последней фразы.</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>';
                break;

            case 'return-luggage':
                $poem['title'] = 'Обратный багаж';
                $poem['content'] = '
                <div class="poem">
                    <p>Участок маленьких могилок на&nbsp;кладбище.<br />
                    Мы, долгожители, их&nbsp;стороной обходим,<br />
                    как богачи кварталы бедняков.</p>
                    <p>Лежат тут Яцек, Доминик и&nbsp;Зося,<br />
                    до&nbsp;срока отнятые у&nbsp;луны и&nbsp;солнца,<br />
                    у&nbsp;облаков и&nbsp;обращений года.</p>
                    <p>Куда как мал багажик их&nbsp;обратный.<br />
                    Клочки пейзажа<br />
                    в&nbsp;количестве пустяшном.<br />
                    Горсть воздуха с&nbsp;мелькающей белянкой.<br />
                    Ложечка горьких знаний о&nbsp;лекарстве.</p>
                    <p>Мелкие непослушности,<br />
                    при наличии роковых.<br />
                    Стремглав за&nbsp;мячиком на&nbsp;мостовую.<br />
                    Восторг скольжения на&nbsp;ломком льду.</p>
                    <p>Тот вон и&nbsp;рядом та, и&nbsp;те, что с&nbsp;краю:<br />
                    окошка не&nbsp;успев расколотить,<br />
                    сломатьчасы,<br />
                    и&nbsp;дорасти до&nbsp;дверной ручки.<br />
                    Галинка, четыре года,<br />
                    два их&nbsp;которых лежа и&nbsp;глядя в&nbsp;потолок.</p>
                    <p>Андрейке до&nbsp;пяти недели не&nbsp;хватило,<br />
                    Беатке зимних святок<br />
                    с&nbsp;клубочками дыханья на&nbsp;морозце.</p>
                    <p>А&nbsp;что сказать, когда всего лишь день,<br />
                    минута, секунда;<br />
                    тьма, вспышка лампочки и&nbsp;снова тьма?</p>
                    <p>KOSMOS MARKOS<br />
                    CHRONOS PARADOKSOS<br />
                    Только в&nbsp;суровом греческом есть на&nbsp;такое слова.</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>';
                break;

            case 'ball':
                $poem['title'] = 'Бал';
                $poem['content'] = '
                <div class="poem">
                    <p>Покуда толком ничего не&nbsp;ясно,<br />
                    поскольку нет сигналов долетевших,</p>
                    <p>пока земля <nobr>по-прежнему</nobr> иная,<br />
                    чем ближние и&nbsp;дальние планеты,</p>
                    <p>покуда нет ни&nbsp;слуху ни&nbsp;духу<br />
                    о&nbsp;прочих травах, предпочтенных ветром,<br />
                    о&nbsp;деревах других в&nbsp;коронах кроны,<br />
                    ином зверье, как наше, очевидном,</p>
                    <p>покуда нету эха, кроме местных,<br />
                    умеющего говорить слогами,</p>
                    <p>покуда неизвестно<br />
                    о&nbsp;худших или лучших<br />
                    амадеях,<br />
                    платонах или эдисонах,</p>
                    <p>пока злодейства наши<br />
                    соперничают только меж собой,</p>
                    <p>а&nbsp;приданное нам добросердечье<br />
                    ни&nbsp;на&nbsp;какое больше не&nbsp;похоже<br />
                    и, хоть сомнительное, но&nbsp;одно такое,<br />
                    а&nbsp;головы с&nbsp;невнятицей иллюзий &mdash;<br />
                    единственные полные иллюзий,</p>
                    <p>покуда наши вопли к&nbsp;своду неба<br />
                    всего лишь вопли <nobr>из-под</nobr> сводов нёба &mdash;</p>
                    <p>мы&nbsp;мним себя гостями на&nbsp;танцульке<br />
                    особыми и&nbsp;отличенными,<br />
                    танцуем под цимбалы местных музыкантов<br />
                    и&nbsp;пусть нам представляется,<br />
                    что это бал, какие поискать,</p>
                    <p>кому как&nbsp;&mdash; не&nbsp;знаю,<br />
                    а&nbsp;мне достаточно<br />
                    для счастья и&nbsp;несчастья</p>
                    <p>тихое захолустье,<br />
                    где звезды говорят спокойной ночи,<br />
                    немногозначительно перемигиваясь<br />
                    по&nbsp;нашему поводу.</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>';
                break;

            case 'note':
                $poem['title'] = 'Запись';
                $poem['content'] = '
                <div class="poem">
                    <p>Жизнь&nbsp;&mdash; единственный способ<br />
                    зашелестеть листвой,<br />
                    ловить на&nbsp;песке воздух,<br />
                    уноситься на&nbsp;крыльях;</p>
                    <p>стать собакой<br />
                    или гладить ее&nbsp;по&nbsp;теплой шерсти;</p>
                    <p>отличать боль<br />
                    ото всего, что ею&nbsp;не&nbsp;есть;</p>
                    <p>уместиться в&nbsp;событиях,<br />
                    подеваться в&nbsp;ландшафтах,<br />
                    избрать меньшую из&nbsp;ошибок.</p>
                    <p>Редкостная возможность<br />
                    мгновение помнить,<br />
                    о&nbsp;чем шепталось,<br />
                    погасивши лампу;</p>
                    <p>разок споткнуться о&nbsp;камень,<br />
                    вымокнуть на&nbsp;<nobr>каком-то</nobr> из&nbsp;дождиков,<br />
                    следить за&nbsp;летучей искрой<br />
                    и&nbsp;посеять ключи в&nbsp;траве;</p>
                    <p>непрерывно не&nbsp;зная<br />
                    <nobr>чего-то</nobr> важного.</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>';
                break;

            case 'list':
                $poem['title'] = 'Список';
                $poem['content'] = '
                <div class="poem">
                    <p>Составила список вопросов,<br />
                    хотя не&nbsp;дождусь ответов,<br />
                    им&nbsp;или не&nbsp;быть не&nbsp;пора,<br />
                    или их&nbsp;не&nbsp;пойму.</p>
                    <p>Список получился длинный,<br />
                    вопросы в&nbsp;нем важные и&nbsp;не&nbsp;очень,<br />
                    чтобы не&nbsp;надоесть,<br />
                    приведу не&nbsp;все:</p>
                    <p>Что было на&nbsp;самом деле,<br />
                    а&nbsp;что всего лишь казалось<br />
                    в&nbsp;этом зрительном зале,<br />
                    звездном и&nbsp;подзвездном,<br />
                    где кроме входного билета<br />
                    положен билет на&nbsp;выход;</p>
                    <p>что оно есть, всё живое,<br />
                    которое не&nbsp;успею<br />
                    сравнить с&nbsp;<nobr>каким-то</nobr> иным;</p>
                    <p>О&nbsp;чем будут писать<br />
                    завтрашние газеты;</p>
                    <p>Когда прекратятся войны<br />
                    и&nbsp;что объявится вместо;</p>
                    <p>На&nbsp;чьем теперь пальце<br />
                    с&nbsp;моего среднего колечко,<br />
                    украденное у&nbsp;меня&nbsp;&mdash; потерянное;</p>
                    <p>Где место свободной воли,<br />
                    которая одновременно<br />
                    бывает и&nbsp;не&nbsp;бывает.</p>
                    <p>Что с&nbsp;уймой людей &mdash;<br />
                    мы&nbsp;в&nbsp;самом деле были знакомы?</p>
                    <p>Что пыталась сказать мне М.,<br />
                    когда не&nbsp;могла уже говорить;</p>
                    <p>Почему худые дела<br />
                    я&nbsp;полагала добрыми<br />
                    и&nbsp;что нужно,<br />
                    чтобы больше не&nbsp;ошибиться?</p>
                    <p>Некоторые вопросы<br />
                    я&nbsp;записывала перед тем, как заснуть.<br />
                    Проснувшись,<br />
                    не&nbsp;смогла их&nbsp;прочесть.</p>
                    <p>Иногда мне кажется,<br />
                    что вот он&nbsp;прекрасный шифр.<br />
                    Но&nbsp;и&nbsp;это вопрос,<br />
                    который меня <nobr>когда-то</nobr> оставит.</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>';
                break;

            case 'everything':
                $poem['title'] = 'Всё';
                $poem['content'] = '
                <div class="poem">
                    <p>Всё &mdash;<br />
                    слово бессовестное и&nbsp;надменное.<br />
                    Вполне заслуживающее кавычек.<br />
                    Представляясь, что целиком охватывает,<br />
                    вмещает, вбирает, учитывает и&nbsp;включает.<br />
                    Оно между тем всего лишь<br />
                    обрывок вихря.</p>
                    <p class="foot-note">Перевод Асара Эппеля</p>
                </div>';
                break;

			default:
				$poem = null;
				break;
		}
		return array_merge(array('images' => '', 'notes' => ''), $poem);
	}
}
