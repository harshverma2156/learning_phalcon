<?php

use Phalcon\Db\Adapter\Pdo\Mysql;

class DatabaseService
{
    public static function register($di, $config) {
        $di->setShared('db', function () use ($config) {
            return new Mysql([
                'host' => $config['database']['host'],
                'username' => $config['database']['username'],
                'password' => $config['database']['password'],
                'dbname' => $config['database']['dbname']
            ]);
        });
    }
}