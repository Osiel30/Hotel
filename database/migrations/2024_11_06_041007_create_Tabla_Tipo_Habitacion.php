<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tabla_Tipo_Habitacion extends Migration
{
    public function up()
    {
        Schema::create('tipo_habitacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_tipo', 100);
            $table->text('descripcion')->nullable();
            $table->decimal('tarifa', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_habitacion');
    }
}
