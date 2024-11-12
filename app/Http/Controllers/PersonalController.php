<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\Hoteles;
use App\Models\Rol;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    // Método para mostrar todos los registros en la vista index
    public function index()
    {
        $personal = Personal::with(['hotel', 'rol'])->get(); // Obtener todos los registros con relaciones
        return view('Personal.Index_Personal', compact('personal'));
    }

    // Método para mostrar el formulario de creación
    public function create()
    {
        $hoteles = Hoteles::all(); // Obtener todos los hoteles para el menú desplegable
        $roles = Rol::all();       // Obtener todos los roles para el menú desplegable
        return view('Personal.Create_Personal', compact('hoteles', 'roles'));
    }

    // Método para almacenar un nuevo registro en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'telefono' => 'required|string|max:15',
            'id_hotel' => 'required|exists:hoteles,id',
            'id_rol' => 'required|exists:roles,id_rol',
            // otros campos y sus reglas de validación
        ]);

        Personal::create($request->all());
        return redirect()->route('personal.index')->with('success', 'Personal creado exitosamente');
    }

    // Método para mostrar el formulario de edición
    public function edit($id)
    {
        $personal = Personal::with(['hotel', 'rol'])->findOrFail($id);
        $hoteles = Hoteles::all();
        $roles = Rol::all();
        return view('Personal.Edit_Personal', compact('personal', 'hoteles', 'roles'));
    }

    // Método para actualizar un registro existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'telefono' => 'required|string|max:15',
            'id_hotel' => 'required|exists:hoteles,id',
            'id_rol' => 'required|exists:roles,id_rol',
            // otros campos y sus reglas de validación
        ]);

        $personal = Personal::findOrFail($id);
        $personal->update($request->all());
        return redirect()->route('personal.index')->with('success', 'Personal actualizado exitosamente');
    }

    // Método para eliminar un registro
    public function destroy($id)
    {
        $personal = Personal::findOrFail($id);
        $personal->delete();
        return redirect()->route('personal.index')->with('success', 'Personal eliminado exitosamente');
    }
}

