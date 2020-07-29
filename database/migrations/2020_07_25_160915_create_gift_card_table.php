<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiftCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gift_card', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('valor');
            $table->timestamps();

            $table->unsignedBigInteger('tipo_gift_card_id');

            $table->foreign('tipo_gift_card_id')->references('id')->on('tipo_gift_card');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gift_card');
    }
}
