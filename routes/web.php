<?php

use Illuminate\Support\Facades\Route;


Route::get('/estadisticas', function () {
    return view('Modulo_Reservaciones.Estadisticas');
});

Route::get('/mapeo', function () {
    return view('Modulo_Reservaciones.Mapeo');
});

Route::get('/reservaciones', function () {
    return view('Modulo_Reservaciones.Reservaciones');
});

Route::get('/facturas', function () {
    return view('Modulo_Facturas.Dashboard');
});
