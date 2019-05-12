<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Imports\AlunoImport;
use App\Imports\ProfessorImport;
use Maatwebsite\Excel\Facades\Excel;

class CoordenadorController extends Controller
{
    public function LoadAluno()
    {
        
        
        
    }


    public function AlunoimportExportView()
    {
       return view('import');
    }

    public function Alunoimport() 
    {
        Excel::import(new AlunoImport,request()->file('file'));
        
        //Excel::import(new UserImport,request()->file('file'));

        return back();
    }


    public function Horarioimportview()
    {
       return view('import');
    }
   public function Horarioimport() 
    {
        Excel::import(new HorarioImport,request()->file('file'));
           
        return back();
    }


    public function Userimportview()
    {
       return view('import');
    }
   public function Userimport() 
    {
        Excel::import(new UserImport,request()->file('file'));
           
        return back();
    }
}
