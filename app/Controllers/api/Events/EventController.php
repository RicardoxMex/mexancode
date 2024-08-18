<?php
namespace App\Controllers\Api\Events;
use App\Models\Event;
use App\Models\Role;
use App\Models\User;
use Pecee\Controllers\IResourceController;

class EventController implements IResourceController
{

    public function index()
    {
        $_current_user = \Core\Session::getSession("user");

        if (isAdmin()) {
            $_event = Event::orderBy('created_at', 'desc')->get();
            return response()->json(['data' => $_event]);
        }

        $_user = User::find($_current_user['id']);
        return response()->json(['data' => $_user->events()->get()]);
    }
    public function show($id)
    {
        $_current_user = \Core\Session::getSession("user");
        if (isAdmin()) {
            $_event = Event::find($id);
            if (is_null($_event))
                response()->httpCode(404)->json(['message' => 'event not found']);
            return response()->json(['role' => $_event]);
        }

        $_event = Event::where('organizer_id', $_current_user['id'])
            ->where('id', $id)->first();

        if (is_null($_event))
            response()->httpCode(404)->json(['message' => 'event not found']);

        return response()->json(['data' => $_event]);
    }

    public function store()
    {
        if (validateRequest(Event::$rules_event)) {
            $_organizer_id = input('organizer_id');

            $_user_exits = User::where('id', '=', $_organizer_id)->exists();

            if (!$_user_exits)
                response()->httpCode(404)->json(['message' => 'user not found']);

            $_tilte = input('title');
            $_description = input('description');
            $_location = input('location');
            $_event_date = input('event_date');

            $role = Role::where('name', 'organizer')->first();
            $event = new Event();
            $event->organizer_id = $_organizer_id;
            $event->title = $_tilte;
            $event->description = $_description;
            $event->location = $_location;
            $event->event_date = $_event_date;
            $event->save();
            $event->roles()->attach($role->id, ['user_id' => $_organizer_id]);
            response()->httpCode(200)->json(['message' => 'event created successful', 'data' => $event]);
        }
    }
    public function update($id)
    {
        $_current_user = \Core\Session::getSession("user");
        validateRequest(Event::$rules_event_update);
        $_tilte = input('title');
        $_description = input('description');
        $_location = input('location');
        $_event_date = input('event_date');
        if (isAdmin()) {
            $event = Event::find($id);
            if (is_null($event))
                response()->httpCode(404)->json(['message' => 'event not found']);

            if (!empty($_tilte))
                $event->title = $_tilte;
            if (!empty($_description))
                $event->description = $_description;
            if (!empty($_location))
                $event->location = $_location;
            if (!empty($_event_date))
                $event->event_date = $_event_date;

            $event->save();
            response()->httpCode(200)->json(['message' => 'event updates successful', 'data' => $event]);
        } else {
            $event = Event::where('organizer_id', $_current_user['id'])
                ->where('id', $id)->first();

            if (is_null($event))
                response()->httpCode(404)->json(['message' => 'event not found']);

            if (!empty($_tilte))
                $event->title = $_tilte;
            if (!empty($_description))
                $event->description = $_description;
            if (!empty($_location))
                $event->location = $_location;
            if (!empty($_event_date))
                $event->event_date = $_event_date;

            $event->save();
            response()->httpCode(200)->json(['message' => 'event updates successful', 'data' => $event]);
        }
    }
    public function destroy($id)
    {
        $_current_user = \Core\Session::getSession("user");
        if (!isAuth()) {
            $_event = Event::find($id);
            if (is_null($_event))
                response()->httpCode(404)->json(['message' => 'event not found']);
            $_event->delete();
        }else{
            $_event = Event::where('organizer_id', $_current_user['id'])
                ->where('id', $id)->first();

            if (is_null($_event))
                response()->httpCode(404)->json(['message' => 'event not found']);
            $_event->delete();
        }
        response()->httpCode(200)->json(['message' => 'role deleted ']);
    }
    public function edit($id)
    {
    }
    public function create()
    {
    }

}