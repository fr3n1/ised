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
            'NOME'    => $row[3], 
        ]);
    }

    public function chunkSize(): int
    {
        return 500;
    }
}
