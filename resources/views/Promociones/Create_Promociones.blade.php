@extends('layouts.app')

@section('head.content')
<link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
@endsection

@section('main.content')
<div class="main-content">
    <h1>Crear Promoción</h1>
    <form action="{{ route('promociones.store') }}" method="POST" class="formulario">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre de la promoción" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <select id="tipo" name="tipo" class="form-control" required>
                <option value="descuento">Descuento</option>
                <option value="2x1">2x1</option>
                <option value="cashback">Cashback</option>
                <option value="envío gratis">Envío Gratis</option>
                <option value="otro">Otro</option>
            </select>
        </div>
        <div class="form-group">
            <label for="fecha_inicio">Fecha Inicio</label>
            <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fecha_fin">Fecha Fin</label>
            <input type="date" id="fecha_fin" name="fecha_fin" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" class="form-control" placeholder="Detalles de la promoción"></textarea>
        </div>
        <button type="submit" class="submit-button">Crear Promoción</button>
    </form>
</div>
@endsection
