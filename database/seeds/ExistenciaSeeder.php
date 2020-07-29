<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class ExistenciaSeeder extends Seeder
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
 
        for($i = 1; $i<=15; $i++){

 
            \DB::table('departamentos')->insert([
                'nombre' => $faker->city(),   
            ]);
        }
    }
}
