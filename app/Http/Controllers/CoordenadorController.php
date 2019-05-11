<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ProfessorImport;
use Maatwebsite\Excel\Facades\Excel;

class CoordenadorController extends Controller
{
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
