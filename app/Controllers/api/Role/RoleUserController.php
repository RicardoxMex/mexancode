<?php
namespace App\Controllers\Api\Role;
use App\Models\Role;
use App\Models\User;
class RoleUserController
{
    public function assignRole($user, $role)
    {
        $_user_exists = User::where("id", $user)->exists();
        $_role_exists = Role::where("id", $role)->exists();

        if ($_user_exists && $_role_exists) {
            $_user = User::findOrFail($user);
            $_role = Role::findOrFail($role);

            if (!$_user->hasRole($_role->name)) {
                $_user->assignRole($_role);
                response()->httpCode(200)->json(['message' => 'Role assigned successfully.']);
            }
            response()->httpCode(400)->json(['message' => 'User already has this role.']);
        } else {
            response()->httpCode(404)->json(['message' => 'user or role dont exist']);
        }


        //return redirect()->back()->with('error', 'User already has this role.');
    }
    public function removeRole($user, $role)
    {
        $_user_exists = User::where("id", $user)->exists();
        $_role_exists = Role::where("id", $role)->exists();
        if (!$_user_exists || !$_role_exists)
            response()->httpCode(404)->json(["message" => "user or role dont exist"]);

        $_user = User::findOrFail($user);
        $_role = Role::findOrFail($role);

        if ($_user->hasRole($_role->name)) {
            $_user->removeRole($_role);
            response()->httpCode(200)->json(['message' => 'Role removed successfully.']);
        }
    }
}