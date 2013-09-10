<?php
/**
 * @author Dmitry Groza <boxfrommars@gmail.com>
 */

$startTime = microtime(true);
$loader = require_once __DIR__ . '/../vendor/autoload.php';

/** @var Silex\Application $app [@var TwigServiceProvider $twig] */
$app = new Silex\Application();

$app['debug'] = true;

$app['root_path'] = realpath(__DIR__ . '/..');
$app['application_path'] = $app['root_path'] . '/app';
$app['controllers_path'] = $app['application_path'] . '/controllers';
$app['tmp_path'] = $app['root_path'] . '/tmp';
$app['vendor_path'] = $app['root_path'] . '/vendor';

$app['config'] = array(
    'host' => 'dgr.dev',
    'db' => array(
        'db.options' => array(
            'driver' => 'pdo_pgsql',
            'host' => 'localhost',
            'dbname' => 'dgr',
            'user' => 'dgr',
            'password' => 'dgr',
        ),
    ),
    'twig' => array(
        'twig.path' => $app['application_path'] . '/views',
        'twig.options' => array(
            'cache' => $app['tmp_path'] . '/cache/twig',
            'debug' => $app['debug'],
        ),
    ),
    'monolog' => array(
        'monolog.logfile' => $app['tmp_path'] . '/dev.log',
        'monolog.level' => $app['debug'] ? \Monolog\Logger::DEBUG : \Monolog\Logger::INFO,
    )
);

$loader->add('App', $app['application_path']);

$app->register(new Silex\Provider\MonologServiceProvider(), $app['config']['monolog']);
$app->register(new Silex\Provider\DoctrineServiceProvider(), $app['config']['db']);
$app->register(new Silex\Provider\TwigServiceProvider(), $app['config']['twig']);
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());
//$app->register(new Silex\Provider\SessionServiceProvider());

$app['cache'] = $app->share(function ($app) {
    return new \Doctrine\Common\Cache\FilesystemCache($app['tmp_path'] . '/cache');
});

$app['starttime'] = $startTime;

$app['logtime'] = $app->protect(
    function ($msg = null, $params = array()) use ($app) {
        $app['monolog']->addDebug(
            (int)((microtime(true) - $app['starttime']) * 1000) . 'ms ' . ($msg ? "[$msg]" : ''),
            $params
        );
    }
);

$app->before(
    function () use ($app) {
        $app['logtime']('before controller');
    }
);

$app->after(
    function () use ($app) {
        $app['logtime']('after controller');
    }
);

$app->mount('/', new \App\ControllerProvider\Main());
$app->mount('', new \App\ControllerProvider\Shimborska());

$app['logtime']('before run');
$app->run();
$app['logtime']("last codeline\n");