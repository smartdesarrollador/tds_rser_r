<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZonaRepartoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zona_reparto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('direccion');
            $table->integer('latitud');
            $table->integer('longitud');
            $table->timestamps();

            $table->unsignedBigInteger('distrito_id');

            $table->foreign('distrito_id')->references('id')->on('distrito');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zona_reparto');
    }
}
