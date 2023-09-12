<?php

use MVC\Framework\Core\Routing\Route;

Route::get('/',  function() {
    return view('homepage');
});
