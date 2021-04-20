<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Controllers\AppController;
use App\Controllers\Auth\LoginController;
use App\Controllers\Auth\RegisterController;
use App\Core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [AppController::class, 'home']);
$app->router->get('/contact', [AppController::class, 'contactCreate']);
$app->router->post('/contact', [AppController::class, 'contactStore']);

$app->router->get('/login', [LoginController::class, 'show']);
$app->router->post('/login', [LoginController::class, 'login']);

$app->router->get('/register', [RegisterController::class, 'show']);
$app->router->post('/register', [RegisterController::class, 'register']);

$app->run();