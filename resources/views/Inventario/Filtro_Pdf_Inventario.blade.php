@extends('layouts.app')

@section('head.content')
    <title>Realizar reporte del inventario</title>
    <link rel="stylesheet" href="{{ asset('/css/edit_form.css') }}">
@endsection


@section('main.content') 
<main class="main-content">
    <h2>Filtrar reporte</h2>

    <form action="{{ route('generar') }}" method="GET" class="edit-form">
        @csrf
        <div class="input-group">
            <input type="checkbox" id="filter_hotel" name="filter_hotel">
            <label for="hotel_id">Filtrar por Hotel</label>
            <select id="hotel_id" name="hotel_id" disabled>
                <option value="">Todos</option>
                @foreach ($hoteles as $hotel)
                    <option value="{{ $hotel->id }}">
                        {{ $hotel->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
    
        <div class="input-group">
            <input type="checkbox" id="filter_proveedor" name="filter_proveedor">
            <label for="proveedor_id">Filtrar por Proveedor</label>
            <select id="proveedor_id" name="proveedor_id" disabled>
                <option value="">Todos</option>
                @foreach ($proveedores as $proveedor)
                    <option value="{{ $proveedor->id }}">
                        {{ $proveedor->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
    
        <button type="submit">Generar PDF</button>
    </form>
    
    <script>
        // Habilitar/deshabilitar select dependiendo del checkbox
        document.getElementById('filter_hotel').addEventListener('change', function () {
            document.getElementById('hotel_id').disabled = !this.checked;
        });
    
        document.getElementById('filter_proveedor').addEventListener('change', function () {
            document.getElementById('proveedor_id').disabled = !this.checked;
        });
    </script>
</main>
@endsection