@extends('layouts.app')

@section('head.content')
    <title>Realizar reporte del inventario</title>
    <link rel="stylesheet" href="{{ asset('/css/reporte.css') }}">
@endsection


@section('main.content') 
<main class="main-content">
    <h2>Filtrar reporte</h2>

    <form  action="{{route('jesus')}}"method="GET" class="edit-form">
        @csrf
        <div class="input-group">
            <label for="hotel_id">Filtrar por Hotel</label>
            <select id="hotel_id" name="hotel_id" disabled>
                <option value="">Todos</option>
                @foreach ($hoteles as $hotel)
                    <option value="{{ $hotel->id }}">
                        {{ $hotel->nombre }}
                    </option>
                @endforeach
            </select>
            <input type="checkbox" id="filter_hotel" name="filter_hotel">
        </div>
    
        <div class="input-group">
            <label for="turno_id">Filtrar por Turno</label>
            <select id="turno_id" name="turno_id" disabled>
                <option value="">Todos</option>
                <option value="Mañana">Mañana</option>
                <option value="Tarde">Tarde</option>
                <option value="Noche">Noche</option>
            </select>
            <input type="checkbox" id="filter_turno" name="filter_turno">
        </div>
    
        <button type="submit" class="cancel-button">Generar PDF</button>
    </form>
    
    <script>
        document.getElementById('filter_hotel').addEventListener('change', function () {
            document.getElementById('hotel_id').disabled = !this.checked;
        });
    
        document.getElementById('filter_turno').addEventListener('change', function () {
            document.getElementById('turno_id').disabled = !this.checked;
        });
    </script>
</main>
@endsection

@section('sidebar.content')
    <div class="sidebar-content">Stock</div>
    <div class="sidebar-content">Ordenes</div>
@endsection