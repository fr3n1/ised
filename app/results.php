<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class results extends Model
{
    //
    protected $fillable = [
        'user_id',       // CAMPUS
        'evaluated_id',          // NOME
        'score',   // DISCIPLINA
        'finished',         // TURMA
        'id_pergunta',    // relacionado com aluno, campo pacote
        
];
}
