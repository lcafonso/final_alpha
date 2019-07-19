<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Detail;
use Faker\Generator as Faker;

$factory->define(Detail::class, function (Faker $faker) {

    static $number = 1;

    $place = App\Place::inRandomOrder()->first(); //all()->random();

    return [
        'latitude' => $place->latitude,
        'longitude' => $place->longitude,
        'equipment' => 'not define',
        'exposure' => 'not define',
        'aperture' => 'not define',
        'iso' => 'not define',
        'dimensionX' => 0,
        'dimensionY' => 0,
        'resolution' => 0,
        'post_id' => $number++,
        'technologie_id' => rand(1,5),
        'place_id' => $place->place_id,
    ];
});
