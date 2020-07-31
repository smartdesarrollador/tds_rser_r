<?php

use Illuminate\Database\Seeder;

class UsuarioRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('usuario_rol')->insert([
            'usuario_id' => 1, 
            'rol_id' => 1, 
        ]);

        \DB::table('usuario_rol')->insert([
            'usuario_id' => 2, 
            'rol_id' => 2,   
        ]);

        \DB::table('usuario_rol')->insert([
            'usuario_id' => 3, 
            'rol_id' => 3, 
        ]);
    }
}
