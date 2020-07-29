<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class DistritoSeeder extends Seeder
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

        $carbon = new \Carbon\Carbon();
 
        for($i = 1; $i<=100; $i++){

 
            \DB::table('distrito')->insert([
                'nombre' => $faker->citySuffix(),
                'costo_envio' => $faker->numberBetween(1,50),
                'provincias_id' => $faker->numberBetween(1,70),
                
            ]);
        }
    }
}
