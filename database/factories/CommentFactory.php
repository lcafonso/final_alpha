<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Comment;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [

        'name' => $title,
        'slug' => Str::slug($title),
        'body' => $faker->text(500),
        'user_id' => rand(1,30),

    ];
});