<?php

use MVC\Framework\Core\Dispatching\Dispatcher;

require __DIR__ . '/../app/bootstrap.php';

$dispatcher = new Dispatcher();

$dispatcher->dispatch($_SERVER['REQUEST_URI']);

