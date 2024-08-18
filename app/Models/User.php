<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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
        'first_name' => 'required|max_len,150',
        'last_name' => 'required|max_len,50',
        'username' => 'required|max_len,20',
        'email' => 'required|valid_email',
        'password' => 'required|min_len,8|valid_password',
        'password_confirmation' => 'required|equalsfield,password|valid_password',
    ];

    public static array $rules_login = [
        'username' => 'required',
        'password' => 'required|min_len,8|valid_password',
    ];

    /**
     * The roles that belong to the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'user_roles', 'user_id', 'role_id')
            ->withTimestamps();
    }

    /**
     * Check if the user has a specific role.
     *
     * @param string $roleName
     * @return bool
     */
    public function hasRole(string $roleName): bool
    {
        return $this->roles()->where('roles.name', $roleName)->exists(); // Especifica la tabla 'roles'
    }

    /**
     * Assign a role to the user.
     *
     * @param Role $role
     * @return void
     */
    public function assignRole(Role $role): void
    {
        $this->roles()->attach($role);
    }

    /**
     * Remove a role from the user.
     *
     * @param Role $role
     * @return void
     */
    public function removeRole(Role $role): void
    {
        $this->roles()->detach($role);
    }

    public function events(){
        return $this->hasMany(Event::class, 'organizer_id');
    }
}
