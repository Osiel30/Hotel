<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Modulo_Reservaciones.Estadisticas');
});

Route::get('/mapeo', function () {
    return view('Modulo_Reservaciones.Mapeo');
});