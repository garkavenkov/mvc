<?php

use MVC\Framework\Core\Routing\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\FraseController;

Route::get('/',  function() {
    return view('homepage');
});

Route::resource('/frases',  FraseController::class);
Route::resource('/tags',    TagController::class);