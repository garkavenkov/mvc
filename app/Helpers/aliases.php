<?php

use MVC\Framework\Base\View;

function view(string $name, array $data=[])
{
    View::render($name, $data);
}