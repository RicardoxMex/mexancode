<?php
namespace App\Controllers\Web\Auth;
use Core\Views;

class AuthController{
    public function login(){
        Views::setViewPath('auth.login');
        Views::render();
    }
    public function logout(){}
    public function register(){
        Views::setViewPath('auth.register');
        Views::render();
    }
}