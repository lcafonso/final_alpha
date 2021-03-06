<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = [
		'district_id',
		'name'
	];

    public function counties() {
        return $this->hasMany(County::class,null,'district_id');
    }


    public function places() {
    	return $this->hasMany(Place::class,null,'district_id');
    }

}
