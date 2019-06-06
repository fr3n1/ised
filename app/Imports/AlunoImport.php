<?php

namespace App\Imports;

use App\Aluno;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AlunoImport implements ToModel, WithHeadingRow, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Aluno([
            'PACOTE'   => $row['pacote'],
            'COD_TIPO_CURSO'  => $row['cod_tipo_curso'], 
            'COD_CURSO'  => $row['cod_curso'],
            'CURSO'  => $row['curso'],
            'CAMPUS'  => $row['campus'],
            'TURMA'  => $row['turma'],
            'DISCIPLINA'  => $row['disciplina'],
            'SERIE'  => $row['serie'],
            'NOME'  => $row['nome'],
            'RA'  => $row['ra'],
        ]);
    }

    public function chunkSize(): int
    {
        return 500;
    }
    
}
