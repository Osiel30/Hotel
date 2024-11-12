@extends('layouts.app')

@section('head.content')
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="{{ asset('/css/Modulo_Inventario/Create_Inventario.css') }}">
@endsection
 

@section('main.content')
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
                <select class="styled-select" id="hotel_id" name="hotel_id" required>
                    @foreach($hoteles as $hotel)
                        <option value="{{ $hotel->id }}">{{ $hotel->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-group">
                <label for="proveedor_id">Proveedor:</label>
                <select class="styled-select" id="proveedor_id" name="proveedor_id" required>
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
                <input type="text" id="descripcion" name="descripcion" required>
            </div>

            <button type="submit" class="cancel-button">Registrar Producto</button>
        </form>
    </div>
@endsection

@section('sidebar.content')
    <div class="sidebar-content">Stock</div>
    <div class="sidebar-content">Ordenes</div>
@endsection
