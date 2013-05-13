<?php
/**
 * @author Dmitry Groza <boxfrommars@gmail.com>
 */

namespace App\ControllerProvider;

class Main implements \Silex\ControllerProviderInterface
{
    public function connect(\Silex\Application $app)
    {
        /** @var $controllers \Silex\ControllerCollection */
        $controllers = $app['controllers_factory'];

        $controllers->get(
            '/',
            function () use ($app) {
                return $app['twig']->render('main.twig', array(
                    'name' => 'mounted main',
                ));
            }
        )->host($app['config']['host']);
        return $controllers;
    }
}