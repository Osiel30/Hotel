<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reservaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->id('id_reservacion');
            $table->enum('tipo_reserva', ['individual', 'grupal']);
            $table->foreignId('id_cliente')->constrained('clientes');
            $table->string('nombre_cliente'); 
            $table->foreignId('id_hotel')->constrained('hoteles');
            $table->string('nombre_hotel'); 
            $table->string('direccion_hotel');
            $table->string('telefono_hotel'); 
            $table->foreignId('id_habitacion')->constrained('habitaciones');
            $table->string('tipo_habitacion'); 
            $table->string('numero_habitacion'); 
            $table->text('detalles')->nullable();
            $table->json('insumos')->nullable(); 
            $table->decimal('tarifa', 8, 2);
            $table->foreignId('tipo_pago_id')->constrained('tipos_pago'); 
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservaciones');
    }
}
