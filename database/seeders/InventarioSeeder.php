<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $hoteles = [1, 2, 3];  
        $proveedores = [1, 2, 3];  

        $productos = [
            'Shampoo', 'Jabón', 'Toallas', 'Sábanas', 'Almohadas', 'Café', 
            'Azúcar', 'Té', 'Cepillo de dientes', 'Peines', 'Papel higiénico',
            'Desodorante', 'Crema corporal', 'Champú en sobres', 'Agua embotellada',
            'Gel de baño', 'Galletas', 'Pastillas de menta', 'Botellas de vino', 'Jabón de manos'
        ];

        foreach ($hoteles as $hotel_id) {
            foreach ($productos as $producto) {
                DB::table('inventario')->insert([
                    'hotel_id' => $hotel_id,
                    'proveedor_id' => $proveedores[array_rand($proveedores)], 
                    'nombre_producto' => $producto,
                    'cantidad' => rand(50, 500),  
                    'descripcion' => 'Descripción del producto ' . $producto,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
