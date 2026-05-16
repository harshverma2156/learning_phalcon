<?php

use Phalcon\Mvc\Router;

class RouterService
{
    public static function register($di)
    {
        $di->setShared('router', function () {

            // $router = new Router(false);

            return new Router();
           

            // return $router;

        });
    }
}