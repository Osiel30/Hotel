@extends('layouts.app')

@section('head.content')
<link rel="stylesheet" href="{{ asset('/css/anadir.css') }}">
@endsection

@section('main.content')
<div class="main-content">
    <h2>Crear Promoción</h1>
    <form action="{{ route('promociones.store') }}" method="POST" class="formulario">
        @csrf
        <div class="input-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre de la promoción" required>
        </div>
        <div class="input-group">
            <label for="tipo">Tipo</label>
            <select id="tipo" name="tipo" class="form-control" required>
                <option value="descuento">Descuento</option>
                <option value="2x1">2x1</option>
                <option value="cashback">Cashback</option>
                <option value="envío gratis">Envío Gratis</option>
                <option value="otro">Otro</option>
            </select>
        </div>
        <div class="input-group">
            <label for="fecha_inicio">Fecha Inicio</label>
            <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control" required>
        </div>
        <div class="input-group">
            <label for="fecha_fin">Fecha Fin</label>
            <input type="date" id="fecha_fin" name="fecha_fin" class="form-control" required>
        </div>
        <div class="input-group">
            <label for="descripcion">Descripción</label>
            <input  type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Detalles de la promoción"></input>
        </div>
        <div class="button-group">
            <a href="{{ route('promociones.index') }}" class="cancel-button">Cancelar</a>
            <button type="submit" class="cancel-button">Registrar</button>
        </div>
    </form>
</div>
@endsection

@section('sidebar.content')
    <ul>
        <li class="sidebar-content"><a href="#">Promociones Activas</a></li>
        <li class="sidebar-content"><a href="#">Promociones Expiradas</a></li>
    </ul>
@endsection