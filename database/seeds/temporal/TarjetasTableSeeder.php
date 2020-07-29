<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class TarjetasTableSeeder extends Seeder
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
 
        for($i = 1; $i<=10; $i++){
 
            \DB::table('tarjetas')->insert([
                'tipo_tarjeta' => $faker->creditCardType(),
                
                
            ]);
        }
    }
}
