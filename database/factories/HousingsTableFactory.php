<?php

use Faker\Generator as Faker;

$factory->define(App\Housing::class, function (Faker $faker) {
    $id_rooms = \App\Room::all()->pluck('id')->toArray();
    $id_hotels = \App\Hotel::all()->pluck('id')->toArray();
    $id_hajd = \App\Hajd::all()->pluck('id')->toArray();
    return [

        'room_id'=> $faker->randomElement($id_rooms),
    'hotel_id'=> $faker->randomElement($id_hotels),
    'hajd_id'=> $faker->randomElement($id_hajd),
    'start'=> $faker->dateTime,
    'end'=> $faker->dateTime

    ];
});
