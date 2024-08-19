<?php

use App\Controllers\Web\AdminController;
use App\Controllers\Web\Auth\AuthController;

use Pecee\SimpleRouter\SimpleRouter as Route;

use App\Controllers\Web\HomeController;


Route::group(['prefix' => '/admin'], function () {
    Route::get('/', [AdminController::class,"index"])->name("admin");
    Route::get('/events', [AdminController::class,"events"])->name("admin.events");
});

Route::get('/', [HomeController::class,"index"])->name("home");
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/register', [AuthController::class, 'register'])->name('register');





