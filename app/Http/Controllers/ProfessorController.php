<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function questionarioGraduação()
    {
        $perguntas = DB::table('perguntasGrad')
                ->orderBy('ordem', 'desc')
                ->get();

        $users = DB::table('aluno')
                    ->join('horario', 'aluno.pacote', '=', 'orders.bloco')
                    ->whereColumn([
                        ['aluno.COD_CURSO', '=', 'horario.Mnemônio'],
                        ['aluno.TURMA', '=', 'horario.TURMA'],
                        ['aluno.DISCIPLINA', '=', 'horario.DISCIPLINA'],
                        ['aluno.COD_TIPO_CURSO', '=', 'GT']
                    ])
                    ->orderBy('DISCIPLINA', 'desc')
                    ->get();

        return view('alunoView');
    }
}
