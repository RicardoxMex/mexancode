<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model {
    protected $fillable = [
        'event_id',
        'user_id',
        'rsvp_status',
        'invited_at'
    ];

    public static $rules_guest = [
        'event_id'=> 'required|integer',
        'user_id'=> 'required|integer'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function event(){
        return $this->belongsTo(Event::class);
    }

}