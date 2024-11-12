<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    // vaciar la tabla antes de insertar
    DB::table('hoteles')->truncate();

    DB::table('hoteles')->insert([
        [
            'nombre' => 'Hotel Sol',
            'direccion' => 'Calle Principal 123, Ciudad',
            'telefono' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nombre' => 'Hotel Mar',
            'direccion' => 'Avenida del Mar 456, Ciudad',
            'telefono' => '098-765-4321',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nombre' => 'Hotel Luna',
            'direccion' => 'Plaza Central 789, Ciudad',
            'telefono' => '111-222-3333',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
}

}
