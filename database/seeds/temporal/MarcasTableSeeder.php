<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class MarcasTableSeeder extends Seeder
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
        
 
        for($i = 1; $i<=30; $i++){

 
            \DB::table('marcas')->insert([
                'nombre' => 'Marca'.$i,
                'descripcion' => $faker->paragraph(),
                'imagen' => $faker->imageUrl($width = 640, $height = 480),
                
            ]);
        }
    }
}
