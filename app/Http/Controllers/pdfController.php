<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Colaborador_ManiobraModel;
use Maatwebsite\Excel\Facades\Excel;

class pdfController extends Controller
{
    //




public function filtrarManiobraArea($man, $ar){

    $this->man =$man;
    $this->ar = $ar;


    Excel::create($this->man.' Area '.$this->ar, function($excel) {
 
            $excel->sheet('Evaluaciones Maniobra Area11', function($sheet) {
 
            $Evaluaciones= Colaborador_ManiobraModel::where('maniobra',$this->man)->where('area',$this->ar)->get();
 
                $sheet->fromArray($Evaluaciones);
 
            });
        })->export('xls');




}



//metodo para retornar en base a un rango de fechas

public function fechas($fecha1,$fecha2){

$this->fecha1 = $fecha2;
$this->fecha2 = $fecha2;


Excel::create('Laravel Excel Rango de '.$this->fecha1.'a '.$this->fecha2, function($excel) {
 
            $excel->sheet('Evaluaciones', function($sheet) {
 
            $Evaluaciones= Colaborador_ManiobraModel::whereBetween('fecha_evaluacion',[$this->fecha1,$this->fecha2])->get();
 
                $sheet->fromArray($Evaluaciones);
 
            });
        })->export('xls');



}


//metodo index obtendra todos los datos del Modelo Colaborador_ManiobraModel
public function index(){


Excel::create('Laravel Excel', function($excel) {
 
            $excel->sheet('Evaluaciones', function($sheet) {
 
                $products = Colaborador_ManiobraModel::all();
 
                $sheet->fromArray($products);
 
            });
        })->export('xls');
 
	




}
//genera excel en base a busqueda por area   
public function area($dato){

	$this->dato = $dato;


Excel::create('Laravel Excel Area', function($excel) {
 
            $excel->sheet('Evaluaciones', function($sheet) {
 
            $Evaluaciones= Colaborador_ManiobraModel::where('area',$this->dato)->get();
 
                $sheet->fromArray($Evaluaciones);
 
            });
        })->export('xls');


//dd($dato);


}


public function maniobra($maniobra){

$this->maniobra = $maniobra;

//$filtered = $collection->except(['price', 'discount']);
Excel::create('Laravel Excel Maniobra', function($excel) {
 
            $excel->sheet('Evaluaciones', function($sheet) {
 
            $Maniobras= Colaborador_ManiobraModel::select('zona', 'area','RPE','nombre','fecha_evaluacion','maniobra','calificacion')->where('maniobra',$this->maniobra)->get();


                $sheet->fromArray($Maniobras);
 
            });
        })->export('xls');

}


//generar archivo excel para datos de cada trabajador

public function colaborador($rpe){
$this->rpe=$rpe;

Excel::create('Laravel Excel Colaborador', function($excel) {
 
            $excel->sheet('Evaluaciones', function($sheet) {
 
            $Maniobras= Colaborador_ManiobraModel::where('rpe',$this->rpe)->get();
 
                $sheet->fromArray($Maniobras);
 
            });
        })->export('xls');
}
}
