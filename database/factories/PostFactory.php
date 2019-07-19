<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->unique()->sentence(4);
    $criado = $faker->dateTimeBetween( '-10 years','now');
    return [
        'name' => $title,
        'slug' => Str::slug($title),
        'excerpt' => $faker->text(200),
        'body' => $faker->text(500),
        'file' => $faker->imageUrl($width = 1280, $height = 720),
        'status' => $faker->randomElement(['DRAFT', 'PUBLISHED']),
        'user_id' => rand(1,30),
        'category_id' => rand(1,15),
        'created' => $criado,
    ];
});
