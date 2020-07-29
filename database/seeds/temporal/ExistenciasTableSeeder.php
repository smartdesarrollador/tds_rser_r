<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;


class ExistenciasTableSeeder extends Seeder
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
 
        
 
            \DB::table('existencias')->insert([
                'existencia' => true,

            ]);

            \DB::table('existencias')->insert([
                'existencia' => false,

            ]);
        
    }
}
