<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('rol')->insert([
            'nombre' => 'Administrador',  
        ]);

        \DB::table('rol')->insert([
            'nombre' => 'Editor',  
        ]);

        \DB::table('rol')->insert([
            'nombre' => 'Manager',  
        ]);
    }
}
