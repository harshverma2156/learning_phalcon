<?php

use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Application;

require '../vendor/autoload.php';

$config =require '../app/Config/config.php';

require '../app/Services/DatabaseService.php';
require '../app/Services/ViewService.php';
require '../app/Services/RouterService.php';
require '../app/Services/LoaderService.php';

LoaderService::register($config);

$di = new FactoryDefault();

DatabaseService::register($di, $config);
ViewService::register($di, $config);
RouterService::register($di);

try {
    $application = new Application($di);

    echo $application->handle(
        str_replace(
            '/learning_phalcon',
            '',
            $_SERVER['REQUEST_URI']
        )
    )->getContent();

} catch (\Exception $e) {
    echo "Exception: ", $e->getMessage();

}