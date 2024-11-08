<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ClienteController;

Route::group(['prefix' => 'clientes'], function () {
    
    Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');   // Listar clientes
    Route::get('/crear', [ClienteController::class, 'create'])->name('clientes.create');  // Mostrar formulario para crear un nuevo cliente
    Route::post('/', [ClienteController::class, 'store'])->name('clientes.store');  // Guardar el cliente en la base de datos
    Route::get('/{cliente}', [ClienteController::class, 'show'])->name('clientes.show');  // Mostrar un cliente específico
    Route::get('/{cliente}/editar', [ClienteController::class, 'edit'])->name('clientes.edit');  // Mostrar formulario para editar un cliente
    Route::put('/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');  // Actualizar el cliente en la base de datos
    Route::delete('/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');  // Eliminar un cliente

});

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