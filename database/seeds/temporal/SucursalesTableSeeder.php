<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class SucursalesTableSeeder extends Seeder
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
 
            \DB::table('sucursales')->insert([
                'descripcion' => $faker->paragraph(),
                'direccion' => $faker->address(),  
                'tiendas_id' => $faker->numberBetween(1,30),
            ]);
        }
    }
}
