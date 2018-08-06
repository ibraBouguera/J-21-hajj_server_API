<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(AgenciesTableSeeder::class);
         $this->call(HotelsTableSeeder::class);
         $this->call(PlacesTableSeeder::class);
         $this->call(TransprotationTableSeeder::class);
         $this->call(HadjsTableSeeder::class);
         $this->call(TravelsTableSeeder::class);
         $this->call(RoomsTableSeeder::class);
         $this->call(HadjsTableSeeder::class);
    }
}
