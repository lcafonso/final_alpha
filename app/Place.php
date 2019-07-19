<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = [
    	'district_id',
    	'county_id',
    	'place_id',
    	'name',
    	'CP4',
    	'CP3',
    	'CPALF',
    	'latitude',
    	'longitude',
	];

    public function district() {
    	return $this->belongsTo(District::class);
    }
  
    public function county() {
    	return $this->belongsTo(County::class);
    }



}
