<?php

use Faker\Generator as Faker;

$factory->define(App\Hotel::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
    'state'=> $faker->streetAddress,
    'capacity'=> $faker->randomNumber(),
    'address'=> $faker->address,
    "longitude" => $faker->longitude,
    'latitude' => $faker->latitude
    ];
});
