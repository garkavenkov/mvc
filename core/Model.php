<?php

namespace core;

use DBConnector\DBConnect;

abstract class Model
{
    protected static function getInstance()
    {
        define('DB_USERNAME', 'test');
        define('DB_PASSWORD', 'test');
        define('DB_SCHEMA'  , 'test');
        define('DB_DRIVER'  , 'mysql');
        define('DB_HOSTNAME', 'localhost');

        $dbh = DBConnect::getInstance();
        return $dbh;
    }
}