<?php

namespace App\Http\Controllers;

use App\Models\Promociones;
use Illuminate\Http\Request;

class PromocionesController extends Controller
{
    
    public function index()
    {
        $promociones = Promociones::all();
        return view('Promociones.Index_Promociones', compact('promociones'));
    }


    public function create()
    {
        return view('Promociones.Create_Promociones');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|in:descuento,2x1,cashback,envío gratis,otro',
            'fecha_inicio' => 'required|date|before:fecha_fin',
            'fecha_fin' => 'required|date|after:fecha_inicio',
        ]);

        Promociones::create($request->all());

        return redirect()->route('promociones.index')->with('success', 'Promoción creada con éxito.');
    }


    public function edit($id)
{
    $promocion = Promociones::findOrFail($id);
    return view('Promociones.Edit_Promociones', compact('promocion'));
}



    public function update(Request $request, Promociones $promocion)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|in:descuento,2x1,cashback,envío gratis,otro',
            'fecha_inicio' => 'required|date|before:fecha_fin',
            'fecha_fin' => 'required|date|after:fecha_inicio',
        ]);

        $promocion->update($request->all());

        return redirect()->route('promociones.index')->with('success', 'Promoción actualizada con éxito.');
    }

    
    public function destroy(Promociones $promocion)
    {
        $promocion->delete();

        return redirect()->route('promociones.index')->with('success', 'Promoción eliminada con éxito.');
    }
}
