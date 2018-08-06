<?php

use Faker\Generator as Faker;

$factory->define(\App\Transportation::class, function (Faker $faker) {
    return [
        'matricule'=>$faker->randomDigitNotNull,
    'type' => $faker->randomElement(['bus','taxi','plan','other']),
    "longitude" => $faker->longitude,
    'latitude' => $faker->latitude,
    'capacity' => $faker->randomDigitNotNull
    ];
});
