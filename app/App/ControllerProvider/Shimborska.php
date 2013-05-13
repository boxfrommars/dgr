<?php
/**
 * @author Dmitry Groza <boxfrommars@gmail.com>
 */

namespace App\ControllerProvider;

use App\Service\Poem;
use Silex\Application;
use Silex\ControllerProviderInterface;

class Shimborska implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        /** @var $controllers \Silex\ControllerCollection */
        $controllers = $app['controllers_factory'];
        $poemService = new Poem();
        $collections = $poemService->getCollections();

        foreach ($collections as $collection) {
            $controllers->get($collection['href'] . '/{name}', function (Application $app, $name) use ($poemService, $collection) {
                $poem = $poemService->getPoem($name);
                if ($poem === null) $app->abort(404);

                return $app['twig']->render('shimborska.twig', array(
                    'title' => $poem['title'],
                    'pager' => $poemService->getPager($name),
                    'currentPage' => $collection['href'] . '/' . $name,
                    'contentTable' => $poemService->getContentTable(),
                    'content' => '<h2>' . $poem['title'] . '</h2>' . $poem['content'],
                    'notes' => $poem['notes'],
                    'images' => $poem['images'],
                ));
            })->host('shimborska.' . $app['config']['host'])->bind('poem');
        }

        $controllers->get(
            '/',
            function (Application $app) use ($poemService) {
                return $app['twig']->render('shimborska.twig', array(
                    'title' => 'Стихотворения',
                    'pager' => $poemService->getPager('qqq'),
                    'currentPage' => '/',
                    'contentTable' => $poemService->getContentTable(),
                    'content' => '<p class="cover unpined"><a href="/different/two-monkeys"><img alt="Вислава Шимборская. Обложка" src="/img/shimborska/szymborska1.jpg" /></a></p>',
                    'notes' => '<div class="note" id="book-note"><h2>Сайт посвящённый польской поэтессе Виславе Шимборской — лауреауту Нобелевской премии 1996&nbsp;года</h2></div>',
                    'images' => '',
                ));
            }
        )->host('shimborska.' . $app['config']['host']);

        $controllers->get(
            'project',
            function (Application $app) use ($poemService) {
                return $app['twig']->render('shimborska.twig', array(
                    'title' => 'О проекте',
                    'pager' => $poemService->getPager('qqq'),
                    'currentPage' => 'project',
                    'contentTable' => $poemService->getContentTable(),
                    'content' => '<h2>О проекте «Шимборская»</h2>
                        <p>Сайт посвящён творчеству известной польской поэтессы Виславы Шимборской. Многие произведения публикуются впервые в сети</p>
                        <h3>Источники, использованные в&nbsp;издании</h3>
                        <ul class="classic">
                            <li>Иностранная литература 1997, №5</li>
                            <li>Иностранная литература 2000, №8</li>
                            <li>Иностранная литература 2003, №5</li>
                            <li>Иностранная литература 2006, №6</li>
                            <li>Иностранная литература 2009, №7</li>
                            <li>Новая Юность 1997, №5-6</li>
                            <li>Новая Польша 2002, №6</li>
                            <li>Новый Мир 1995, №3</li>
                            <li>Новый Мир 1997, №4</li>
                            <li>Ахматова Анна. Собрание сочинений. Т. 8. Переводы</li>
                            <li><a href="http://nobelprize.org/index.html">Официальный сайт Нобелевской премии</a></li>
                            <li><a href="http://ru.wikipedia.org/wiki/%D0%97%D0%B0%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D0%B0">Википедия</a></li>
                        </ul>
                        <h3>Участники проекта</h3>
                        <ul class="classic">
                            <li>Арт-директор: <strong>Евгений «Ройксопп» Хейлик</strong></li>
                            <li>Дизайнер: <strong>Юрий Лебедев</strong></li>
                            <li>Разнорабочий: <strong>Дмитрий Гроза-Гудмундсдоттир</strong></li>
                        </ul>
                        <h3>Контакты</h3>
                        <p class="italic">Пожелания, замечания и указания на неточности отправляйте по&nbsp;адресу <a href="mailto:royksopp.studio@gmail.com">royksopp.studio@gmail.com</a></p>',
                    'notes' => '',
                    'images' => '',
                ));
            }
        )->host('shimborska.' . $app['config']['host']);

        $controllers->get(
            'author',
            function (Application $app) use ($poemService) {
                return $app['twig']->render('shimborska.twig', array(
                    'title' => 'Об авторе',
                    'pager' => $poemService->getPager('qqq'),
                    'currentPage' => 'author',
                    'contentTable' => $poemService->getContentTable(),
                    'content' => '<h2>Вислава Шимборская</h2>
                        <p>Вислава Шимборска (Шимборская, польск. Wis&#322;awa Szymborska; 2 июля 1923, Бнин, ныне Курник близ Познани)&nbsp;&mdash; польская поэтесса; лауреат Нобелевской премии по&nbsp;литературе 1996&nbsp;года.</p>
                        <h3>Биография</h3>
                        <p>С&nbsp;1931 жила в&nbsp;Кракове. В&nbsp;1945&ndash;1948 изучала польскую литературу и&nbsp;социологию в&nbsp;Ягеллонском университете, однако его не&nbsp;закончила. В&nbsp;1953&ndash;1981 работала в&nbsp;краковской литературной газете &laquo;&#379;ycie&nbsp;Literackie&raquo;.</p>
                        <p>В&nbsp;1996 удостоена Нобелевской премии по&nbsp;литературе &laquo;за&nbsp;поэзию, которая с&nbsp;предельной точностью описывает исторические и&nbsp;биологические явления в&nbsp;контексте человеческой&nbsp;реальности&raquo;.</p>
                        <h3>Творчество</h3>
                        <p>Дебютировала в&nbsp;печати стихотворением под названием &laquo;Szukam s&#322;owa&raquo; (&laquo;Ищу слово&raquo;) в&nbsp;марте 1945 в&nbsp;газете &laquo;Dziennik Polski&raquo;. Первый сборник стихотворений &laquo;Dlatego &#380;yjemy&raquo; (&laquo;Для этого живём&raquo;) издан&nbsp;в&nbsp;1952.</p>
                        <p>Переводила на&nbsp;польский язык произведения французских&nbsp;поэтов.</p>
                        <p class="foot-note">Материал из Википедии — свободной энциклопедии</p>',
                    'notes' => '',
                    'images' => '',
                ));
            }
        )->host('shimborska.' . $app['config']['host']);

        return $controllers;
    }
}