<?php

use Faker\Generator as Faker;

$factory->define(\App\Travel_hajd::class, function (Faker $faker) {
    $id_hadj= \App\Hajd::all()->pluck('id')->toArray();
    $id_travels= \App\Travel::all()->pluck('id')->toArray();

    return [
        'hajd_id' => $faker->randomElement($id_hadj),
        'travel_id' => $faker->randomElement($id_travels)
    ];
});
