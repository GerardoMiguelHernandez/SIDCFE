<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Carbon\Carbon;
use App\Colaborador_ManiobraModel;
class ExcelController extends Controller
{
    //

    public function evaluaciones_all(){


    	$datos = Colaborador_ManiobraModel::whereBetween('fecha_evaluacion',
    		[Carbon::now()->subMonth(4),Carbon::now()]);
    	dd($datos->count());

    	/*
        $data = $this->getData();
        $date = date('Y-m-d');
        $invoice = "2222";
        $view =  View::make('pdf.all', compact('data', 'date', 'invoice'))->render();

        $dompdf = new Dompdf;
        $dompdf->loadHTML($view);
        return $dompdf->stream('invoice');     	*/
    }


    public function getData(){

    	$data =  [
            'quantity'      => '1' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500'
        ];
        return $data;
    }
}
