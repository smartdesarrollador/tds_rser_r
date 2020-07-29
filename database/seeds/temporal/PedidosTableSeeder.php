<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class PedidosTableSeeder extends Seeder
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
 
        for($i = 1; $i<=100; $i++){

            $mes = $faker->numberBetween(1,12);
            $dia = $faker->numberBetween(1,7);
            $hora = $faker->numberBetween(1,24);
            $minuto = $faker->numberBetween(1,59);
            $segundo = $faker->numberBetween(1,59);
 
            \DB::table('pedidos')->insert([
                'numero_pedido' => $i,
                'total' => $faker->numberBetween(1,100),
                'impuesto' => $faker->numberBetween(1,100),
                'created_at' => $carbon->create(2019, $mes, $dia, $hora, $minuto, $segundo)->locale('es'),
                'updated_at' => $carbon->create(2019, $mes, $dia, $hora, $minuto, $segundo)->locale('es'),
                'forma_de_pagos_id' => $faker->numberBetween(1,3),
                'cuotas_id' => $faker->numberBetween(1,30),
                'clientes_id' => $faker->numberBetween(1,300),
                'usuarios_id' => $faker->numberBetween(1,30),
                'monedas_id' => $faker->numberBetween(1,30),
                'empresarios_id' => $faker->numberBetween(1,100),
                'repartidores_id' => $faker->numberBetween(1,100),
                'promociones_id' => $faker->numberBetween(1,30),
                'estado_pedidos_id' => $faker->numberBetween(1,2),
                'descuentos_id' => $faker->numberBetween(1,2),
                
            ]);
        }
        
    }
}
