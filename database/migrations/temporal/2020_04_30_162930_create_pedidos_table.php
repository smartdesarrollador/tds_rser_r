<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('numero_pedido');
            $table->decimal('total');
            $table->decimal('impuesto');
            $table->timestamps();
            $table->unsignedBigInteger('forma_de_pagos_id');
            $table->unsignedBigInteger('cuotas_id');
            $table->unsignedBigInteger('clientes_id');
            $table->unsignedBigInteger('usuarios_id');
            $table->unsignedBigInteger('monedas_id');
            $table->unsignedBigInteger('empresarios_id');
            $table->unsignedBigInteger('repartidores_id');
            $table->unsignedBigInteger('promociones_id');
            $table->unsignedBigInteger('estado_pedidos_id');
            $table->unsignedBigInteger('descuentos_id');

            $table->foreign('forma_de_pagos_id')->references('id')->on('forma_de_pagos');
            $table->foreign('cuotas_id')->references('id')->on('cuotas');
            $table->foreign('clientes_id')->references('id')->on('clientes');
            $table->foreign('usuarios_id')->references('id')->on('usuarios');
            $table->foreign('monedas_id')->references('id')->on('monedas');
            $table->foreign('empresarios_id')->references('id')->on('empresarios');
            $table->foreign('repartidores_id')->references('id')->on('repartidores');
            $table->foreign('promociones_id')->references('id')->on('promociones');
            $table->foreign('estado_pedidos_id')->references('id')->on('estado_pedidos');
            $table->foreign('descuentos_id')->references('id')->on('descuentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
