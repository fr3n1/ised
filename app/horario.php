<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
    protected $table = 'horarios';
    protected $fillable = [
            'CAMPUS',       // CAMPUS
            'NOME',          // NOME
            'DISCIPLINA',   // DISCIPLINA
            'TURMA',         // TURMA
            'BLOCO',         // relacionado com aluno, campo pacote
            'Curso',         // Curso
            'prof_ID',         // RA
    ];

    public function aluno(){
        return $this->belongsTo(Aluno::class, 'BLOCO', 'PACOTE');
    }
}
