<?php

use Illuminate\Database\Seeder;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('permiso')->insert([
            'nombre' => 'Crear',
            'slug' => 'crear', 
        ]);

        \DB::table('permiso')->insert([
            'nombre' => 'Editar', 
            'slug' => 'editar', 
        ]);

        \DB::table('permiso')->insert([
            'nombre' => 'Eliminar', 
            'slug' => 'eliminar' 
        ]);
    }
}
