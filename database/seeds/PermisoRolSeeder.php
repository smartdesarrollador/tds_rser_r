<?php

use Illuminate\Database\Seeder;

class PermisoRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('permiso_rol')->insert([
            'permiso_id' => 1, 
            'rol_id' => 1, 
        ]);

        \DB::table('permiso_rol')->insert([
            'permiso_id' => 2, 
            'rol_id' => 2,   
        ]);

        \DB::table('permiso_rol')->insert([
            'permiso_id' => 3, 
            'rol_id' => 3, 
        ]);
    }
}
