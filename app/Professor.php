<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
	protected $table = 'Professor';
    protected $fillable = [
            'NOME',          // NOME
    ];
}