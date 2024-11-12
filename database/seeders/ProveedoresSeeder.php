<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // Limpiar la tabla 
          DB::table('proveedores')->delete();
        DB::table('proveedores')->insert([
            [
                'nombre' => 'Distribuidora Global S.A.',
                'direccion' => 'Calle Comercial 123, Ciudad',
                'telefono' => '123-456-7890',
                'tiempo_reabastecimiento' => 7, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Suministros Hotelero Ltd.',
                'direccion' => 'Avenida del Mercado 456, Ciudad',
                'telefono' => '098-765-4321',
                'tiempo_reabastecimiento' => 14,  
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Proveedora del Norte S.A.',
                'direccion' => 'Boulevard Principal 789, Ciudad',
                'telefono' => '111-222-3333',
                'tiempo_reabastecimiento' => 10,  
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
