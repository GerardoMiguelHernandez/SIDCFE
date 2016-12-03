<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Colaborador_ManiobraModel;
use Maatwebsite\Excel\Facades\Excel;

class pdfController extends Controller
{
    //

//metodo index obtendra todos los datos del Modelo Colaborador_ManiobraModel
public function index(){


Excel::create('Laravel Excel', function($excel) {
 
            $excel->sheet('Evaluaciones', function($sheet) {
 
                $products = Colaborador_ManiobraModel::all();
 
                $sheet->fromArray($products);
 
            });
        })->export('xls');
 
	




}
   

}
