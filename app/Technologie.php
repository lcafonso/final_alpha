<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technologie extends Model
{
    protected $fillable = [
        'id',
        'name',
        'slug',
    ];

    public function details(){
        return $this->belongsToMany(Detail::class);
    }
}
