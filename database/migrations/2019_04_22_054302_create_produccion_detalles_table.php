<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduccionDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produccion_detalles', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('prod_id');
            $table->foreign('prod_id')->references('id')->on('produccions')->onDelete('cascade');
            
            $table->unsignedBigInteger('recetas_det_id');
            $table->foreign('recetas_det_id')->references('id')->on('recetas_detalles')->onDelete('cascade');
            
            $table->unsignedBigInteger('entradas_id');
            $table->foreign('entradas_id')->references('id')->on('entradas')->onDelete('cascade');
            
            $table->decimal('cantidad_salida')->default(0);
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
        Schema::dropIfExists('produccion_detalles');
    }
}
