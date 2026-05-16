<?php

use Phalcon\Mvc\Router;

class RouterService
{
    public static function register($di)
    {
        $di->setShared('router', function () {

            $router = new Router(false);

            $router->add(
                '/',
                [
                    'controller' => 'index',
                    'action'     => 'index'
                ]
            );

            return $router;

        });
    }
}