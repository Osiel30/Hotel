@extends('layouts.app')

@section('content')
    <div class="main-content"> 
        <h2>Registro de Producto</h2>

        <form action="{{ route('inventario.store') }}" method="POST">
            @csrf

            <div class="input-group">
                <label for="nombre_producto">Producto:</label>
                <input type="text" id="nombre_producto" name="nombre_producto" required>
            </div>

            <div class="input-group">
                <label for="hotel_id">Hotel:</label>
                <select id="hotel_id" name="hotel_id" required>
                    @foreach($hoteles as $hotel)
                        <option value="{{ $hotel->id }}">{{ $hotel->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-group">
                <label for="proveedor_id">Proveedor:</label>
                <select id="proveedor_id" name="proveedor_id" required>
                    @foreach($proveedores as $proveedor)
                        <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" required>
            </div>

            <div class="input-group">
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion"></textarea>
            </div>

            <button type="submit" class="manage-button">Registrar Producto</button>
        </form>
    </div>
@endsection

@section('sidebar')
    <li class="sidebar-item"><a href="#">Estadísticas</a></li>
    <li class="sidebar-item"><a href="#">Mapeo</a></li>
    <li class="sidebar-item"><a href="#">Clientes</a></li>
    <li class="sidebar-item"><a href="#">Ocupación</a></li>
    <li class="sidebar-item"><a href="#">Reportes</a></li>
@endsection
