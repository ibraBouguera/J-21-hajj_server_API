<?php

use Faker\Generator as Faker;

$factory->define(\App\Travel::class, function (Faker $faker) {
    $id_transportation = \App\Transportation::all()->pluck('id')->toArray();
    $id_place = \App\Place::all()->pluck('id')->toArray();
    return [
    "stating" => $faker->randomElement($id_place),
    "arriving" => $faker->randomElement($id_place),
    "transportation_id" => $faker->randomElement($id_transportation),
    'travel_time' => $faker->dateTime
    ];
});
