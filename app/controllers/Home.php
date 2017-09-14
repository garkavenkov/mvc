<?php

namespace app\Controllers;

use core\Controller;
use core\View;

class Home extends Controller
{
    public function index()
    {
        View::render('Home/index', [
            'title' => 'Title page',
            'msg'   => 'Do not waste your time. Start build cool thing.'
        ]);
    }
}