<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tabla_Hoteles extends Migration
{
    public function up()
    {
        Schema::create('hoteles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('direccion', 255);
            $table->string('telefono', 20)->nullable();
            $table->string('ciudad', 100);
            $table->string('estado', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hoteles');
    }
}
