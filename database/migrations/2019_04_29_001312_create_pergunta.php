<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePergunta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pergunta', function (Blueprint $table) {
            $table->increments('id');       // ID
            $table->integer('ordem');       // ordem da pergunta
            $table->string('categoria');    // categoria da pergunta
            $table->string('tipo');         // classificação da pergunta
            $table->string('Questao');      // pergunta
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
        Schema::dropIfExists('pergunta_grad');
    }
}
