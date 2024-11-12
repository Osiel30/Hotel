<?php

namespace App\Http\Controllers;

use App\Models\Reservaciones; 
use App\Models\Cliente;
use App\Models\Hoteles;
use App\Models\Habitacion;
use App\Models\TipoPago;
use Illuminate\Http\Request;

class ReservacionController extends Controller
{
    public function index()
    {
        $reservaciones = Reservaciones::with('cliente', 'hotel', 'habitacion', 'tipoPago')->get();
        return view('Reservaciones.Index_Reservaciones', compact('reservaciones'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        $hoteles = Hoteles::all();
        $habitaciones = Habitacion::all();
        $tiposPago = TipoPago::all();
        return view('Reservaciones.Create_Reservaciones', compact('clientes', 'hoteles', 'habitaciones', 'tiposPago'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_cliente' => 'required|string|max:255',
            'id_hotel' => 'required|exists:hoteles,id',
            'id_habitacion' => 'required|exists:habitaciones,id',
            'tipo_reserva' => 'required|string|max:50',
            'tipo_pago_id' => 'required|exists:tipo_pago,id',
        ]);
        Reservaciones::create($request->all());

        return redirect()->route('reservaciones.index')->with('success', 'Reservación creada exitosamente.');
    }

    public function edit($id)
    {
        $reservacion = Reservaciones::with('cliente', 'hotel', 'habitacion', 'tipoPago')->findOrFail($id);
        $clientes = Cliente::all();
        $hoteles = Hoteles::all();
        $habitaciones = Habitacion::all();
        $tiposPago = TipoPago::all();
        return view('Reservaciones.Edit_Reservaciones', compact('reservacion', 'clientes', 'hoteles', 'habitaciones', 'tiposPago'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_cliente' => 'required|string|max:255',
            'id_hotel' => 'required|exists:hoteles,id',
            'id_habitacion' => 'required|exists:habitaciones,id',
            'tipo_reserva' => 'required|string|max:50',
            'tipo_pago_id' => 'required|exists:tipo_pago,id',
        ]);

        $reservacion = Reservaciones::findOrFail($id);
        $reservacion->update($request->all());

        return redirect()->route('reservaciones.index')->with('success', 'Reservación actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $reservacion = Reservaciones::findOrFail($id);
        $reservacion->delete();

        return redirect()->route('reservaciones.index')->with('success', 'Reservación eliminada exitosamente.');
    }
}
