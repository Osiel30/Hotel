<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacion;

class OcupacionController extends Controller
{
    public function index()
    {
        // Obtenemos las habitaciones agrupadas por hotel_id
        $habitacionesPorHotel = Habitacion::select('id', 'hotel_id', 'tipo_habitacion_id', 'numero_habitacion', 'tarifa', 'estado')
            ->orderBy('hotel_id')
            ->get()
            ->groupBy('hotel_id'); // Agrupa por hotel_id

        return view('ocupacion.index', compact('habitacionesPorHotel'));
    }
}
