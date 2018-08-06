<?php

use Illuminate\Database\Seeder;

class TransprotationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(\App\Transportation::class,200)->create();
    }
}
