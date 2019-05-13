<?php

namespace App\Imports;

use App\Aluno;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Carbon\Carbon;

class AlunoImport implements ToModel, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (!isset($row[13])) {
            return null;
        }

        return new Aluno([
            'PACOTE'   => $row[0],
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

    public function chunkSize(): int
    {
        return 500;
    }
    
}
