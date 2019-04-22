<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiaps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('medidas_id');
            $table->foreign('medidas_id')->references('id')->on('medidas')->onDelete('cascade');
            $table->string('nombre_materia')->nullable();
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
        Schema::dropIfExists('materiaps');
    }
}
