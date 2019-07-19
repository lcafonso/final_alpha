<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Album;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    $title = $faker->unique()->word(8);
    return [
        'name' => $title,
        'slug' => Str::slug($title),
        'body' => $faker->text(500),
        'user_id' => rand(1,30),
        'post_id' => rand(1,300),
    ];
});
