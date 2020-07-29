<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class EstadosDePedidosTableSeeder extends Seeder
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
 
        
 
            \DB::table('estado_pedidos')->insert([
                'estado_pedido' => true,
                'descripcion' => $faker->paragraph(),

            ]);

            \DB::table('estado_pedidos')->insert([
                'estado_pedido' => false,
                'descripcion' => $faker->paragraph(),

            ]);
        
    }
}
