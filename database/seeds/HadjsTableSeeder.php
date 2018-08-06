<?php

use Illuminate\Database\Seeder;

class HadjsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(\App\Hajd::class,500)->create();
    }
}
