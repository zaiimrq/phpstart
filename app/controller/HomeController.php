<?php

namespace App\controller;

use App\core\View;

class HomeController
{
    public function index(): void
    {
        View::render('/index');
    }
}
