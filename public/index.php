<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/global.php';


use App\core\Route;
use App\core\View;


Route::get('/', function () {
    return View::render('index');
});
