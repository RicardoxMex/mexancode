<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/** @psalm-suppress PropertyNotSetInConstructor */
class Role extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'description',
    ];
    protected $hidden = [
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    public static array $rules_roles = [
        'name' => 'required|min_len,5|max_len,50',
        'description' => 'required|min_len,10|max_len,255',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_roles', 'role_id', 'user_id')
            ->withTimestamps();
    }
}
