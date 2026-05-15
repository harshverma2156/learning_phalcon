<?php

use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Application;

require '../vendor/autoload.php';

$config =require '../app/Config/config.php';

require '../app/Services/DatabaseService.php';

$di = new FactoryDefault();

DatabaseService::register($di, $config);

try {
    $application = new Application($di);

    echo $application->handle(
        $_SERVER["REQUEST_URI"]
    )->getContet();

} catch (\Exception $e) {
    echo "Exception: ", $e->getMessage();

}