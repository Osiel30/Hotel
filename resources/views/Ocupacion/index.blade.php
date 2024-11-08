@extends('layouts.app')

@section('content')
<style>
   
    .container {
        width: 100%;
        max-width: calc(100vw - 250px);
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
        padding-top: 20px; 
        overflow-y: auto; 
    }

    .hotel-bloque {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 48%;
        border: 2px solid #ddd;
        border-radius: 8px;
        padding: 10px;
        box-sizing: border-box;
    }

    .hotel-bloques {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 20px;
        width: 100%;
    }

    .habitaciones {
        display: grid;
        gap: 5px;
        width: 100%;
        padding: 5px;
        box-sizing: border-box;
        grid-template-columns: repeat(auto-fill, minmax(50px, 1fr));
        grid-auto-rows: minmax(50px, 1fr);
    }

    .habitacion {
        display: flex;
        justify-content: center;
        align-items: center;
        aspect-ratio: 1 / 1;
        border-radius: 4px;
        color: #fff;
        font-weight: bold;
        font-size: 0.8em;
        text-align: center;
    }

    .habitacion.disponible {
        background-color: #28a745;
    }

    .habitacion.ocupada {
        background-color: #dc3545;
    }

    .habitacion.mantenimiento {
        background-color: #ffc107;
    }
</style>

<div class="container">
    <br></br>
    <h1>Mapa de Ocupación de Habitaciones</h1>

    <div class="hotel-bloques">
        @foreach($habitacionesPorHotel as $hotelId => $habitaciones)
            <div class="hotel-bloque">
                <h2>Hotel {{ $hotelId }}</h2>
                
                <div class="habitaciones">
                    @foreach($habitaciones as $habitacion)
                        <div class="habitacion {{ strtolower($habitacion->estado) }}">
                            {{ $habitacion->numero_habitacion }}
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
