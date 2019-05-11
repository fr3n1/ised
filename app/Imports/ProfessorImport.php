<?php

namespace App\Imports;

use App\Professor;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class ProfessorImport implements ToModel,WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Professor([
            'CAMPUS'     => $row[1],
            'NOME'    => $row[3], 
            'DISCIPLINA'    => $row[9],
            'TURMA'    => $row[10], 
            'BLOCO'    => $row[11],
            'Mnemônio'    => $row[12], 
            'Curso'    => $row[12], 

            //
        ]);
    }

    public function chunkSize(): int
    {
  return 500;





    }
}
