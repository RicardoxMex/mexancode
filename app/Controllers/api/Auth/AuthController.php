<?php
namespace App\Controllers\Api\Auth;

use App\Models\User;
use Core\Session;

class AuthController
{
    public function login()
    {
        if (validateRequest(User::$rules_login)) {
            $_username = input('username');
            $_password = input('password');
        }
        $_user = User::where('username', $_username)->first();
        if (is_null($_user))
            response()->httpCode(401)->json(["message" => "Invalid credentials"]);
        
        if (password_verify($_password, $_user->password)) {
            Session::setSession('user', [
                'id'=>$_user->id,
                'name' => $_user->first_name . ' ' .$_user->last_name,
                'username' => $_user->username,
                'email' => $_user->email,
            ]);
            response()->httpCode(200)->json(["message" => "Authentication successful"]);
        }
    }
    public function logout()
    {
    }
    public function register()
    {
        if (validateRequest(User::$rules_register)) {
            $_first_name = input('first_name');
            $_last_name = input('last_name');
            $_username = input('username');
            $_email = input('email');
            $_password = input('password');

            $_username_exist = User::where('username', '=', $_username)->exists();
            $_email_exist = User::where('email', '=', $_email)->exists();

            if (!$_username_exist && !$_email_exist) {
                $_user = User::create([
                    'first_name' => $_first_name,
                    'last_name' => $_last_name,
                    'username' => $_username,
                    'email' => $_email,
                    'password' => password_hash($_password, PASSWORD_DEFAULT),
                ]);
                
                response()->httpCode(200)->json([
                    'message' => 'User created susscesfull',
                ]);
            }

            if ($_username_exist && $_email_exist) {
                response()->httpCode(409)->json([
                    'message' => 'username and email already exists',
                ]);
            } elseif ($_username_exist) {
                response()->httpCode(409)->json([
                    'message' => 'email already exists',
                ]);
            } elseif ($_email_exist) {
                response()->httpCode(409)->json([
                    'message' => 'username already exists',
                ]);
            }

        }
    }
}