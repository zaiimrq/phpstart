<?php

use App\controller\SampleController;
use App\core\Route;
use App\core\View;

Route::get('/', function () {
    View::render('index');
});
// Route::get('/sample', [SampleController::class, 'index']);
