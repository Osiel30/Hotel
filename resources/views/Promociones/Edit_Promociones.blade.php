@extends('layouts.app')

@section('head.content')
    <title>Editar Promoción</title>
    <link rel="stylesheet" href="{{ asset('/css/edit_form.css') }}">
@endsection

@section('main.content')
<main class="main-content">
    <h2>Editar Promoción</h2>

    <form action="{{ route('promociones.update', $promocion->id) }}" method="POST" class="edit-form">
        @csrf
        @method('PUT')

        <div class="input-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ $promocion->nombre }}" required>
        </div>

        <div class="input-group">
            <label for="descripcion">Descripción</label>
            <input type="text" id="descripcion" name="descripcion" value="{{ $promocion->descripcion }}" required>
        </div>

        <div class="input-group">
            <label for="tipo">Tipo</label>
            <select name="tipo" id="tipo" required>
                <option value="Descuento" {{ $promocion->tipo == 'descuento' ? 'selected' : '' }}>Descuento</option>
                <option value="2x1" {{ $promocion->tipo == '2x1' ? 'selected' : '' }}>2x1</option>
                <option value="Cashback" {{ $promocion->tipo == 'cashback' ? 'selected' : '' }}>Cashback</option>
                <option value="Envío gratis" {{ $promocion->tipo == 'envío gratis' ? 'selected' : '' }}>Envío gratis</option>
                <option value="Otro" {{ $promocion->tipo == 'Otro' ? 'selected' : '' }}>Otro</option>
            </select>
        </div>

        <div class="input-group">
            <label for="codigo_promocional">Código Promocional</label>
            <input type="text" id="codigo_promocional" name="codigo_promocional" value="{{ $promocion->codigo_promocional }}" required>
        </div>

        <div class="input-group">
            <label for="descuento">Descuento (opcional)</label>
            <input type="number" id="descuento" name="descuento" value="{{ $promocion->descuento }}" step="0.01">
        </div>

        <div class="input-group">
            <label for="fecha_inicio">Fecha de Inicio</label>
            <input type="date" id="fecha_inicio" name="fecha_inicio" value="{{ $promocion->fecha_inicio }}" required>
        </div>

        <div class="input-group">
            <label for="fecha_fin">Fecha de Fin</label>
            <input type="date" id="fecha_fin" name="fecha_fin" value="{{ $promocion->fecha_fin }}" required>
        </div>

        <div class="input-group">
            <label for="activo">Activo</label>
            <select name="activo" id="activo" required>
                <option value="1" {{ $promocion->activo == 1 ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ $promocion->activo == 0 ? 'selected' : '' }}>No</option>
            </select>
        </div>

        <div class="button-group">
            <a href="{{ route('promociones.index') }}" class="cancel-button">Cancelar</a>
            <button class="cancel-button" type="submit">Guardar Cambios</button>
        </div>
    </form>
</main>
@endsection

@section('sidebar.content')
    <ul>
        <li class="sidebar-content"><a href="#">Promociones Activas</a></li>
        <li class="sidebar-content"><a href="#">Promociones Expiradas</a></li>
    </ul>
@endsection
