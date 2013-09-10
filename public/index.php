<?php
/**
 * @author Dmitry Groza <boxfrommars@gmail.com>
 */

$startTime = microtime(true);
$loader = require_once __DIR__ . '/../vendor/autoload.php';

$app = new \Dgr\DgrApplication(array(
    'starttime' => $startTime,
    'debug' => true,
    'tmp_path' => '../tmp',
    'is_cache' => false,
    'application_path' => realpath(__DIR__ . '/..') . '/app',
    'config' => array(
        'db' => array(
            'db.options' => array(
                'driver' => 'pdo_pgsql',
                'host' => 'localhost',
                'dbname' => 'dgr',
                'user' => 'dgr',
                'password' => 'dgr',
            ),
        ),
    ),
));

$app->register(new \Dgr\PagesServiceProvider(), array());

if ($app['is_cache'] && $app['cache']->contains('pages')) {
    $pages = $app['cache']->fetch('pages');
} else {
    $pages = $app['page.service']->fetchAll();
    if ($app['is_cache']) $app['cache']->save('pages', $pages);
}

foreach ($pages as $page) {
    $app->get($page['url'], function(\Dgr\DgrApplication $app) use ($pages, $page) {
        switch ($page['entity']) {
            case 'poem':
            case 'poem_collection':
                $poem = $app['page.service']->fetch($page['id']);
                return $app['twig']->render('shimborska.twig', array(
                    'title' => $page['title'],
                    'pager' => $app['page.service']->getPager($page, $pages),
                    'currentPage' => $page['url'],
                    'contentTable' => $app['page.service']->getContentTable($pages),
                    'content' => '<h2>' . $poem['title'] . '</h2>' . $poem['content'],
                    'notes' => $poem['notes'],
                    'images' => $poem['images'],
                ));
                break;

            case 'page':
            default:
                return $app['twig']->render('shimborska.twig', array(
                    'title' => $page['title'],
                    'pager' => $app['page.service']->getPager($page, $pages),
                    'currentPage' => '/',
                    'contentTable' => $app['page.service']->getContentTable($pages),
                    'content' => $page['content'],
                    'notes' => '<div class="note" id="book-note"><h2>Сайт посвящённый польской поэтессе Виславе Шимборской — лауреауту Нобелевской премии 1996&nbsp;года</h2></div>',
                    'images' => '',
                ));
        }
    });
}

$app['logtime']('before run');
$app->run();
$app['logtime']("last codeline\n");