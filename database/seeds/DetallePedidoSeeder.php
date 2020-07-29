<?php

use Illuminate\Database\Seeder;


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
 
        for($i = 1; $i<=15; $i++){

 
            \DB::table('detalle_pedido')->insert([
                'nombre' => $faker->city(),   
            ]);
        }
    }
}
