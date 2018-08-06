<?php

use Faker\Generator as Faker;

$factory->define(\App\Room::class, function (Faker $faker) {
    $id_hotel = \App\Hotel::all()->pluck('id')->toArray();

    return [
        'hotel_id'=> $faker->randomElement($id_hotel)
    ];
});
