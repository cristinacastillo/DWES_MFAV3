<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creamos un array vacío
        $data = [] ;

        // crear el objeto Faker
        $faker = Faker\Factory::create() ;

        // 
        for($i=0; $i < 35; $i++)
        	array_push($data, [
        						"name"      => $faker->name(),
        						"surnames"      => $faker->sentence(2),
        						"email" => $faker->email(),
        						"password"      => Hash::make('12345'),
        						"phoneNumber"      => $faker->randomNumber(9),
        						"admin"      => 0,

	       					  ]) ;
        //
        DB::table('user')->insert($data) ;
    }
}