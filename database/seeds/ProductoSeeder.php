<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class ProductoSeeder extends Seeder
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
 
        for($i = 1; $i<=40; $i++){

            $mes = $faker->numberBetween(1,12);
            $dia = $faker->numberBetween(1,7);
            $hora = $faker->numberBetween(1,24);
            $minuto = $faker->numberBetween(1,59);
            $segundo = $faker->numberBetween(1,59);
 
            \DB::table('producto')->insert([
                'nombre' => 'Producto'.$i,
                'descripcion' => $faker->paragraph(),
                'precio' => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 70),
                'imagen' => $faker->imageUrl($width = 640, $height = 480),
                'stock' => 'stock'.$i,
                'fecha_ingreso' => $carbon->create(2019, $mes, $dia, $hora, $minuto, $segundo)->locale('es'),
                'posicion' => $faker->numberBetween(1,30),
                'acumula_n_punto' => $faker->numberBetween(1,30),
                'created_at' => $carbon->create(2019, $mes, $dia, $hora, $minuto, $segundo)->locale('es'),
                'updated_at' => $carbon->create(2019, $mes, $dia, $hora, $minuto, $segundo)->locale('es'),
                'categoria_id' => $faker->numberBetween(1,15),
                'rubro_id' => $faker->numberBetween(1,10),
                'marca_id' => $faker->numberBetween(1,10),
                'unidad_de_medida_id' => $faker->numberBetween(1,4),
                'medida_id' => $faker->numberBetween(1,10),
                'calificacion_id' => $faker->numberBetween(1,2),
                'proveedor_id' => $faker->numberBetween(1,10),
                
            ]);
        }
    }
}
