<?php

/**
 * Include initialization file
 */
require realpath(dirname(__FILE__) . '/../sys/init.php');

/**
 * Include bootstrap file
 */
require APP_DIR . 'bootstrap.php';

/**
 * Create an Router object 
 */
$router = new core\Router();
$router->dispatch($_SERVER['QUERY_STRING']);