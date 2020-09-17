<?php

use Illuminate\Database\Seeder;

class AdoptionTableSeeder extends Seeder
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
        						"idDog"      => $faker->numberBetween(1,19),
        						"idUse"      => $faker->numberBetween(1,30),
        						"reason" => $faker->sentence(20),
        						"dateAdop"      =>  $faker->date($format = 'Y-m-d', $max = 'now')

	       					  ]) ;
        //
        DB::table('adoption')->insert($data) ;
    }
}
