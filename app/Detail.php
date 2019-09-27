<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
        'id',
        'latitude',
        'longitude',
        'equipment',
        'exposure',
        'aperture',
        'iso' ,
        'dimensionX',
        'dimensionY',
        'resolution',
        'post_id',
        'technologie_id',
        'place_id',
    ];

    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function technologie(){
        return $this->belongsTo(Technologie::class);
    }

    public function place() {
        return $this->belongsTo(Place::class,'place_id','place_id');
    }
}
