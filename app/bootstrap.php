<?php 

define('ROOT_DIR', dirname(__DIR__));
define('APP_DIR', ROOT_DIR . '/app' );
define('VIEWS_DIR', ROOT_DIR . '/resources/views/');
define('CONFIG_DIR', ROOT_DIR . '/config');


require CONFIG_DIR . '/app.php';
require ROOT_DIR . '/vendor/autoload.php';


use MVC\Framework\Core\Dispatching\Dispatcher;

$dispatcher = new Dispatcher();