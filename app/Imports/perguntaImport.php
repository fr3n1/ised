<?php

namespace App\Imports;

use App\pergunta;
use Maatwebsite\Excel\Concerns\ToModel;

class perguntaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new pergunta([
            'ordem'        => $row[0],
            'categoria'    => $row[1],
            'Questao'      => $row[2],
            'tipo'         => $row[3],
        ]);
    }
}
