<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('telefono');
            $table->bigInteger('ruc');
            $table->string('correo');
            $table->string('direccion');
            $table->string('imagen');
            $table->timestamps();
            $table->unsignedBigInteger('notificaciones_id');
            $table->unsignedBigInteger('tiendas_id');
            
            $table->foreign('notificaciones_id')->references('id')->on('notificaciones');
            $table->foreign('tiendas_id')->references('id')->on('tiendas');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresarios');
    }
}
