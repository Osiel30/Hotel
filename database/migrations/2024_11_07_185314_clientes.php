<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crear la tabla Clientes
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();  // Crea una columna 'id' AUTO_INCREMENT
            $table->string('nombre', 100);  // Columna 'nombre' con 100 caracteres
            $table->string('direccion', 255)->nullable();  // Columna 'direccion' con 255 caracteres, nullable
            $table->string('telefono', 20)->nullable();  // Columna 'telefono' con 20 caracteres, nullable
            $table->string('email', 100)->unique();  // Columna 'email' con 100 caracteres y debe ser única
            $table->timestamp('fecha_registro')->default(DB::raw('CURRENT_TIMESTAMP'));  // Columna 'fecha_registro' con valor por defecto CURRENT_TIMESTAMP
            $table->timestamps();  // Crea las columnas 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Eliminar la tabla 'clientes' si existe
        Schema::dropIfExists('clientes');
    }
}
