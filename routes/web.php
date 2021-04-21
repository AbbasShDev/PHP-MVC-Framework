<?php


use App\Controllers\AppController;
use App\Controllers\Auth\LoginController;
use App\Controllers\Auth\RegisterController;
use App\Core\Routing\Route;

Route::get('/', [AppController::class, 'home']);

Route::get('/contact', [AppController::class, 'contactCreate']);
Route::post('/contact', [AppController::class, 'contactStore']);

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);