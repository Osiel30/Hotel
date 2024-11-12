@extends('layouts.app')

@section('content')
<main class="main-content">
    <h2>Lista de Personal</h2>
    <a href="{{ route('personal.create') }}" class="new-button">+ Crear Personal</a>
    
    <table class="personal-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Turno</th>
                <th>Fecha Ingreso</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Hotel</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personal as $persona)
            <tr>
                <td>{{ $persona->nombre }}</td>
                <td>{{ $persona->puesto }}</td>
                <td>{{ $persona->turno }}</td>
                <td>{{ $persona->fecha_ingreso }}</td>
                <td>{{ $persona->email }}</td>
                <td>{{ $persona->telefono }}</td>
                <td>{{ $persona->hotel->nombre }}</td>
                <td>{{ $persona->rol->nombre }}</td>
                <td>
                    <a href="{{ route('personal.edit', $persona->id_personal) }}">Editar</a>
                    <form action="{{ route('personal.destroy', $persona->id_personal) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection
