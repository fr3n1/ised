<?php

namespace App\Imports;

use App\horario;
use Maatwebsite\Excel\Concerns\ToModel;

class HorariosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new horario([
            'CAMPUS'     => $row[1],
            'NOME'    => $row[3], 
            'DISCIPLINA'    => $row[9],
            'TURMA'    => $row[10], 
            'BLOCO'    => $row[11],
            'Mnemônio'    => $row[12], 
            'Curso'    => $row[12], 

        ]);
    }
}
