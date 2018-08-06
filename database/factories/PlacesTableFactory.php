<?php

use Faker\Generator as Faker;

$factory->define(App\Place::class, function (Faker $faker) {
    return [
    'name' => $faker->name,
    'address' => $faker->address,
    "longitude" => $faker->longitude,
       'latitude' => $faker->latitude
    ];
});
