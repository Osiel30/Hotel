<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OcupacionController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\InventarioController;

Route::prefix('inventario')->name('inventario.')->group(function () {
    Route::get('/', [InventarioController::class, 'index'])->name('index');//Muestra
    Route::get('create', [InventarioController::class, 'create'])->name('create');//Muestra el formulario de creacion
    Route::post('/', [InventarioController::class, 'store'])->name('store');//Almacena el producto
    Route::get('{inventario}', [InventarioController::class, 'show'])->name('show');//Muestra el producto por id
    Route::get('{inventario}/edit', [InventarioController::class, 'edit'])->name('edit');//Muestra el formulario con la informacion para editar
    Route::put('{inventario}', [InventarioController::class, 'update'])->name('update');//Actualiza un registro de producto
    Route::delete('{inventario}', [InventarioController::class, 'destroy'])->name('destroy');//Elimina un producto
});


Route::group(['prefix' => 'clientes'], function () {
    Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');  
    Route::get('/crear', [ClienteController::class, 'create'])->name('clientes.create');  
    Route::post('/', [ClienteController::class, 'store'])->name('clientes.store'); 
    Route::get('/{cliente}', [ClienteController::class, 'show'])->name('clientes.show');  
    Route::get('/{cliente}/editar', [ClienteController::class, 'edit'])->name('clientes.edit');  
    Route::put('/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');  
    Route::delete('/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');  
});

Route::get('/ocupacion', [OcupacionController::class, 'index']);



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