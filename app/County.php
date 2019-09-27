<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    protected $fillable = [
		'district_id',
        'county_id',
		'name'
	];

    public function district() {
    	return $this->belongsTo(District::class,'district_id','district_id');
    }


    public function places() {
    	return $this->hasMany(Place::class,'place_id','place_id');
    }
}
