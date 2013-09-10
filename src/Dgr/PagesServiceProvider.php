<?php
/**
 * @author Dmitry Groza <boxfrommars@gmail.com>
 */

namespace Dgr;


use Silex\Application;
use Silex\ServiceProviderInterface;

class PagesServiceProvider implements ServiceProviderInterface {


    public function register(Application $app)
    {
        $app['page.service'] = $app->share(function ($app) {
            $pageService = new PageService($app['db']);

            return $pageService;
        });
    }

    public function boot(Application $app)
    {
    }
} 