<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{

    public function questionarioGraduação()
    {

        $perguntas = DB::table('perguntas')
                ->orderBy('ordem', 'desc')
                ->get();

        $users = DB::table('aluno')
                    ->join('horario', 'aluno.pacote', '=', 'orders.bloco')
                    ->whereColumn([
                        ['aluno.COD_CURSO', '=', 'horario.Mnemônio'],
                        ['aluno.TURMA', '=', 'horario.TURMA'],
                        ['aluno.DISCIPLINA', '=', 'horario.DISCIPLINA'],
                        ['aluno.COD_TIPO_CURSO', '=', 'GD']
                    ])
                    ->orderBy('name', 'desc')
                    ->get();

        return view('alunoView');
    }


    public function storeResultado(Request $request)
    {

        DB::table('results')->insert(
            array(
                'texto' => $resposta->texto, 
                'comentario' => $resposta->comentario, 
                'fk_pergunta' => $resposta->fk_pergunta,
                'finished' => $resposta->userId
                )
        );
    }

    public function updateResultado(Request $request)
    {

        DB::table('results')
        ->where('id', $resposta->id)
        ->update(array( 'texto' => $resposta->texto, 
                        'comentario' => $resposta->comentario, 
                        'fk_pergunta' => $resposta->fk_pergunta));

    }

    public function finishResultado(Request $request)
    {

        DB::table('results')
        ->where('finished', $resposta->userId)
        ->update(array( 'finished' => null));

    }
}
