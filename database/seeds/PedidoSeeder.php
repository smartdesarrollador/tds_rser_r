<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class PedidoSeeder extends Seeder
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
 
            \DB::table('pedido')->insert([
                'numero_pedido' => "00000".$i,
                'fecha' => $carbon->create(2019, $mes, $dia, $hora, $minuto, $segundo)->locale('es'),
                'total' => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 40),
                'impuesto' => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 40),
                'observaciones' => $faker->paragraph(),
                'delivery' => "delivery",
                'feedback_enviado' => $faker->realText($maxNbChars = 50, $indexSize = 2),
                'feedback_token' => $faker->password(),
                'created_at' => $carbon->create(2019, $mes, $dia, $hora, $minuto, $segundo)->locale('es'),
                'updated_at' => $carbon->create(2019, $mes, $dia, $hora, $minuto, $segundo)->locale('es'),
                'forma_pago_id' => $faker->numberBetween(1,3),
                'cuota_id' => $faker->numberBetween(1,4),
                'cliente_id' => $faker->numberBetween(1,100),
                'usuario_id' => $faker->numberBetween(1,10),
                'moneda_id' => $faker->numberBetween(1,10),
                'empresario_id' => $faker->numberBetween(1,10),
                'promocion_id' => $faker->numberBetween(1,9),
                'estado_pedido_id' => $faker->numberBetween(1,2),
                'descuento_id' => $faker->numberBetween(1,2),
                'horario_id' => $faker->numberBetween(1,1),
                'zona_reparto_id' => $faker->numberBetween(1,10),
                'transporte_id' => $faker->numberBetween(1,10),
                
            ]);
        }
    }
}
