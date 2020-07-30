<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo');
            $table->string('direccion');
            $table->integer('telefono')->nullable();
            $table->bigInteger('ruc')->nullable();
            $table->string('imagen')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('notificacion_id');

            $table->foreign('notificacion_id')->references('id')->on('notificacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresario');
    }
}
