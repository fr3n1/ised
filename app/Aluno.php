<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\horario;

class Aluno extends Model
{

    protected $table = 'Aluno';
    
    protected $fillable = [
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


    /**
     * Relationship
     */
    public function horarios(){
        return $this->belongsTo(horario::class, 'PACOTE', 'BLOCO');
    }
}
