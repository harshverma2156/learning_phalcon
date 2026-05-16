<?php 
 use Phalcon\Mvc\View;

 class ViewService
 {
    public static function register($di, $config)
    {
        $di->setShared('view', function () use ($config) {
            $view = new View();

            $view->setViewDir(
                $config['application']['viewDir']
            );
            return $view;
        });
    }
 }
