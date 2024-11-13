@extends('layouts.app')

@section('head.content')
    <title>Registrar Personal</title>
    <link rel="stylesheet" href="{{ asset('/css/Personal/Create_Personal.css') }}">
@endsection

@section('main.content')
    <div class="main-content">
        <h2>Registro de Personal</h2>
        <form action="{{ route('personal.store') }}" method="POST">
            @csrf
            <div class="input-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <div class="input-group">
                <label for="puesto">Puesto:</label>
                <input type="text" id="puesto" name="puesto" required>
            </div>

            <div class="input-group">
                <label for="turno">Turno:</label>
                <select id="turno" name="turno" required>
                    <option value="Mañana">Mañana</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noche">Noche</option>
                </select>
            </div>

            <div class="input-group">
                <label for="fecha_ingreso">Fecha de Ingreso:</label>
                <input type="date" id="fecha_ingreso" name="fecha_ingreso" required>
            </div>

            <div class="input-group">
                <label for="tarea_asignada">Tarea Asignada:</label>
                <input type="text" id="tarea_asignada" name="tarea_asignada" required>
            </div>

            <div class="input-group">
                <label for="hora_entrada">Hora de Entrada:</label>
                <input type="time" id="hora_entrada" name="hora_entrada" required>
            </div>

            <div class="input-group">
                <label for="hora_salida">Hora de Salida:</label>
                <input type="time" id="hora_salida" name="hora_salida" required>
            </div>

            <div class="input-group">
                <label for="acceso">Acceso:</label>
                <input type="text" id="acceso" name="acceso" required>
            </div>

            <div class="input-group">
                <label for="area_asignada">Área Asignada:</label>
                <input type="text" id="area_asignada" name="area_asignada" required>
            </div>

            <div class="input-group">
                <label for="estado">Estado:</label>
                <select id="estado" name="estado" required>
                    <option value="Activo" selected>Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
            </div>

            <div class="input-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required>
            </div>

            <div class="input-group">
                <label for="id_hotel">Hotel:</label>
                <select id="id_hotel" name="id_hotel" required>
                    <option value="1">Hotel Sol</option>
                    <option value="2">Hotel Luna</option>
                    <option value="3">Hotel Estrella</option>
                </select>
            </div>

            <div class="input-group">
                <label for="id_rol">Rol:</label>
                <select id="id_rol" name="id_rol" required>
                    <option value="1">Cliente</option>
                    <option value="2">Trabajador general</option>
                    <option value="3">Admin del sistema</option>
                </select>
            </div>

            <button type="submit" class="manage-button">Registrar</button>
        </form>
    </div>
@endsection

@section('sidebar.content')
    <ul>
        <li class="sidebar-content"><a href="#">Estadísticas</a></li>
        <li class="sidebar-content"><a href="#">Mapeo</a></li>
        <li class="sidebar-content"><a href="#">Personal</a></li>
        <li class="sidebar-content"><a href="#">Ocupación</a></li>
        <li class="sidebar-content"><a href="#">Reportes</a></li>
    </ul>
@endsection
