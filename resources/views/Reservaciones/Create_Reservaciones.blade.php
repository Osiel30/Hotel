@extends('layouts.app')

@section('content')
<main class="main-content">
    <h2>Crear Reservación</h2>

    <form action="{{ route('reservaciones.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="cliente">Cliente</label>
            <select name="id_cliente" id="id_cliente" class="form-control" required>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ old('id_cliente') == $cliente->id ? 'selected' : '' }}>{{ $cliente->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="hotel">Hotel</label>
            <select name="id_hotel" id="id_hotel" class="form-control" required>
                @foreach($hoteles as $hotel)
                    <option value="{{ $hotel->id }}" {{ old('id_hotel') == $hotel->id ? 'selected' : '' }}>{{ $hotel->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="habitacion">Habitación</label>
            <select name="id_habitacion" id="id_habitacion" class="form-control" required>
                @foreach($habitaciones as $habitacion)
                    <option value="{{ $habitacion->id }}" {{ old('id_habitacion') == $habitacion->id ? 'selected' : '' }}>{{ $habitacion->numero_habitacion }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="tipo_reserva">Tipo de Reserva</label>
            <select name="tipo_reserva" id="tipo_reserva" class="form-control" required>
                <option value="individual" {{ old('tipo_reserva') == 'individual' ? 'selected' : '' }}>Individual</option>
                <option value="grupal" {{ old('tipo_reserva') == 'grupal' ? 'selected' : '' }}>Grupal</option>
            </select>
        </div>

        <div class="form-group">
            <label for="tipo_pago_id">Método de Pago</label>
            <select name="tipo_pago_id" id="tipo_pago_id" class="form-control" required>
                @foreach($tiposPago as $tipoPago)
                    <option value="{{ $tipoPago->id }}" {{ old('tipo_pago_id') == $tipoPago->id ? 'selected' : '' }}>{{ $tipoPago->tipo_pago }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</main>
@endsection
