<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('id'); // ID
            $table->timestamps();
            $table->string('prof_ID');// PERIODO_LETIVO
            $table->string('CAMPUS');        // CAMPUS
            $table->string('NOME');          // NOME
            $table->string('DISCIPLINA');    // DISCIPLINA
            $table->string('TURMA');         // TURMA
            $table->string('BLOCO')->nullable();         // relacionado com aluno, campo pacote
            $table->string('Curso')->nullable();           // Curso
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
}
