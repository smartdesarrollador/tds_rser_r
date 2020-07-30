<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class GiftPedidoSeeder extends Seeder
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

 
            \DB::table('gift_pedido')->insert([
                'gift_card_id' => $faker->numberBetween(1,4),
                'pedido_id' => $faker->numberBetween(1,40),   
            ]);
        }
    }
}
