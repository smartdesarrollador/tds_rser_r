<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;


class DetallePedidoSeeder extends Seeder
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
 
        for($i = 1; $i<=150; $i++){

 
            \DB::table('detalle_pedido')->insert([
                'producto_id' => $faker->numberBetween(1,40),
                'pedido_id' => $faker->numberBetween(1,40),   
            ]);
        }
    }
}
