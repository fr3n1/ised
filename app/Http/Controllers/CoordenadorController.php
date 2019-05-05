<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Imports\AlunoImport;
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
           
        return back();
    }

    public function LoadAluno()
    {
        
        
        
    }
}
