@extends('layouts.app')

@section('title', 'Editar Cliente')
 
@section('content')
<main class="main-content">
    <h2>Editar Cliente</h2>

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST" class="edit-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ $cliente->nombre }}" required>
        </div>

        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos" value="{{ $cliente->apellidos }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ $cliente->email }}" required>
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" id="telefono" name="telefono" value="{{ $cliente->telefono }}" required>
        </div>

        <div class="form-group">
            <label for="direccion">Dirección</label>
            <textarea id="direccion" name="direccion" required>{{ $cliente->direccion }}</textarea>
        </div>

        <div class="form-group">
            <label for="password">Contraseña (dejar vacío si no desea cambiarla)</label>
            <input type="password" id="password" name="password">
        </div>

        <div class="form-actions">
            <button type="submit">Guardar Cambios</button>
            <a href="{{ route('clientes.index') }}" class="cancel-button">Cancelar</a>
        </div>
    </form>
</main>
@endsection
