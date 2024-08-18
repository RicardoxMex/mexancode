<?php
namespace App\Controllers\Api\Role;
use App\Models\Role;
use Pecee\Controllers\IResourceController;

class RoleController implements IResourceController
{
    public function index()
    {
        $_roles = Role::all();
        return response()->json(['data' => $_roles]);
    }
    public function show($id)
    {
        $_role = Role::find($id);
        if (is_null($_role))
            response()->httpCode(404)->json(['message' => 'role not found']);
        return response()->json(['role' => $_role]);
    }
    public function store()
    {
        if (validateRequest(Role::$rules_roles)) {
            $_name = input('name');
            $_description = input('description');

            $_role_exist = Role::where("name", $_name)->exists();

            if ($_role_exist)
                response()->httpCode(409)->json(['message' => 'role already exists']);

            $roles = new Role();
            $roles->name = $_name;
            $roles->description = $_description;
            $roles->save();
            response()->httpCode(200)->json(['message' => 'role created successful', 'data' => $roles]);
        }
    }
    public function update($id)
    {
        $_role = Role::find($id);
        if (is_null($_role))
            response()->httpCode(404)->json(['message' => 'role not found']);

        $_description = input('description');
        if ($_description !== $_role->description) {
            $_role->description = $_description;
            $_role->save();
        }
        response()->httpCode(200)->json(['message' => 'role updated successful']);
    }
    public function destroy($id)
    {
        $_role = Role::find($id);
        if (is_null($_role))
            response()->httpCode(404)->json(['message' => 'role not found']);
        $_role->delete();
        response()->httpCode(200)->json(['message' => 'role deleted ']);
    }
    public function edit($id)
    {
    }
    public function create()
    {
    }

}