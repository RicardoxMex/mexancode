<?php
namespace App\Models;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'organizer_id',
        'title',
        'description',
        'location',
        'event_date',
    ];
    // protected $hidden = ['deleted_at'];
    public static array $rules_event = [
        'organizer_id' => 'required|integer',
        'title' => 'required|min_len,10|max_len,255',
        'description' => 'required|min_len,10',
        'location' => 'required|street_address|max_len,255',
        'event_date' => 'required|date,Y-m-d',
    ];

    public static array $rules_event_update = [
        'title' => 'not_empty|min_len,1|max_len,255',
        'description' => 'not_empty|min_len,1',
        'location' => 'not_empty|street_address|max_len,255',
        'event_date' => 'not_empty|date,Y-m-d',
    ];

    public static array $rules_event_assing_role_user = [
        'user_id' => 'required|integer',
        'event_id' => 'required|integer',
        'role_id' => 'required|integer'
    ];


    public function organizer()
    {
        return $this->belongsTo(User::class, 'organizer_id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'event_roles')
            ->withPivot('user_id')->withTimestamps();
    }

    public function usersWithRole($roleName)
    {
        return $this->roles()->where('roles.name', $roleName)->get();
    }

    public function hasRoleInEvent(User $user, Role $role): bool
    {
        return $this->roles()
            ->where('role_id', $role->id)
            ->wherePivot('user_id', $user->id)
            ->exists();
    }
    public function assingUserAndRole(User $user, Role $role)
    {
        return $this->roles()->attach(
            $role->id,
            [
                'user_id' => $user->id
            ]
        );
    }
    public function removeUserRole(User $user, Role $role)
    {
        return $this->roles()->wherePivot('user_id', $user->id)->detach($role->id);
    }

    public function guests(){
        return $this->hasMany(Guest::class);
    }
}