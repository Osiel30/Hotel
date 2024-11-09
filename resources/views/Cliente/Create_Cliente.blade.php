@extends('layouts.app')

@section('head.content')
    <title>Crear Cliente</title>
    <link rel="stylesheet" href="{{ asset('/css/Cliente/Create_Cliente.css') }}">
@endsection

@section('main.content')
    <div class="main-content">
        <h2>Registro de Cliente</h2>
        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf
            <div class="input-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <div class="input-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" required>
            </div>

            <div class="input-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required>
            </div>

            <div class="input-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-group">
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" required>
            </div>

            <div class="input-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" class="manage-button">Registrar</button>
        </form>
    </div>
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