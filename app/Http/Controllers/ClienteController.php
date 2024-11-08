<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    
    public function create()
    {
        return view('Cliente.Create_Cliente'); 
    }

    public function store(Request $request)
    {
    
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email',
            'telefono' => 'required|string|max:20',
            'direccion' => 'required|string|max:255',
        ]);


        $cliente = Cliente::create([
            'nombre' => $validated['nombre'],
            'email' => $validated['email'],
            'telefono' => $validated['telefono'],
            'direccion' => $validated['direccion'],
        ]);

        return redirect()->route('clientes.index')->with('success', 'Cliente registrado correctamente.');
    }


    public function index()
    {
        $clientes = Cliente::all();  
        return view('Cliente.Index_Cliente', compact('clientes'));  
    }

    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente')); 
    }

    public function edit(Cliente $cliente)
    {
        return view('Cliente.Edit_Cliente', compact('cliente'));  
    }

    public function update(Request $request, Cliente $cliente)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email,' . $cliente->id,
            'telefono' => 'required|string|max:20',
            'direccion' => 'required|string|max:255',
        ]);

        $cliente->update($validated);

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado correctamente.');
    }


    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado correctamente.');
    }
}
