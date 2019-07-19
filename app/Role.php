<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'id',
        'name',
        'slug',
        'body',
    ];

    public function profiles(){
        return $this->belongsToMany(Profile::class);
    }
}
