<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Aluno;
use App\horario;
use App\pergunta;

class QuestionarioApiController extends Controller
{
    /**
     * Return Questions based on type
     */
    public function getQuestions(Request $request)
    {
        $tipo = $request->get('tipo');
        return response(pergunta::where('tipo', $tipo)->get());
    }

    public function getTeachers(Request $request)
    {
        return horario::whereHas('Aluno', function ($query) {
            $query->where(
                [
                    ['aluno.RA', '=', auth()->user()->getRA()],
                ]
            );
        })->get();
    }

    public function postResponse(Request $request)
    {
        $request->get('resposta');
        DB::table('results')->insert(
            array(
                'score' => $request->get('score'), 
                'user_id' => $request->get('user_id'),
                'finished' => "finalizado", 
                'evaluated_id' => $request->get('evaluated_id'),
                'id_pergunta' => $request->get('id_pergunta'),
                )
        );
        
    }
}
