@extends('layouts.app')

@section('head.content')
    <title>Editar Personal</title>
    <link rel="stylesheet" href="{{ asset('/css/edit_form.css') }}">
@endsection

@section('main.content')
<main class="main-content">
    <h2>Editar Personal</h2>

    <form action="{{ route('personal.update', $personal->id_personal) }}" method="POST" class="edit-form">
        @csrf
        @method('PUT')
        
        <div class="input-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ $personal->nombre }}" required>
        </div>

        <div class="input-group">
            <label for="puesto">Puesto</label>
            <input type="text" id="puesto" name="puesto" value="{{ $personal->puesto }}" required>
        </div>

        <div class="input-group">
            <label for="turno">Turno</label>
            <select name="turno" id="turno" required>
                <option value="Mañana" {{ $personal->turno == 'Mañana' ? 'selected' : '' }}>Mañana</option>
                <option value="Tarde" {{ $personal->turno == 'Tarde' ? 'selected' : '' }}>Tarde</option>
                <option value="Noche" {{ $personal->turno == 'Noche' ? 'selected' : '' }}>Noche</option>
            </select>
        </div>

        <div class="input-group">
            <label for="fecha_ingreso">Fecha de Ingreso</label>
            <input type="date" id="fecha_ingreso" name="fecha_ingreso" value="{{ $personal->fecha_ingreso }}" required>
        </div>

        <div class="input-group">
            <label for="tarea_asignada">Tarea Asignada</label>
            <input type="text" id="tarea_asignada" name="tarea_asignada" value="{{ $personal->tarea_asignada }}" required>
        </div>

        <div class="input-group">
            <label for="hora_entrada">Hora de Entrada</label>
            <input type="time" id="hora_entrada" name="hora_entrada" value="{{ $personal->hora_entrada ? date('H:i', strtotime($personal->hora_entrada)) : '' }}" required> </div>

        <div class="input-group">
            <label for="hora_salida">Hora de Salida</label>
            <input type="time" id="hora_salida" name="hora_salida" value="{{ $personal->hora_salida ? date('H:i',strtotime($personal->hora_salida)) :''}}" required> {{--modificacion--}}
        </div>

        <div class="input-group">
            <label for="acceso">Acceso</label>
            <input type="text" id="acceso" name="acceso" value="{{ $personal->acceso }}" required>
        </div>

        <div class="input-group">
            <label for="area_asignada">Área Asignada</label>
            <input type="text" id="area_asignada" name="area_asignada" value="{{ $personal->area_asignada }}" required>
        </div>

        <div class="input-group">
            <label for="estado">Estado</label>
            <select name="estado" id="estado" required>
                <option value="Activo" {{ $personal->estado == 'Activo' ? 'selected' : '' }}>Activo</option>
                <option value="Inactivo" {{ $personal->estado == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>

        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ $personal->email }}" required>
        </div>

        <div class="input-group">
            <label for="telefono">Teléfono</label>
            <input type="text" id="telefono" name="telefono" value="{{ $personal->telefono }}" required>
        </div>

        <div class="input-group">
            <label for="id_hotel">Hotel</label>
            <select name="id_hotel" id="id_hotel" required>
                <option value="1" {{ $personal->id_hotel == 1 ? 'selected' : '' }}>Hotel Sol</option>
                <option value="2" {{ $personal->id_hotel == 2 ? 'selected' : '' }}>Hotel Luna</option>
                <option value="3" {{ $personal->id_hotel == 3 ? 'selected' : '' }}>Hotel Estrella</option>
            </select>
        </div>

        <div class="input-group">
            <label for="id_rol">Rol</label>
            <select name="id_rol" id="id_rol" required>
                <option value="1" {{ $personal->id_rol == 1 ? 'selected' : '' }}>Cliente</option>
                <option value="2" {{ $personal->id_rol == 2 ? 'selected' : '' }}>Trabajador General</option>
                <option value="3" {{ $personal->id_rol == 3 ? 'selected' : '' }}>Admin del Sistema</option>
            </select>
        </div>

        <div class="button-group">
            <a href="{{ route('personal.index') }}" class="cancel-button">Cancelar</a>
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
