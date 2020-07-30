<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class ExistenciaSeeder extends Seeder
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

            \DB::table('existencia')->insert([
                'existencia' => true,

            ]);

            \DB::table('existencia')->insert([
                'existencia' => false,

            ]);
    }
}
