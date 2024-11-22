<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Promociones;

class PromocionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Promociones::create([
            'nombre' => 'Descuento de Verano',
            'descripcion' => '20% de descuento en todos los productos.',
            'tipo' => 'descuento',
            'fecha_inicio' => '2024-12-01',
            'fecha_fin' => '2024-12-31',
            'codigo_promocional' => 'VERANO2024',
            'descuento' => 20.00,
            'restricciones' => 'Válido solo en compras mayores a $500.',
            'activo' => true,
        ]);

        Promociones::create([
            'nombre' => 'Envío Gratis en compras mayores a $300',
            'descripcion' => 'Promoción válida para productos seleccionados.',
            'tipo' => 'envío gratis',
            'fecha_inicio' => '2024-11-15',
            'fecha_fin' => '2024-11-30',
            'codigo_promocional' => null,
            'descuento' => null,
            'restricciones' => 'Solo aplica en tiendas participantes.',
            'activo' => true,
        ]);
    }
}
