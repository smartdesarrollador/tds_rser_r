<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class GiftCardSeeder extends Seeder
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

 
            \DB::table('gift_card')->insert([
                'valor' => $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 70),
                'tipo_gift_card_id' => $faker->numberBetween(1,15),  
            ]);
        }
    }
}
