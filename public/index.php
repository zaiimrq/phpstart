<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/global.php';


use App\controller\HomeController;
use App\core\Route;


Route::get('/', [HomeController::class, 'index']);
