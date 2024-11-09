@extends('layouts.app')

@section('title', 'Editar Producto')

@section('content')
<main class="main-content">
    <h2>Editar Producto</h2>

    <form action="{{ route('inventario.update', $inventario->id_producto) }}" method="POST" class="edit-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre_producto">Producto</label>
            <input type="text" id="nombre_producto" name="nombre_producto" value="{{ $inventario->nombre_producto }}" required>
        </div>

        <div class="form-group">
            <label for="hotel_id">Hotel</label>
            <select id="hotel_id" name="hotel_id" required>
                @foreach($hoteles as $hotel)
                    <option value="{{ $hotel->id }}" {{ $hotel->id == $inventario->hotel_id ? 'selected' : '' }}>
                        {{ $hotel->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="proveedor_id">Proveedor</label>
            <select id="proveedor_id" name="proveedor_id" required>
                @foreach($proveedores as $proveedor)
                    <option value="{{ $proveedor->id }}" {{ $proveedor->id == $inventario->proveedor_id ? 'selected' : '' }}>
                        {{ $proveedor->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" id="cantidad" name="cantidad" value="{{ $inventario->cantidad }}" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion">{{ $inventario->descripcion }}</textarea>
        </div>

        <div class="form-actions">
            <button type="submit">Guardar Cambios</button>
            <a href="{{ route('inventario.index') }}" class="cancel-button">Cancelar</a>
        </div>
    </form>
</main>
@endsection
