@extends('layouts.app')

@section('content')
<main class="main-content">
    <h2>Lista de Reservaciones</h2>
    <div class="top-bar">
        <a href="{{ route('reservaciones.create') }}" class="new-button">+ Crear Reservación</a>
    </div>

    <table class="clients-table">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Hotel</th>
                <th>Habitación</th>
                <th>Fecha de Reserva</th>
                <th>Tipo de Reserva</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservaciones as $reservacion)
            <tr>
                <td>{{ $reservacion->nombre_cliente }}</td>
                <td>{{ $reservacion->hotel->nombre }}</td>
                <td>{{ $reservacion->habitacion->numero_habitacion }}</td>
                <td>{{ $reservacion->created_at->format('d/m/Y') }}</td>
                <td>{{ $reservacion->tipo_reserva }}</td>
                <td>
                    <div class="action-buttons">
                        <button class="action-menu-btn">
                            <img src="{{ asset('img/Opciones.png') }}" alt="Opciones" class="opciones-image">
                        </button>
                        <div class="action-dropdown">
                            <a href="{{ route('reservaciones.edit', ['reservacion' => $reservacion->id_reservacion]) }}" class="edit-button">Editar</a>

                            <form action="{{ route('reservaciones.destroy', $reservacion->id_reservacion) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button">Borrar</button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection
