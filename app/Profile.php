<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'id',
        'name',
        'surname',
        'body',
        'file',
        'local',
        'country',
        'birth',
        'genre',
        'social1',
        'social2',
        'social3',
        'web',
        'phone',
        'user_id',
        'role_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function role(){
        return $this->hasOne(Role::class);
    }
}
