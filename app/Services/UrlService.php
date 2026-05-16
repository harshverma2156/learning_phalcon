<?php

use Phalcon\Mvc\Url;

class UrlService
{
    public static function register($di, $config)
    {
        $di->setShared('url', function () use ($config) {
            $url = new Url();

            $url->setBaseUri(
                $config['application']['baseUri']
            );

            return $url;
            
        });
    }
}