<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class UnidadDeMedidaSeeder extends Seeder
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
 
        for($i = 1; $i<=4; $i++){
 
            \DB::table('unidad_de_medida')->insert([
                'unidad_de_medida' => $faker->numberBetween(1,100),
                'descripcion' => $faker->paragraph(),

                
            ]);
        }
    }
}
