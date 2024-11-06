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

Route::get('/facturacion', function () {
    return view('Modulo_Facturas.Dashboard');
})->name('facturacion');

Route::get('/listar', function () {
    return view('Modulo_Facturas.Listar');
})->name('listar');

Route::get('/ordStock', function () {
    return view('Modulo_Reservaciones.ordenesStock');
});

Route::get('/stock', function () {
    return view('Modulo_Reservaciones.stock');
});