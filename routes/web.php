<?php

use App\Controllers\Web\Auth\AuthController;

use Pecee\SimpleRouter\SimpleRouter as Route;

use App\Controllers\Web\HomeController;



Route::get('/', [HomeController::class,"index"])->name("home");
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');



