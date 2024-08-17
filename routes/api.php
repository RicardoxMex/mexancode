<?php
use App\Controllers\Api\Auth\AuthController;
use Pecee\SimpleRouter\SimpleRouter as Route;

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);