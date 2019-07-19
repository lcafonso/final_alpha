<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    $criado = $faker->dateTimeBetween( '-50 years','-20 years');

    return [
        'name' => '',
        'surname'  =>  '',
        'body'  => $faker->text(200),
        'file' => 'img/users/avatars.svg',
        'local' => 'Local',
        'country' => 'Contry',
        'birth' => $criado,
        'genre' => 'MALE',
        'social1' => 'social1',
        'social2' => 'social2',
        'social3' => 'social3',
        'web' => 'https://' . $faker->word . '.com',
        'phone' => $faker->phoneNumber,
        'role_id' => 3,
    ];
});
