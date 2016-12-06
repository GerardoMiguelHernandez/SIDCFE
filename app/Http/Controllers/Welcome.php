<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Colaborador_ManiobraModel;
 
use App\ConfiguracionSlider;

class Welcome extends Controller
{
    //



    public function Bienvenido(){

    //$man = Colaborador_ManiobraModel::all();
    //return view('bootstrapTemplate.maniobras.index')->with(['maniobras'=>$man]);

   $sliders = ConfiguracionSlider::orderBy('created_at','DES')->take(4)->get();
   //$primero = $sliders->first();
   //$ultimo = $sliders->last();
  
   //$chunk = $sliders>splice(1, 2);

 return view('bootstrapTemplate.main')->with(['sliders'=>$sliders]);
    }
}
