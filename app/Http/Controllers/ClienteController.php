<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Mostrar el formulario de registro de clientes.
     */
    public function create()
    {
        return view('Cliente.Create_Cliente');  // Asegúrate de tener la vista correspondiente
    }

    /**
     * Registrar un nuevo cliente.
     */
    public function store(Request $request)
    {
        // Validación de los datos
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email',
            'telefono' => 'required|string|max:20',
            'direccion' => 'required|string|max:255',
        ]);

        // Crear el cliente en la base de datos
        $cliente = Cliente::create([
            'nombre' => $validated['nombre'],
            'email' => $validated['email'],
            'telefono' => $validated['telefono'],
            'direccion' => $validated['direccion'],
        ]);

        // Redirigir o mostrar un mensaje de éxito
        return redirect()->route('clientes.index')->with('success', 'Cliente registrado correctamente.');
    }

    /**
     * Mostrar una lista de los clientes registrados.
     */
    public function index()
    {
        $clientes = Cliente::all();  // Recupera todos los clientes
        return view('Cliente.Index_Cliente', compact('clientes'));  // Asegúrate de tener la vista correspondiente
    }

    /**
     * Mostrar los detalles de un cliente específico.
     */
    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));  // Asegúrate de tener la vista correspondiente
    }

    /**
     * Mostrar el formulario para editar un cliente.
     */
    public function edit(Cliente $cliente)
    {
        return view('Cliente.Edit_Cliente', compact('cliente'));  // Asegúrate de tener la vista correspondiente
    }

    /**
     * Actualizar los detalles de un cliente.
     */
    public function update(Request $request, Cliente $cliente)
    {
        // Validar los datos
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email,' . $cliente->id,
            'telefono' => 'required|string|max:20',
            'direccion' => 'required|string|max:255',
        ]);

        // Actualizar el cliente en la base de datos
        $cliente->update($validated);

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado correctamente.');
    }

    /**
     * Eliminar un cliente.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado correctamente.');
    }
}
