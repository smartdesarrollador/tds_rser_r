<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class FormaPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('forma_pago')->insert([
            'nombre' =>  "Culqi",
        ]);
        

        \DB::table('forma_pago')->insert([
            'nombre' =>   "Delivery",
        ]);

        \DB::table('forma_pago')->insert([
            'nombre' =>  "Transferencia Bancaria",
        ]);
    }
}
