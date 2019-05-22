<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Imports\AlunoImport;
use App\Imports\HorariosImport;
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

    public function alunoImport() 
    {
        Excel::import(new AlunoImport,request()->file('file'));
        
        return back();
    }

   public function horarioImport() 
    {
        Excel::import(new HorariosImport, request()->file('file'));

        return back();
    }
}
