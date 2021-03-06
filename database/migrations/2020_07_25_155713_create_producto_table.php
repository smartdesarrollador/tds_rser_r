<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->decimal('precio');
            $table->string('imagen');
            $table->string('stock')->nullable();
            $table->date('fecha_ingreso');
            $table->string('posicion')->nullable();
            $table->string('acumula_n_punto')->nullable();
            $table->timestamps();
        
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('rubro_id');
            $table->unsignedBigInteger('marca_id');
            $table->unsignedBigInteger('unidad_de_medida_id');
            $table->unsignedBigInteger('medida_id');
            $table->unsignedBigInteger('calificacion_id');
            $table->unsignedBigInteger('proveedor_id');
            $table->unsignedBigInteger('existencia_id');

            $table->foreign('categoria_id')->references('id')->on('categoria');
            $table->foreign('rubro_id')->references('id')->on('rubro');
            $table->foreign('marca_id')->references('id')->on('marca');
            $table->foreign('unidad_de_medida_id')->references('id')->on('unidad_de_medida');
            $table->foreign('medida_id')->references('id')->on('medida');
            $table->foreign('calificacion_id')->references('id')->on('calificacion');
            $table->foreign('proveedor_id')->references('id')->on('proveedor');
            $table->foreign('existencia_id')->references('id')->on('existencia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
