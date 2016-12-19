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
        'personalAsignado'=>'required',
        'centro_trabajo'=>'required',
        'meta' => 'required',
        'year' => 'required',
        ]);

        //dd($request->all());
        //
        
        $meta = new MetaModel();
        $meta->mes = $request->mes;
        $meta->personalAsignado = $request->personalAsignado;
        $meta->centro_trabajo = $request->centro_trabajo;
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
        
    }

    public function metas(){
        $anio = MetaModel::selectRaw('year')->groupBy('year')->orderBy('year','ASC')->get();

        $area = Colaborador_ManiobraModel::selectRaw('area')->groupBy('area')->orderBy('area','ASC')->get();

        return view('cfe.admin.maniobras_colaboradores.metas2')->with(['anio'=>$anio, 'area'=>$area]);
    }

    public function metasconsulta($area, $year){

        $ar = $area;

        $eneroReal=Colaborador_ManiobraModel::selectRaw('area, count(area) as numero')->whereYear('fecha_evaluacion',$year)->whereMonth('fecha_evaluacion','01')->where('area',$area)->groupBy('area')->first();

        $eneroProgramado=MetaModel::selectRaw('meta')->where('year',$year)->where('mes','ENERO')->where('centro_trabajo',$area)->first();

        $febreroReal=Colaborador_ManiobraModel::selectRaw('area, count(area) as numero')->whereYear('fecha_evaluacion',$year)->whereMonth('fecha_evaluacion','02')->where('area',$area)->groupBy('area')->first();

        $febreroProgramado=MetaModel::selectRaw('meta')->where('year',$year)->where('mes','FEBRERO')->where('centro_trabajo',$area)->first();
        
        $marzoReal=Colaborador_ManiobraModel::selectRaw('area, count(area) as numero')->whereYear('fecha_evaluacion',$year)->whereMonth('fecha_evaluacion','03')->where('area',$area)->groupBy('area')->first();

        $marzoProgramado=MetaModel::selectRaw('meta')->where('year',$year)->where('mes','MARZO')->where('centro_trabajo',$area)->first();

        $abrilReal=Colaborador_ManiobraModel::selectRaw('area, count(area) as numero')->whereYear('fecha_evaluacion',$year)->whereMonth('fecha_evaluacion','04')->where('area',$area)->groupBy('area')->first();

        $abrilProgramado=MetaModel::selectRaw('meta')->where('year',$year)->where('mes','ABRIL')->where('centro_trabajo',$area)->first();        

        $mayoReal=Colaborador_ManiobraModel::selectRaw('area, count(area) as numero')->whereYear('fecha_evaluacion',$year)->whereMonth('fecha_evaluacion','05')->where('area',$area)->groupBy('area')->first();

        $mayoProgramado=MetaModel::selectRaw('meta')->where('year',$year)->where('mes','MAYO')->where('centro_trabajo',$area)->first();

        $junioReal=Colaborador_ManiobraModel::selectRaw('area, count(area) as numero')->whereYear('fecha_evaluacion',$year)->whereMonth('fecha_evaluacion','06')->where('area',$area)->groupBy('area')->first();

        $junioProgramado=MetaModel::selectRaw('meta')->where('year',$year)->where('mes','JUNIO')->where('centro_trabajo',$area)->first();

        $julioReal=Colaborador_ManiobraModel::selectRaw('area, count(area) as numero')->whereYear('fecha_evaluacion',$year)->whereMonth('fecha_evaluacion','07')->where('area',$area)->groupBy('area')->first();

        $julioProgramado=MetaModel::selectRaw('meta')->where('year',$year)->where('mes','JULIO')->where('centro_trabajo',$area)->first();

        $agostoReal=Colaborador_ManiobraModel::selectRaw('area, count(area) as numero')->whereYear('fecha_evaluacion',$year)->whereMonth('fecha_evaluacion','08')->where('area',$area)->groupBy('area')->first();

        $agostoProgramado=MetaModel::selectRaw('meta')->where('year',$year)->where('mes','AGOSTO')->where('centro_trabajo',$area)->first();

        $septiembreReal=Colaborador_ManiobraModel::selectRaw('area, count(area) as numero')->whereYear('fecha_evaluacion',$year)->whereMonth('fecha_evaluacion','09')->where('area',$area)->groupBy('area')->first();

        $septiembreProgramado=MetaModel::selectRaw('meta')->where('year',$year)->where('mes','SEPTIEMBRE')->where('centro_trabajo',$area)->first();

        $octubreReal=Colaborador_ManiobraModel::selectRaw('area, count(area) as numero')->whereYear('fecha_evaluacion',$year)->whereMonth('fecha_evaluacion','10')->where('area',$area)->groupBy('area')->first();

        $octubreProgramado=MetaModel::selectRaw('meta')->where('year',$year)->where('mes','OCTUBRE')->where('centro_trabajo',$area)->first();

        $noviembreReal=Colaborador_ManiobraModel::selectRaw('area, count(area) as numero')->whereYear('fecha_evaluacion',$year)->whereMonth('fecha_evaluacion','11')->where('area',$area)->groupBy('area')->first();

        $noviembreProgramado=MetaModel::selectRaw('meta')->where('year',$year)->where('mes','NOVIEMBRE')->where('centro_trabajo',$area)->first();

        $diciembreReal=Colaborador_ManiobraModel::selectRaw('area, count(area) as numero')->whereYear('fecha_evaluacion',$year)->whereMonth('fecha_evaluacion','12')->where('area',$area)->groupBy('area')->first();

        $diciembreProgramado=MetaModel::selectRaw('meta')->where('year',$year)->where('mes','DICIEMBRE')->where('centro_trabajo',$area)->first();


        if(!$eneroReal || !$eneroProgramado){
            $porcientoenero = 0;
        }
        else{
            $porcientoenero = ($eneroReal->numero * 100)/($eneroProgramado->meta);
        }

        if(!$febreroReal || !$febreroProgramado){
            $porcientofebrero = 0;
        }
        else{
            $porcientofebrero = ($febreroReal->numero * 100)/($febreroProgramado->meta);
        }

        if(!$marzoReal || !$marzoProgramado){
            $porcientomarzo = 0;    
        }
        else{
            $porcientomarzo = ($marzoReal->numero * 100)/($marzoProgramado->meta);
        }

        if(!$abrilReal || !$abrilProgramado){
            $porcientoabril = 0;    
        }
        else{
            $porcientoabril = ($abrilReal->numero * 100)/($abrilProgramado->meta);    
        }
        
        if(!$mayoReal || !$mayoProgramado){
            $porcientomayo = 0;
        }
        else{
            $porcientomayo = ($mayoReal->numero * 100)/($mayoProgramado->meta);    
        }
        
        if(!$junioReal || !$junioProgramado){
            $porcientojunio = 0;    
        }
        else{
            $porcientojunio = ($junioReal->numero * 100)/($junioProgramado->meta);
        }

        if(!$julioReal || !$julioProgramado){
            $porcientojulio = 0;
        }
        else{
            $porcientojulio = ($julioReal->numero * 100)/($julioProgramado->meta);
        }

        if(!$agostoReal || !$agostoProgramado){
            $porcientoagosto = 0;
        }
        else{
            $porcientoagosto = ($agostoReal->numero * 100)/($agostoProgramado->meta);
        }

        if(!$septiembreReal || !$septiembreProgramado){
            $porcientoseptiembre = 0;
        }
        else{
            $porcientoseptiembre = ($septiembreReal->numero * 100)/($septiembreProgramado->meta);
        }

        if(!$octubreReal || !$octubreProgramado){
            $porcientooctubre = 0;
        }
        else{
            $porcientooctubre = ($octubreReal->numero * 100)/($octubreProgramado->meta);
        }
        if(!$noviembreReal || !$noviembreProgramado){
            $porcientonoviembre = 0;
        }
        else{
            $porcientonoviembre = ($noviembreReal->numero * 100)/($noviembreProgramado->meta);
        }

        if(!$diciembreReal || !$diciembreProgramado){
            $porcientodiciembre = 0;
        }
        else{
            $porcientodiciembre = ($diciembreReal->numero * 100)/($diciembreProgramado->meta);
        }

        $totalreal = Colaborador_ManiobraModel::selectRaw('count(area) as numero')->whereYear('fecha_evaluacion',$year)->where('area',$area)->groupBy('area')->first();      

        $totalprogramado = MetaModel::selectRaw('sum(meta) as total')->where('year',$year)->where('centro_trabajo',$area)->first();

        if(!$totalreal || !$totalprogramado || $totalprogramado->total == 0){
            $porcientototal = 0;
        }
        else{
            $porcientototal = ($totalreal->numero * 100)/($totalprogramado->total);
        }


        return view('cfe.admin.maniobras_colaboradores.metas-area')->with(['ar'=>$ar, 'eneroReal'=>$eneroReal, 'eneroProgramado'=>$eneroProgramado, 'febreroReal'=>$febreroReal, 'febreroProgramado'=>$febreroProgramado, 'marzoReal'=>$marzoReal, 'marzoProgramado'=>$marzoProgramado, 'abrilReal'=>$abrilReal, 'abrilProgramado'=>$abrilProgramado, 'mayoReal'=>$mayoReal, 'mayoProgramado'=>$mayoProgramado, 'junioReal'=>$junioReal, 'junioProgramado'=>$junioProgramado, 'julioReal'=>$julioReal, 'julioProgramado'=>$julioProgramado, 'agostoReal'=>$agostoReal, 'agostoProgramado'=>$agostoProgramado, 'septiembreReal'=>$septiembreReal, 'septiembreProgramado'=>$septiembreProgramado, 'octubreReal'=>$octubreReal, 'octubreProgramado'=>$octubreProgramado, 'noviembreReal'=>$noviembreReal, 'noviembreProgramado'=>$noviembreProgramado, 'diciembreReal'=>$diciembreReal, 'diciembreProgramado'=>$diciembreProgramado, 'porcientoenero'=>$porcientoenero, 'porcientofebrero'=>$porcientofebrero, 'porcientomarzo'=>$porcientomarzo, 'porcientoabril'=>$porcientoabril, 'porcientomayo'=>$porcientomayo, 'porcientojunio'=>$porcientojunio, 'porcientojulio'=>$porcientojulio, 'porcientoagosto'=>$porcientoagosto, 'porcientoseptiembre'=>$porcientoseptiembre, 'porcientooctubre'=>$porcientooctubre, 'porcientonoviembre'=>$porcientonoviembre, 'porcientodiciembre'=>$porcientodiciembre, 'totalprogramado'=>$totalprogramado, 'totalreal'=>$totalreal, 'porcientototal'=>$porcientototal]);
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
