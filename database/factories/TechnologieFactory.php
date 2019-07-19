<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


use App\Technologie;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Technologie::class, function (Faker $faker) {
    $title = $faker->unique()->word(5);
    return [
        'name' => $title,
        'slug' => Str::slug($title),
    ];
});
