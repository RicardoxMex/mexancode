<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/** @psalm-suppress PropertyNotSetInConstructor */
class User extends Model
{
    use SoftDeletes;

    protected $hidden = [
        'password'
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
    ];

    public static array $rules_register = [
        'first_name'=>'required|max_len,150',
        'last_name'=> 'required|max_len,50',
        'username' => 'required|max_len,20',
        'email' => 'required|valid_email',
        'password' => 'required|min_len,8|valid_password',
        'password_confirmation' => 'required|equalsfield,password|valid_password',
    ];

    public static array $rules_login = [
        'username' => 'required',
        'password' => 'required|min_len,8|valid_password',
    ];
}
