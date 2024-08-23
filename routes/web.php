<?php

use App\Controllers\Web\AdminController;
use App\Controllers\Web\Auth\AuthController;

use App\Controllers\Web\EventController;
use App\Controllers\Web\ProfileController;
use Pecee\SimpleRouter\SimpleRouter as Route;

use App\Controllers\Web\HomeController;


Route::group(['prefix' => '/admin'], function () {
    Route::get('/', [AdminController::class, "index"])->name("admin");
    Route::resource('/events', EventController::class)->name("events");
});

Route::get('/', [HomeController::class, "index"])->name("home");
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::resource('/profile', ProfileController::class)->name('profile');





