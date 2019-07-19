<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Group;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker) {
    $title = $faker->sentence(3);
    return [
        'name' => $title,
        'slug' => Str::slug($title),
        'body' => $faker->text(500),

    ];
});
