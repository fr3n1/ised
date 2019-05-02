<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Aluno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno', function (Blueprint $table) {
                $table->increments('id'); 
                //$table->unsignedInteger('user_id')->nullable(false);
                $table->integer('status')->default(1)->nullable(false);
                $table->timestamps();
                $table->string('PACOTE');           // liga ao professor em bloco
                $table->string('COD_TIPO_CURSO');   // codigo de tipo de curso
                //$table->string('TIPO_CURSO');       // exemplo: graduação
                $table->string('COD_CURSO');        // codigo do curso em horario o nome é Mnemônio
                $table->string('CURSO');            // nome do curso por extenso
                $table->string('CAMPUS');           // nome do campus por extenso
                $table->string('TURMA');            // numero da turma
                $table->string('DISCIPLINA');       // disciplina do aluno
                $table->string('SERIE');            // acho que é o semestre
                $table->string('NOME');             // nome do aluno 
                $table->string('RA');               // RA
    
                //$table->foreign('user_id', 'fk_user')->references('id')->on('users');
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
