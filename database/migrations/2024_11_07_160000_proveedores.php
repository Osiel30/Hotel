<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proveedores extends Migration
{
    
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id(); 
            $table->string('nombre'); 
            $table->string('direccion')->nullable(); 
            $table->string('telefono', 20)->nullable(); 
            $table->integer('tiempo_reabastecimiento'); 
            $table->timestamps(); 
        });
    }

    /**
     * Revertir las migraciones.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
