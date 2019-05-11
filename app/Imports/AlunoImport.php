<?php

namespace App\Imports;

use App\Aluno;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;
class AlunoImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Aluno([
            'PACOTE'   => $row[0],
            'created_at'   => Carbon::now()->timestamp,
            'updated_at'   => Carbon::now()->timestamp,
            'user_id'  => 2323,
            'COD_TIPO_CURSO'  => $row[2], 
            'COD_CURSO'  => $row[4],
            'CURSO'  => $row[5],
            'CAMPUS'  => $row[7],
            'TURMA'  => $row[9],
            'DISCIPLINA'  => $row[10],
            'SERIE'  => $row[12],
            'NOME'  => $row[13],
            'RA'  => $row[14],
        ]);
    }
}
