<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAluno extends Migration
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
                //$table->integer('status')->default(1)->nullable(false);
                $table->timestamps();
                $table->string('PACOTE')->nullable();           // liga ao professor em bloco
                $table->string('COD_TIPO_CURSO')->nullable();   // codigo de tipo de curso
                //$table->string('TIPO_CURSO');                 // exemplo: graduação
                $table->string('COD_CURSO')->nullable();        // codigo do curso em horario o nome é Mnemônio
                $table->string('CURSO')->nullable();            // nome do curso por extenso
                $table->string('CAMPUS')->nullable();           // nome do campus por extenso
                $table->string('TURMA')->nullable();            // numero da turma
                $table->string('DISCIPLINA')->nullable();       // disciplina do aluno
                $table->string('SERIE')->nullable();            // acho que é o semestre
                $table->string('NOME');                         // nome do aluno 
                $table->string('RA')->nullable();               // RA
    
                //$table->foreign('user_id', 'fk_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno');
    }
}
