<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class ParteProductoSeeder extends Seeder
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

 
            \DB::table('parte_producto')->insert([
                'parte_id' => $faker->numberBetween(1,10),
                'producto_id' => $faker->numberBetween(1,40), 
            ]);
        }
    }
}
