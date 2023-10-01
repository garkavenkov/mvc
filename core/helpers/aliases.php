<?php

use Http\Request;
use Registry\Registry;
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

function env(string $variable, string $default = NULL)
{    
    $env = getenv($variable);
    // echo "Variable: $variable, value: "   . getenv($variable) . "<br>";
    if ($env == '') {
        return $default;
    }
    return $env;
}

function public_resource(string $resource)
{    
    echo env('URL') . '/' . ltrim($resource, '/');
}

/**
 * Wrapper for print_r
 *
 * @param mixed $data   Output data
 * @return void
 */
function pr($data)
{
    echo '<pre style="
        display: block;
        background: #eee;
        padding: 1rem;
        border: 1px solid #dfdfdf;
        border-radius: 5px;">';
    print_r($data);
    echo '</pre>';    
    
}

/** 
 * Wrapper for var_dump
 * 
 * @param mixed $data   Output data
 * @return void
 */
function vd($data)
{
    echo '<pre style="
            display: block;
            background: #eee;
            padding: 1rem;
            border: 1px solid #dfdfdf;
            border-radius: 5px;">';
    var_dump($data);
    echo '</pre>';    
}

/**
 * Wrapper for Request
 *
 * @return void
 */
function request()
{
    return new Request();
}

function redirect(string $url, int $statusCode = 303, string $flash = null)
{    
    if (!is_null($flash)) {
        (Registry::get('session'))->set('flash', $flash);
    }
    header('Location: ' . $url, true, $statusCode);
    die();
}

/**
 * Wrapper for Session 
 *
 * @param string $name  Session variable name
 * @return mixed        Session variable value
 */
function session(string $name): mixed
{
    return (Registry::get('session'))->get($name);
}