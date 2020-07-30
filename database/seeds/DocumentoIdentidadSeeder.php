<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class DocumentoIdentidadSeeder extends Seeder
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

            \DB::table('documento_identidad')->insert([
                'nombre' => "Dni",
                

            ]);

            \DB::table('documento_identidad')->insert([
                'nombre' => "Pasaporte",
                

            ]);
    }
}
