<?php

use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Application;

require '../vendor/autoload.php';

$config = require '../app/Config/config.php';

require '../app/Services/LoaderService.php';
require '../app/Services/DatabaseService.php';
require '../app/Services/ViewService.php';
require '../app/Services/RouterService.php';
require '../app/Services/UrlService.php';

/*
|--------------------------------------------------------------------------
| Register Autoloader
|--------------------------------------------------------------------------
*/

LoaderService::register($config);

/*
|--------------------------------------------------------------------------
| Create Dependency Injection Container
|--------------------------------------------------------------------------
*/

$di = new FactoryDefault();

/*
|--------------------------------------------------------------------------
| Register Services
|--------------------------------------------------------------------------
*/

DatabaseService::register($di, $config);
ViewService::register($di, $config);
RouterService::register($di);
UrlService::register($di, $config);

/*
|--------------------------------------------------------------------------
| Handle Request
|--------------------------------------------------------------------------
*/

try {

    $application = new Application($di);

    echo $application->handle(
        $_GET['_url'] ?? '/'
    )->getContent();

} catch (\Exception $e) {

    echo "Exception: " . $e->getMessage();

}