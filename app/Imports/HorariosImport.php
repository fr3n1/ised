<?php

namespace App\Imports;

use App\horario;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class HorariosImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new horario([
            'CAMPUS'    => $row['campus'],
            'NOME'    => $row['nome'], 
            'DISCIPLINA'    => $row['disciplina'],
            'TURMA'    => $row['turma'], 
            'BLOCO'    => $row['bloco'],
            'Curso'    => $row['curso'], 
            'prof_ID'    => $row['ID'], 
        ]);
    }
}
