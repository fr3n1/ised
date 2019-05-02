<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\AlunoImport;
use Maatwebsite\Excel\Facades\Excel;
  
class CoordenadorController extends Controller
{

	public function importExportView()
    {
       return view('import');
    }
   public function import() 
    {
        Excel::import(new AlunoImport,request()->file('file'));
           
        return back();
    }
    //
}
