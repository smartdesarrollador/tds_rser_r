<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class FormaDePagosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    
            \DB::table('forma_de_pagos')->insert([
                'nombre' =>  "Culqi",
            ]);
            

            \DB::table('forma_de_pagos')->insert([
                'nombre' =>   "Delivery",
            ]);

            \DB::table('forma_de_pagos')->insert([
                'nombre' =>  "Transferencia Bancaria",
            ]);
   
    }
}
