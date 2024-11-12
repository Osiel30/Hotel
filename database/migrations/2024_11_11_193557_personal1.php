<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Personal1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->id('id_personal'); 
            $table->string('nombre', 100); 
            $table->string('puesto', 50)->nullable(); 
            $table->enum('turno', ['Mañana', 'Tarde', 'Noche']); 
            $table->date('fecha_ingreso'); 
            $table->string('tarea_asignada', 255)->nullable(); 
            $table->time('hora_entrada')->nullable(); 
            $table->time('hora_salida')->nullable(); 
            $table->string('acceso', 50); 
            $table->string('area_asignada', 100)->nullable(); 
            $table->enum('estado', ['Activo', 'Inactivo']); 
            $table->string('email', 100); 
            $table->string('telefono', 15); 
            $table->unsignedBigInteger('id_hotel');
            $table->unsignedBigInteger('id_rol'); 
            $table->timestamps(); 
            
            
            $table->foreign('id_hotel')->references('id')->on('hoteles')->onDelete('cascade'); 
            $table->foreign('id_rol')->references('id')->on('roles')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal');
    }
}
