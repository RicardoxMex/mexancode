<?php
use App\Controllers\Web\HomeController;
use Pecee\SimpleRouter\SimpleRouter as Route;
Route::csrfVerifier(new Core\Middlewares\CsrfVerifier());


Route::get("/", [HomeController::class,"index"])->name("home");
Route::post('/users', [HomeController::class, 'store'])->name('users');


