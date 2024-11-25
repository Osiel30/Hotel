<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\Hoteles;
use App\Models\Rol;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index()
    {
        $personal = Personal::with(['hotel', 'rol'])->get(); 
        return view('Personal.Index_Personal', compact('personal'));
    }

    public function create()
    {
        $hoteles = Hoteles::all();
        $roles = Rol::all();
        return view('Personal.Create_Personal', compact('hoteles', 'roles'));
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'nombre' => 'required|string|max:255',
        'puesto' => 'required|string|max:255',
        'turno' => 'required|string|max:255',
        'fecha_ingreso' => 'required|date',
        'tarea_asignada' => 'required|string|max:255',
        'hora_entrada' => 'required|string|max:5',
        'hora_salida' => 'required|string|max:5',
        'acceso' => 'required|string|max:255',
        'area_asignada' => 'required|string|max:255',
        'estado' => 'required|string|max:255',
        'email' => 'required|email|unique:personal,email',
        'telefono' => 'required|string|max:15',
        'id_hotel' => 'required|exists:hoteles,id', 
        'id_rol' => 'required|in:1,2,3', 
    ]);

    
    $personal = new Personal();
    $personal->nombre = $validated['nombre'];
    $personal->puesto = $validated['puesto'];
    $personal->turno = $validated['turno'];
    $personal->fecha_ingreso = $validated['fecha_ingreso'];
    $personal->tarea_asignada = $validated['tarea_asignada'];
    $personal->hora_entrada = $validated['hora_entrada'];
    $personal->hora_salida = $validated['hora_salida'];
    $personal->acceso = $validated['acceso'];
    $personal->area_asignada = $validated['area_asignada'];
    $personal->estado = $validated['estado'];
    $personal->email = $validated['email'];
    $personal->telefono = $validated['telefono'];
    $personal->id_hotel = $validated['id_hotel']; 
    $personal->id_rol = $validated['id_rol']; 
    $personal->save();

    return redirect()->route('personal.index');
}


    public function edit($id)
    {
        $personal = Personal::with(['hotel', 'rol'])->findOrFail($id);
        $hoteles = Hoteles::all();
        $roles = Rol::all();
        return view('Personal.Edit_Personal', compact('personal', 'hoteles', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'puesto' => 'nullable|string|max:50',
            'turno' => 'required|in:Mañana,Tarde,Noche',
            'fecha_ingreso' => 'required|date',
            'tarea_asignada' => 'nullable|string|max:255',
            'hora_entrada' => 'nullable|date_format:H:i',
            'hora_salida' => 'nullable|date_format:H:i',
            'acceso' => 'required|string|max:50',
            'area_asignada' => 'nullable|string|max:100',
            'estado' => 'required|in:Activo,Inactivo',
            'email' => 'required|email|max:100',
            'telefono' => 'required|string|max:15',
            'id_hotel' => 'required|exists:hoteles,id',
            'id_rol' => 'required|exists:roles,id',
        ]);

        $personal = Personal::findOrFail($id);
        $personal->nombre = $request->nombre;
        $personal->puesto = $request->puesto;
        $personal->turno = $request->turno;
        $personal->fecha_ingreso = $request->fecha_ingreso;
        $personal->tarea_asignada = $request->tarea_asignada;
        $personal->hora_entrada = $request->hora_entrada;
        $personal->hora_salida = $request->hora_salida;
        $personal->acceso = $request->acceso;
        $personal->area_asignada = $request->area_asignada;
        $personal->estado = $request->estado;
        $personal->email = $request->email;
        $personal->telefono = $request->telefono;
        $personal->id_hotel = $request->id_hotel;
        $personal->id_rol = $request->id_rol;
        $personal->save();

        return redirect()->route('personal.index')->with('success', 'Personal actualizado exitosamente');
    }

    public function destroy($id)
    {
        $personal = Personal::findOrFail($id);
        $personal->delete();
        return redirect()->route('personal.index')->with('success', 'Personal eliminado exitosamente');
    }

    public function filtrar(){
        $hoteles = Hoteles::all();
        $personal = Personal::with(['hotel', 'rol'])->get(); 
        return view('Personal.Filtro_pdf_Personal',compact('hoteles','personal'));
    }

    public function generate(Request $request)
    {
        $filterHotel = $request->has('filter_hotel');
        $filterTurno = $request->has('filter_turno');
        $hotelId = $request->input('hotel_id');
        $turnoId = $request->input('turno_id');
            
        $query = Personal::query();

        if ($filterHotel && !empty($hotelId)) {
            $query->where('id_hotel', $hotelId);
        }

        if ($filterTurno && !empty($turnoId)) {
            $query->where('turno', $turnoId);
        }

        // Obtener resultados con relaciones
        $personal = $query->with(['hotel', 'rol'])->get(); // Cambié `turno` a `rol` si está relacionado a roles.
        
        // Generar el PDF
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('Personal_pdf', compact('personal'));
        return $pdf->download('reporte_personal.pdf');
    }

}
