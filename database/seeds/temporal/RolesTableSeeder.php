<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
 
            \DB::table('roles')->insert([
                'rol' => 'Administrador',  
            ]);

            \DB::table('roles')->insert([
                'rol' => 'Editor',  
            ]);

            \DB::table('roles')->insert([
                'rol' => 'Manager',  
            ]);
       
    }
}
