<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $carbon = new \Carbon\Carbon();
 
        for($i = 1; $i<=30; $i++){

            $mes = $faker->numberBetween(1,12);
            $dia = $faker->numberBetween(1,7);
            $hora = $faker->numberBetween(1,24);
            $minuto = $faker->numberBetween(1,59);
            $segundo = $faker->numberBetween(1,59);
 
            \DB::table('productos')->insert([
                'nombre' => 'Producto'.$i,
                'descripcion' => $faker->paragraph(),
                'precio' => $faker->numberBetween(1,1000),
                'imagen' => $faker->imageUrl($width = 640, $height = 480),
                'created_at' => $carbon->create(2019, $mes, $dia, $hora, $minuto, $segundo)->locale('es'),
                'updated_at' => $carbon->create(2019, $mes, $dia, $hora, $minuto, $segundo)->locale('es'),
                'categorias_id' => $faker->numberBetween(1,30),
                'rubros_id' => $faker->numberBetween(1,10),
                'marcas_id' => $faker->numberBetween(1,10),
                'unidades_de_medidas_id' => $faker->numberBetween(1,10),
                'existencias_id' => $faker->numberBetween(1,2),
                
            ]);
        }
        

    }
}
