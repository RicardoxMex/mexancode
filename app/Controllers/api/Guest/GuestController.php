<?php
namespace App\Controllers\Api\Guest;

use App\Models\Event;
use App\Models\Guest;
use App\Models\User;
use Pecee\Controllers\IResourceController;
class GuestController implements IResourceController
{
    public function index()
    {
        $_guests = Guest::orderBy('created_at', 'desc')->get();
        return response()->json(['data' => $_guests]);
    }
    public function create()
    {

    }
    public function store()
    {
        $_event_id = input('event_id');
        $_user_id = input('user_id');
        validateRequest(Guest::$rules_guest);
        $_user_exists = User::where('id', $_user_id)->exists();
        $_event_exists = Event::where('id', $_event_id)->exists();

        if (!$_user_exists || !$_event_exists)
            response()->json(['message' => 'user or event not found']);

        $_user_has_guest = Guest::where('user_id', $_user_id)->where('event_id', $_event_id)->exists();
        $_user_is_organizer = Event::where('organizer_id', $_user_id)->where('id', $_event_id)->exists();

        if ($_user_has_guest || $_user_is_organizer)
            response()->httpCode(400)->json(['message' => 'user has been invited to the event.']);

        $_guest = new Guest();
        $_guest->user_id = $_user_id;
        $_guest->event_id = $_event_id;
        $_guest->save();
        response()->json(['message' => 'guest created']);
    }
    public function show($id)
    {
        $_guest_exists = Guest::where('id', $id)->exists();
        if (!$_guest_exists)
            response()->httpCode(404)->json(['message' => 'guest not found']);

        $_guest = Guest::find($id);

        response()->json(['guest' => $_guest]);

    }
    public function edit($id)
    {
    }
    public function update($id)
    {
        $_rsvp_status = input('rsvp_status');
        $_guest_exists = Guest::where('id', $id)->exists();
        if (!$_guest_exists)
            response()->httpCode(404)->json(['message' => 'guest not found']);

        $_guest = Guest::find($id);
        if (!empty($_rsvp_status)) {
            $_guest->rsvp_status = $_rsvp_status;
            $_guest->save();
        }
        response()->json(['message' => 'guest updated', 'data'=> $_guest]);
    }
    public function destroy($id)
    {
        $_guest_exists = Guest::where('id', $id)->exists();
        if (!$_guest_exists)
            response()->httpCode(404)->json(['message' => 'guest not found']);
        $_guest = Guest::find($id);
        $_guest->delete();
        response()->httpCode(200)->json(['message' => 'guest deleted ']);
    }
}