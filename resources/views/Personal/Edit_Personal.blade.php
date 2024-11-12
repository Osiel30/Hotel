@extends('layouts.app')

@section('content')
<main class="main-content">
    <h2>Editar Personal</h2>
    
    <form action="{{ route('personal.update', $personal->id_personal) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $personal->nombre }}" required>
        
        <label>Puesto:</label>
        <input type="text" name="puesto" value="{{ $personal->puesto }}">
        
        <label>Turno:</label>
        <select name="turno" required>
            <option value="Mañana" {{ $personal->turno == 'Mañana' ? 'selected' : '' }}>Mañana</option>
            <option value="Tarde" {{ $personal->turno == 'Tarde' ? 'selected' : '' }}>Tarde</option>
            <option value="Noche" {{ $personal->turno == 'Noche' ? 'selected' : '' }}>Noche</option>
        </select>
        
        <label>Hotel:</label>
        <select name="id_hotel" required>
            @foreach($hoteles as $hotel)
                <option value="{{ $hotel->id }}" {{ $personal->id_hotel == $hotel->id ? 'selected' : '' }}>{{ $hotel->nombre }}</option>
            @endforeach
        </select>
        
        <label>Rol:</label>
        <select name="id_rol" required>
            @foreach($roles as $rol)
                <option value="{{ $rol->id_rol }}" {{ $personal->id_rol == $rol->id_rol ? 'selected' : '' }}>{{ $rol->nombre }}</option>
            @endforeach
        </select>
        
        <button type="submit">Guardar</button>
    </form>
</main>
@endsection
