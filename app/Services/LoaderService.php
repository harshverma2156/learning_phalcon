<?php

use Phalcon\Autoload\Loader;

class LoaderService
{
    public static function register($config)
    {
        $loader = new Loader();

        $loader->setDirectories(
            [
                '../app/Controllers/',
                '../app/Models'
            
            ]
        );

        $loader->register();
    }
}