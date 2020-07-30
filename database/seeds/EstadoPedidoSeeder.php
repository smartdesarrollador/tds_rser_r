<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class EstadoPedidoSeeder extends Seeder
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
 
    
            $faker = Faker::create();
 
            \DB::table('estado_pedido')->insert([
                'nombre' => true,

            ]);

            \DB::table('estado_pedido')->insert([
                'nombre' => false,

            ]);


       
    }
}
