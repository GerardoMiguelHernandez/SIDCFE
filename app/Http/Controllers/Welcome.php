<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Colaborador_ManiobraModel;

class Welcome extends Controller
{
    //



    public function Bienvenido(){

    //$man = Colaborador_ManiobraModel::all();
    //return view('bootstrapTemplate.maniobras.index')->with(['maniobras'=>$man]);
 return view('bootstrapTemplate.main');
    }
}
