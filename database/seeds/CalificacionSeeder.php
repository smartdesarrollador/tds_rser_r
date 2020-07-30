<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class CalificacionSeeder extends Seeder
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

        \DB::table('calificacion')->insert([
            'nombre' => "Bueno",

        ]);

        \DB::table('calificacion')->insert([
            'nombre' => "regular",

        ]);
        
    }
}
