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
    	return $this->belongsTo(District::class);
    }

      
    public function places() {
    	return $this->hasMany(Place::class);
    }
}	
