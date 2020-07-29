<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('numero_pedido');
            $table->date('fecha');
            $table->integer('total');
            $table->integer('impuesto');
            $table->text('observaciones');
            $table->integer('delivery');
            $table->string('feedback_enviado');
            $table->string('feedback_token');
            $table->timestamps();
       
            $table->unsignedBigInteger('forma_pago_id');
            $table->unsignedBigInteger('cuota_id');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('moneda_id');
            $table->unsignedBigInteger('empresario_id');
            $table->unsignedBigInteger('promocion_id');
            $table->unsignedBigInteger('estado_pedido_id');
            $table->unsignedBigInteger('descuento_id');
            $table->unsignedBigInteger('horario_id');
            $table->unsignedBigInteger('zona_reparto_id');
            $table->unsignedBigInteger('transporte_id');
           

            $table->foreign('forma_pago_id')->references('id')->on('forma_pago');
            $table->foreign('cuota_id')->references('id')->on('cuota');
            $table->foreign('cliente_id')->references('id')->on('cliente');
            $table->foreign('usuario_id')->references('id')->on('usuario');
            $table->foreign('moneda_id')->references('id')->on('moneda');
            $table->foreign('empresario_id')->references('id')->on('empresario');
            $table->foreign('promocion_id')->references('id')->on('promocion');
            $table->foreign('estado_pedido_id')->references('id')->on('estado_pedido');
            $table->foreign('descuento_id')->references('id')->on('descuento');
            $table->foreign('horario_id')->references('id')->on('horario');
            $table->foreign('zona_reparto_id')->references('id')->on('zona_reparto');
            $table->foreign('transporte_id')->references('id')->on('transporte');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido');
    }
}
