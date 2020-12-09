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


        $data = [
            
                "name"        => 'Cristina',
                "surnames"   => 'Castillo Obregón',
                "email"       => 'cristinacastilloob@gmail.com',
                "password"      => '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW',
                "phoneNumber" => '662539596',
                "profile"       => '1',
            ] ;

        DB::table('user')->insert($data) ;

        // crear el objeto Faker
        $faker = Faker\Factory::create() ;

        $data2 = [] ;

        // 
        for($i=0; $i < 35; $i++)
        	array_push($data2, [
        						"name"      => $faker->name(),
        						"surnames"      => $faker->sentence(2),
        						"email" => $faker->email(),
        						"password"      => '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW',
        						"phoneNumber"      => $faker->randomNumber(9),
        						"profile"      => 0,

	       					  ]) ;
        //
        DB::table('user')->insert($data2) ;
    }
}