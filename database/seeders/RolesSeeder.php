<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // Limpiar la tabla 
          DB::table('roles')->delete();
        DB::table('roles')->insert([
            [
                'id' => 1,
                'nombre_rol' => 'Cliente',
                'descripcion_rol' => 'Usuario que realiza reservas y gestiona su perfil.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'nombre_rol' => 'Trabajador general',
                'descripcion_rol' => 'Empleado que gestiona tareas operativas del hotel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'nombre_rol' => 'Admin del sistema',
                'descripcion_rol' => 'Administrador con control total sobre el sistema.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
