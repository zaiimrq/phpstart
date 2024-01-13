<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/global.php';


use phpstart\controller\HomeController;
use phpstart\core\Route;


Route::get('/', [HomeController::class, 'index']);
