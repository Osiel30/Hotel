<?php

namespace App\Http\Controllers;
use App\Models\Inventario;
use App\Models\Hoteles;     
use App\Models\Proveedores;  
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index()
{
    $inventarios = Inventario::with('hotel', 'proveedor')->get(); 
    return view('Inventario.Index_Inventario', compact('inventarios'));
}


public function create()
{
   
    $hoteles = Hoteles::all(); 
    $proveedores = Proveedores::all(); 
    return view('Inventario.Create_Inventario', compact('hoteles', 'proveedores'));
}


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'hotel_id' => 'required|exists:hoteles,id',
            'proveedor_id' => 'required|exists:proveedores,id',
            'nombre_producto' => 'required|string|max:100',
            'cantidad' => 'required|integer',
            'descripcion' => 'nullable|string',
        ]);

        Inventario::create($validatedData);
        return redirect()->route('inventario.index')->with('success', 'Producto creado correctamente');
    }

    public function show(Inventario $inventario)
    {
        return view('inventario.show', compact('inventario'));
    }

    public function edit($id)
{
    $inventario = Inventario::findOrFail($id);
    $hoteles = Hoteles::all();
    $proveedores = Proveedores::all();
    return view('Inventario.Edit_Inventario', compact('inventario', 'hoteles', 'proveedores'));
}


    public function update(Request $request, Inventario $inventario)
    {
        $validatedData = $request->validate([
            'hotel_id' => 'required|exists:hoteles,id',
            'proveedor_id' => 'required|exists:proveedores,id',
            'nombre_producto' => 'required|string|max:100',
            'cantidad' => 'required|integer',
            'descripcion' => 'nullable|string',
        ]);

        $inventario->update($validatedData);
        return redirect()->route('inventario.index')->with('success', 'Producto actualizado correctamente');
    }

    public function destroy(Inventario $inventario)
    {
        $inventario->delete();
        return redirect()->route('inventario.index')->with('success', 'Producto eliminado correctamente');
    }
}
