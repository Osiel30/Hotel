<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Modulo_Reservaciones.Dashboard');
});

Route::get('/facturacion', function () {
    return view('Modulo_Facturas.Dashboard');
})->name('facturacion');

Route::get('/listar', function () {
    return view('Modulo_Facturas.Listar');
})->name('listar');

