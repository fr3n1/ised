<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return Illuminate\Support\Model|null
     */


    public function model(array $row)
    {

        if (User::find($row['ra'] ?? $row['id'])) {
            return null;
        }

        $id = $row['ra'] ?? $row['id'];

        return new User([
            'id'  => $id,
            'name'  => $row['nome'],
            'email'  => $id."@anhembimorumbi.edu.br",
            'password'  => Hash::make("asdfasdf"),
        ]);
    }
}
