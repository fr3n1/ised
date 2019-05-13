<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{

    protected $table = 'Aluno';
    
    protected $fillable = [
    	'user_id',
        'PACOTE',
        'COD_TIPO_CURSO',
        'COD_CURSO',
        'CURSO',
        'CAMPUS',
        'TURMA',
        'DISCIPLINA',
        'SERIE',
        'NOME',
        'RA'
    ];
}
