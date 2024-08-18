<?php
namespace App\Controllers\Api\Events;
use App\Models\Event;
use App\Models\Role;
use App\Models\User;
class EventRoleController
{
    public function assignRole()
    {
        $_event_id = input('event_id');
        $_user_id = input('user_id');
        $_role_id = input('role_id');
        validateRequest(Event::$rules_event_assing_role_user);

        $_event_exists = Event::where("id", $_event_id)->exists();
        $_user_exists = User::where("id", $_user_id)->exists();
        $_role_exists = Role::where("id", $_role_id)->exists();

        if (!$_event_exists)
            response()->httpCode(404)->json(['message' => 'event not found']);

        if (!$_user_exists)
            response()->httpCode(404)->json(['message' => 'user not found']);

        if (!$_role_exists || $_role_id < 4)
            response()->httpCode(404)->json(['message' => 'role not found']);

        $_event = Event::find($_event_id);
        $_user = User::find($_user_id);
        $_role = Role::find($_role_id);
        if (!$_event->hasRoleInEvent($_user, $_role)) {
            $_event->assingUserAndRole($_user, $_role);
            return response()->json(['message' => 'Role assigned successfully.']);
        } else {
            return response()->httpCode(400)->json(['message' => 'User already has this role.']);
        }

    }
    public function removeRole()
    {
        $_event_id = input('event_id');
        $_user_id = input('user_id');
        $_role_id = input('role_id');
        validateRequest(Event::$rules_event_assing_role_user);

        $_event_exists = Event::where("id", $_event_id)->exists();
        $_user_exists = User::where("id", $_user_id)->exists();
        $_role_exists = Role::where("id", $_role_id)->exists();

        if (!$_event_exists)
            response()->httpCode(404)->json(['message' => 'event not found']);

        if (!$_user_exists)
            response()->httpCode(404)->json(['message' => 'user not found']);

        if (!$_role_exists || $_role_id < 4)
            response()->httpCode(404)->json(['message' => 'role not found']);

        $_event = Event::find($_event_id);
        $_user = User::find($_user_id);
        $_role = Role::find($_role_id);
        if ($_event->hasRoleInEvent($_user, $_role)) {
            $_event->removeUserRole($_user, $_role);
            return response()->json(['message' => 'Role removed successfully.']);
        } else {
            return response()->httpCode(400)->json(['message' => 'User does not have this role.']);
        }
    }
}