<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tabla_Reservaciones extends Migration
{
    public function up()
    {
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->foreignId('hotel_id')->constrained('hoteles');
            $table->foreignId('habitacion_id')->constrained('tipo_habitacion');
            $table->date('fecha_entrada');
            $table->date('fecha_salida');
            $table->decimal('costo_total', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservaciones');
    }
}
