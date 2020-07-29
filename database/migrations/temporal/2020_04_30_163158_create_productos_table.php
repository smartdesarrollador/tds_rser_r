<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->decimal('precio');
            $table->string('imagen');
            $table->timestamps();
            $table->unsignedBigInteger('categorias_id');
            $table->unsignedBigInteger('rubros_id');
            $table->unsignedBigInteger('marcas_id');
            $table->unsignedBigInteger('unidades_de_medidas_id');
            $table->unsignedBigInteger('existencias_id');

            $table->foreign('categorias_id')->references('id')->on('categorias');
            $table->foreign('rubros_id')->references('id')->on('rubros');
            $table->foreign('marcas_id')->references('id')->on('marcas');
            $table->foreign('unidades_de_medidas_id')->references('id')->on('unidades_de_medidas');
            $table->foreign('existencias_id')->references('id')->on('existencias');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
