<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class ZonaRepartoSeeder extends Seeder
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
 
            \DB::table('zona_reparto')->insert([
                'direccion' => $faker->address(),
                'latitud' => $faker->latitude($min = -90, $max = 90),
                'longitud' => $faker->longitude($min = -180, $max = 180),
                'created_at' => $carbon->create(2019, $mes, $dia, $hora, $minuto, $segundo)->locale('es'),
                'updated_at' => $carbon->create(2019, $mes, $dia, $hora, $minuto, $segundo)->locale('es'),
                'distrito_id' => $faker->numberBetween(1,24),

            ]);
        }
    }
}
