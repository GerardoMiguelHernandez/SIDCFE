<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MetasRequest;

use App\MetaModel;
use App\Colaborador_ManiobraModel;
//use App\MetaModel;

class MetasControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$metas = MetaModel::all();
        //$maniobras = Colaborador_ManiobraModel::all();


     $metas = MetaModel::orderBy('created_at','DES')->get();
     return view('cfe.admin.config.index')->with(['metas'=>$metas]); 
     

        //return view()with->(['metas'=>$metas, 'maniobras'=>$maniobras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('cfe.admin.config.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
        'mes' => 'required',
        'meta' => 'required',
        'year' => 'required',
        ]);

        //dd($request->all());
        //
        
        $meta = new MetaModel();
        $meta->mes = $request->mes;
        $meta->meta = $request->meta;
        $meta->year = $request->year;
        $meta->save();  
        
        return redirect()->action('MetasControllers@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $enero=Colaborador_ManiobraModel::whereYear('fecha_evaluacion','$anio')->whereMonth('fecha_evaluacion','01')->count();
        $febrero=Colaborador_ManiobraModel::whereYear('fecha_evaluacion','$anio')->whereMonth('fecha_evaluacion','02')->count();
        $marzo=Colaborador_ManiobraModel::whereYear('fecha_evaluacion','$anio')->whereMonth('fecha_evaluacion','03')->count();
        $abril=Colaborador_ManiobraModel::whereYear('fecha_evaluacion','$anio')->whereMonth('fecha_evaluacion','04')->count();
        $mayo=Colaborador_ManiobraModel::whereYear('fecha_evaluacion','$anio')->whereMonth('fecha_evaluacion','05')->count();
        $junio=Colaborador_ManiobraModel::whereYear('fecha_evaluacion','$anio')->whereMonth('fecha_evaluacion','06')->count();
        $julio=Colaborador_ManiobraModel::whereYear('fecha_evaluacion','$anio')->whereMonth('fecha_evaluacion','07')->count();
        $agosto=Colaborador_ManiobraModel::whereYear('fecha_evaluacion','$anio')->whereMonth('fecha_evaluacion','08')->count();
        $septiembre=Colaborador_ManiobraModel::whereYear('fecha_evaluacion','$anio')->whereMonth('fecha_evaluacion','09')->count();
        $octubre=Colaborador_ManiobraModel::whereYear('fecha_evaluacion','$anio')->whereMonth('fecha_evaluacion','10')->count();
        $noviembre=Colaborador_ManiobraModel::whereYear('fecha_evaluacion','$anio')->whereMonth('fecha_evaluacion','11')->count();
        $diciembre=Colaborador_ManiobraModel::whereYear('fecha_evaluacion','$anio')->whereMonth('fecha_evaluacion','12')->count();

//return view()->with->(['enero'=>$enero, 'febrero'=>$febrero, 'marzo'=>$marzo, 'abril'=>$abril, 'mayo'=>$mayo, 'junio'=>$junio, 'julio'=>$julio, 'agosto'=>$agosto, 'septiembre'=>$septiembre, 'octubre'=>$octubre, 'noviembre'=>$noviembre, 'diciembre'=>$diciembre]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
