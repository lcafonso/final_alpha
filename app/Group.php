<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'body',

    ];

    public function users(){
        return $this->hasMany(User::class);
    }

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
