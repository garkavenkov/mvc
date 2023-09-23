<?php

use MVC\Framework\Base\View;

function view(string $name, array $data=[])
{
    echo View::render($name, $data);
}

function view_partial(string $name)
{
    $extention = pathinfo($name, PATHINFO_EXTENSION);

    if ($extention == '') {
        $name .= '.php';
    }

    require VIEWS_DIR . "/partials/$name";
}

function public_resource(string $resource)
{    
    echo URL . '/' . ltrim($resource, '/');
}