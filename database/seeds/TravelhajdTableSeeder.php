<?php

use Illuminate\Database\Seeder;

class TravelhajdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Travel_hajd::class,200)->create();
    }
}
