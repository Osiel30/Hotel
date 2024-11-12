@extends('layouts.app')

@section('head.content')
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="{{ asset('/css/edit_form.css') }}">
@endsection
 
@section('main.content')
<main class="main-content">
    <h2>Editar Cliente</h2>

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST" class="edit-form">
        @csrf
        @method('PUT')
        <div class="input-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ $cliente->nombre }}" required>
        </div>

        <div class="input-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos" value="{{ $cliente->apellidos }}" required>
        </div>

        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ $cliente->email }}" required>
        </div>

        <div class="input-group">
            <label for="telefono">Teléfono</label>
            <input type="text" id="telefono" name="telefono" value="{{ $cliente->telefono }}" required>
        </div>

        <div class="input-group">
            <label for="direccion">Dirección</label>
            <input type="text" id="direccion" name="direccion" value="{{ $cliente->direccion }}" required>
        </div>

        <div class="input-group">
            <label for="password">Contraseña (dejar vacío si no desea cambiarla)</label>
            <input type="password" id="password" name="password">
        </div>

        <div class="button-group">
            <a href="{{ route('clientes.index') }}" class="cancel-button">Cancelar</a>
            <button class="cancel-button" type="submit">Guardar Cambios</button>
        </div>
    </form>
</main>
@endsection

@section('sidebar.content')
    <ul>
    <li class="sidebar-content"><a href="#">Estadísticas</a></li>
    <li class="sidebar-content"><a href="#">Mapeo</a></li>
    <li class="sidebar-content"><a href="#">Clientes</a></li>
    <li class="sidebar-content"><a href="#">Ocupación</a></li>
    <li class="sidebar-content"><a href="#">Reportes</a></li>
    </ul>
@endsection
