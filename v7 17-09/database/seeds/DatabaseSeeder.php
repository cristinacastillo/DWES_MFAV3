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
        $this->call([DogTableSeeder::class,
                     UserTableSeeder::class,
        			 AdoptionTableSeeder::class]);


        //$this->call(AdoptionTableSeeder::class);
    }
}
