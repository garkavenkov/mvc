<?php

namespace core;

use DBConnector\DBConnect;

abstract class Model
{
    protected static function getInstance()
    {
        $dbh = DBConnect::getInstance();
        return $dbh;
    }
}