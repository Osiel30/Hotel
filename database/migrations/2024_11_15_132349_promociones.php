<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Promociones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promociones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 255);
            $table->text('descripcion')->nullable();
            $table->enum('tipo', ['descuento', '2x1', 'cashback', 'envío gratis', 'otro']);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('codigo_promocional', 50)->nullable();
            $table->decimal('descuento', 5, 2)->nullable();
            $table->text('restricciones')->nullable();
            $table->boolean('activo')->default(true);
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
        Schema::dropIfExists('promociones');
    }
}
