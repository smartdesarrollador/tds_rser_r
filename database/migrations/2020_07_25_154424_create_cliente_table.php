<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('telefono')->nullable();
            $table->integer('numero_documento')->nullable();
            $table->string('correo');
            $table->string('direccion');
            $table->string('imagen')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('tarjeta_id');
            $table->unsignedBigInteger('documento_identidad_id');

            $table->foreign('tarjeta_id')->references('id')->on('tarjeta');
            $table->foreign('documento_identidad_id')->references('id')->on('documento_identidad');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
