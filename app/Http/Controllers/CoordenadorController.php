<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Imports\AlunoImport;
use App\Imports\ProfessorImport;
use Maatwebsite\Excel\Facades\Excel;

class CoordenadorController extends Controller
{

    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('import');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new AlunoImport,request()->file('file'));
        
        //Excel::import(new UserImport,request()->file('file'));

        return back();
    }

    public function LoadAluno()
    {
        
        
        
    }
    public function Professorimportview()
    {
       return view('import');
    }
   public function Professorimport() 
    {
        Excel::import(new ProfessorImport,request()->file('file'));
           
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
