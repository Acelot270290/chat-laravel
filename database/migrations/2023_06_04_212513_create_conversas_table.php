<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConversasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('enviados_id');
            $table->unsignedBigInteger('recebidas_id');
            $table->foreign('enviados_id')->references('id')->on('users');
            $table->foreign('recebidas_id')->references('id')->on('users');
            $table->timestamp('ultima_mensagem')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conversas');
    }
}
