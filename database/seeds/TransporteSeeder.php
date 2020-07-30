<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class TransporteSeeder extends Seeder
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

            $mes = $faker->numberBetween(1,12);
            $dia = $faker->numberBetween(1,7);
            $hora = $faker->numberBetween(1,24);
            $minuto = $faker->numberBetween(1,59);
            $segundo = $faker->numberBetween(1,59);
 
            \DB::table('transporte')->insert([
                'nombre' => "transporte".$i,
                'tiempo' => $carbon->create(2019, $mes, $dia, $hora, $minuto, $segundo)->locale('es'), 
                'imagen' => $faker->imageUrl($width = 640, $height = 480),
                'url_seguimiento' => $faker->url(),
                'created_at' => $carbon->create(2019, $mes, $dia, $hora, $minuto, $segundo)->locale('es'),
                'updated_at' => $carbon->create(2019, $mes, $dia, $hora, $minuto, $segundo)->locale('es'),

            ]);
        }
    }
}
