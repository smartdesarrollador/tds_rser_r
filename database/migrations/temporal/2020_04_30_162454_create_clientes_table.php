<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('telefono');
            $table->string('correo');
            $table->string('direccion');
            $table->string('imagen');
            $table->timestamps();
            $table->unsignedBigInteger('tarjetas_id');
            $table->unsignedBigInteger('distritos_id');

            $table->foreign('tarjetas_id')->references('id')->on('tarjetas');
            $table->foreign('distritos_id')->references('id')->on('distritos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
