<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
	protected $table = 'Professor';
    protected $fillable = [

            'CAMPUS',       // CAMPUS
            'NOME',          // NOME
            'DISCIPLINA',   // DISCIPLINA
            'TURMA',         // TURMA
            'BLOCO',         // relacionado com aluno, campo pacote
            'Mnemônio',     // id co durso
            'Curso',         // Curso

  




    ];
}
