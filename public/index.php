<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Controllers\AppController;
use App\Core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [AppController::class, 'home']);

$app->router->get('/contact', [AppController::class, 'contactCreate']);

$app->router->post('/contact', [AppController::class, 'contactStore']);

$app->run();