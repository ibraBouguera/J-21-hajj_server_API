<?php

use Illuminate\Database\Seeder;

class HousingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Housing::class,500)->create();
    }
}
