<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;


class ProvinciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
 
        for($i = 1; $i<=70; $i++){

 
            \DB::table('provincias')->insert([
                'nombre' => $faker->cityPrefix(),
                'departamentos_id' => $faker->numberBetween(1,15),
                
                
            ]);
        }
    }
}
