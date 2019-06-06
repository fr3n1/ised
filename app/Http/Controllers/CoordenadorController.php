<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Imports\AlunoImport;
use App\Imports\UsersImport;
use App\Imports\HorariosImport;
use App\Imports\perguntaImport;
use Maatwebsite\Excel\Facades\Excel;

class CoordenadorController extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index()
    {
        return view('coordenadorView');
    }
    */
    public function importView()
    {
        return view('import');
    }

    public function perguntaImport()
    {
        Excel::import(new perguntaImport, request()->file('file'));

        return back();
    }

    public function alunoImport()
    {
        ini_set('max_execution_time', 300);
        Excel::import(new UsersImport, request()->file('file'));

        Excel::import(new AlunoImport, request()->file('file'));

        return back();
    }

    public function horarioImport()
    {
        Excel::import(new UsersImport, request()->file('file'));

        Excel::import(new HorariosImport, request()->file('file'));

        return back();
    }
}
