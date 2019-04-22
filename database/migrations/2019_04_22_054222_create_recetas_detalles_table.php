<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecetasDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas_detalles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('recetas_id');
            $table->foreign('recetas_id')->references('id')->on('recetas')->onDelete('cascade');
            $table->unsignedBigInteger('materiaps_id');
            $table->foreign('materiaps_id')->references('id')->on('materiaps')->onDelete('cascade');
            $table->decimal('cant_requerida')->default(0);
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
        Schema::dropIfExists('recetas_detalles');
    }
}
