@extends('layouts.app')

@section('content')
<main class="main-content">
    <h2>Crear Personal</h2>
    
    <form action="{{ route('personal.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        
        <label>Puesto:</label>
        <input type="text" name="puesto">
        
        <label>Turno:</label>
        <select name="turno" required>
            <option value="Mañana">Mañana</option>
            <option value="Tarde">Tarde</option>
            <option value="Noche">Noche</option>
        </select>
        
        <label>Hotel:</label>
        <select name="id_hotel" required>
            @foreach($hoteles as $hotel)
                <option value="{{ $hotel->id }}">{{ $hotel->nombre }}</option>
            @endforeach
        </select>
        
        <label>Rol:</label>
        <select name="id_rol" required>
            @foreach($roles as $rol)
                <option value="{{ $rol->id_rol }}">{{ $rol->nombre }}</option>
            @endforeach
        </select>
        
        <button type="submit">Guardar</button>
    </form>
</main>
@endsection
