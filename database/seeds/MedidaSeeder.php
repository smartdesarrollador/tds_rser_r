<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class MedidaSeeder extends Seeder
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
 
        for($i = 1; $i<=10; $i++){

 
            \DB::table('medida')->insert([
                'medida' => $faker->numberBetween(1,30),  
            ]);
        }
    }
}
