<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('evaluated_id');
            $table->timestamps();
            $table->integer('score');
            $table->string('finished');
            $table->string('id_pergunta');
            //$table->foreign('id_pergunta', 'fk_pergunta')->references('id')->on('pergunta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
