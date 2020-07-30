<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class ProveedorSeeder extends Seeder
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

            $mes = $faker->numberBetween(1,12);
            $dia = $faker->numberBetween(1,7);
            $hora = $faker->numberBetween(1,24);
            $minuto = $faker->numberBetween(1,59);
            $segundo = $faker->numberBetween(1,59);
 
            \DB::table('proveedor')->insert([
                'nombre' => $faker->firstNameMale(),  
                'direccion' => $faker->address(), 
                'telefono' => $faker->numberBetween(1000000,9999999),
                'observaciones' => $faker->paragraph(),
                'created_at' => $carbon->create(2019, $mes, $dia, $hora, $minuto, $segundo)->locale('es'),
                'updated_at' => $carbon->create(2019, $mes, $dia, $hora, $minuto, $segundo)->locale('es'),
            ]);
        }
    }
}
