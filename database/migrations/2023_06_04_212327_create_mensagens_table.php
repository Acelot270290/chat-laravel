<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensagens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('conversas_id')->constrained();
            $table->unsignedBigInteger('enviados_id');
            $table->foreign('enviados_id')->references('id')->on('users');
            $table->unsignedBigInteger('recebidas_id');
            $table->foreign('recebidas_id')->references('id')->on('users');
            $table->boolean('mensagens_lidas')->default(0)->nullable();
            $table->text('corpo_mensagem')->nullable();
            $table->string('tipo')->nullable();
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
        Schema::dropIfExists('mensagens');
    }
}
