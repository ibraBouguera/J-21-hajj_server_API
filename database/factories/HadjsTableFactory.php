<?php

use Faker\Generator as Faker;

$factory->define(App\Hajd::class, function (Faker $faker) {
    $id_agency = \App\Agency::all()->pluck('id')->toArray();
    $password = \Hash::make('pass');
    return [
        "first_name" => $faker->firstName,
    'last_name' => $faker->lastName,
    'agency_id' => $faker->randomElement($id_agency),
    'password'=>$password,
        'username' => $faker->userName

    ];
});
