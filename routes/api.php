<?php
use App\Controllers\Api\Auth\AuthController;

use App\Controllers\Api\Events\EventController;
use App\Controllers\Api\Events\EventRoleController;
use App\Controllers\Api\Guest\GuestController;
use App\Controllers\Api\Role\RoleController;
use App\Controllers\Api\Role\RoleUserController;
use Pecee\SimpleRouter\SimpleRouter as Route;

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::post('/users/{user}/roles/{role}/assign', [RoleUserController::class, 'assignRole'])->name('user.assignRole');
Route::delete('/users/{user}/roles/{role}/remove', [RoleUserController::class, 'removeRole'])->name('user.removeRole');
Route::post('/events/assign-role', [EventRoleController::class, 'assignRole'])->name('events.assignrole');
Route::post('/events/remove-role', [EventRoleController::class, 'removeRole'])->name('events.removerole');


Route::resource('/roles', RoleController::class)->name('roles');
Route::resource('/events', EventController::class);
Route::resource('/guests', GuestController::class)->name('guests');
