<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MetasRequest;

use App\MetaModel;
use App\Colaborador_ManiobraModel;
//use App\MetaModel;
use Datatables;

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




if($request->ajax()){
           $meses = $request->meses;
           $metas = $request->metas;
           $personal = $request->personal;
           $year = $request->year;
           $centro = $request->centro;


$max = sizeof($metas);


for($i = 0; $i < $max;$i++)
{
//$datos[$i] = $metas[$i];
/*
$checar = MetaModel::where('mes',$mes[$i])->where('year',$year)->get();

if($checar==null){*/

$meta = new MetaModel();
$meta->mes = $meses[$i];
$meta->personalAsignado=$personal[$i];
$meta->centro_trabajo=$centro;
$meta->meta=$metas[$i];
$meta->year=$year;
$meta->save();
//return response()->json($meta);
/*}

else{


}*/

}

           

return response()->json($meta);
         

        } 
/*
        $this->validate($request, [
        'mes' => 'required',
        'personalAsignado'=>'required',
        'centro_trabajo'=>'required',
        'meta' => 'required',
        'year' => 'required',
        ]);

       
        
        $meta = new MetaModel();
        $meta->mes = $request->mes;
        $meta->personalAsignado = $request->personalAsignado;
        $meta->centro_trabajo = $request->centro_trabajo;
        $meta->meta = $request->meta;
        $meta->year = $request->year;
        $meta->save();  
        
        return redirect()->action('MetasControllers@index');

        */




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $meta = MetaModel::find($id);

     return response()->json($meta);

        
    }

    public function metas(){
        $anio = MetaModel::selectRaw('year')->groupBy('year')->orderBy('year','ASC')->get();

        $area = Colaborador_ManiobraModel::selectRaw('area')->groupBy('area')->orderBy('area','ASC')->get();

        return view('cfe.admin.maniobras_colaboradores.metas2')->with(['anio'=>$anio, 'area'=>$area]);
    }

    public function metasconsulta2($area, $year){

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

   
    public function update(Request $request, $id)
    {
       

     if($request->ajax()){
       

       $meta = MetaModel::find($id);

       $meta->meta= $request->meta;
       $meta->mes=$request->mes;
       $meta->personalAsignado=$request->personalAsignado;
       $meta->centro_trabajo=$request->centro_trabajo;
       $meta->year=$request->year;
       $meta->save();

         return response()->json($request->all());

        }

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

    public function mandarDatos($id){



    }

    public function metasconsulta($year){

        $areas = Colaborador_ManiobraModel::select('area')->distinct()->get();
        $ye = $year;
        $meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');

        for($i = 1; $i <= 12; $i++){
            //Reales
            $metaEtla[] = Colaborador_ManiobraModel::where('area','AREA ETLA')->whereYear('fecha_evaluacion',$year)->whereMonth('fecha_evaluacion',$i)->count();
            $metaIxtlan[] = Colaborador_ManiobraModel::where('area','AREA IXTLAN')->whereYear('fecha_evaluacion',$year)->whereMonth('fecha_evaluacion',$i)->count();
            $metaMiahuatlan[] = Colaborador_ManiobraModel::where('area','AREA MIAHUATLAN')->whereYear('fecha_evaluacion',$year)->whereMonth('fecha_evaluacion',$i)->count();
            $metaOaxaca[] = Colaborador_ManiobraModel::where('area','AREA OAXACA')->whereYear('fecha_evaluacion',$year)->whereMonth('fecha_evaluacion',$i)->count();
            $metaOcotlan[] = Colaborador_ManiobraModel::where('area','AREA OCOTLAN')->whereYear('fecha_evaluacion',$year)->whereMonth('fecha_evaluacion',$i)->count();
            $metaTlacolula[] = Colaborador_ManiobraModel::where('area','AREA TLACOLULA')->whereYear('fecha_evaluacion',$year)->whereMonth('fecha_evaluacion',$i)->count();
            $metaZimatlan[] = Colaborador_ManiobraModel::where('area','AREA ZIMATLAN')->whereYear('fecha_evaluacion',$year)->whereMonth('fecha_evaluacion',$i)->count();
            $metaTemporales[] = Colaborador_ManiobraModel::where('area','Temporales Oax')->whereYear('fecha_evaluacion',$year)->whereMonth('fecha_evaluacion',$i)->count();
        }

        //Programados
        
        for($i = 0; $i < 12; $i++){
            $var =  MetaModel::selectraw('meta')->where('centro_trabajo','AREA ETLA')->where('year',$year)->where('mes',$meses[$i])->first();
            if(!$var){
                $metaEt[] = 0;
            }
            else{
                $metaEt[] = $var->meta;
            }
            
            $var = MetaModel::selectraw('meta')->where('centro_trabajo','AREA IXTLAN')->where('year',$year)->where('mes',$meses[$i])->first();
            if(!$var){
                $metaIx[] = 0;
            }
            else{
                $metaIx[] = $var->meta;
            }

            $var = MetaModel::selectraw('meta')->where('centro_trabajo','AREA MIAHUATLAN')->where('year',$year)->where('mes',$meses[$i])->first();
            if(!$var){
                $metaMia[] = 0;
            }
            else{
                $metaMia[] = $var->meta;
            }
            $var = MetaModel::selectraw('meta')->where('centro_trabajo','AREA OAXACA')->where('year',$year)->where('mes',$meses[$i])->first();
            if(!$var){
                $metaOax[] = 0;
            }
            else{
                $metaOax[] = $var->meta;
            }
            $var = MetaModel::selectraw('meta')->where('centro_trabajo','AREA OCOTLAN')->where('year',$year)->where('mes',$meses[$i])->first();
            if(!$var){
                $metaOco[] = 0;
            }
            else{
                $metaOco[] = $var->meta;
            }
            $var = MetaModel::selectraw('meta')->where('centro_trabajo','AREA TLACOLULA')->where('year',$year)->where('mes',$meses[$i])->first();
            if(!$var){
                $metaTlac[] = 0;
            }
            else{
                $metaTlac[] = $var->meta;
            }
            $var = MetaModel::selectraw('meta')->where('centro_trabajo','AREA ZIMATLAN')->where('year',$year)->where('mes',$meses[$i])->first();
            if(!$var){
                $metaZim[] = 0;
            }
            else{
                $metaZim[] = $var->meta;
            }
            $var = MetaModel::selectraw('meta')->where('centro_trabajo','Temporales Oax')->where('year',$year)->where('mes',$meses[$i])->first();
            if(!$var){
                $metaTem[] = 0;
            }
            else{
                $metaTem[] = $var->meta;
            }
        }

        //Total Real
        $sumEtla = Colaborador_ManiobraModel::selectraw('count(area) AS total')->where('area','AREA ETLA')->whereYear('fecha_evaluacion',$year)->first();
        $sumIxtlan = Colaborador_ManiobraModel::selectraw('count(area) AS total')->where('area','AREA IXTLAN')->whereYear('fecha_evaluacion',$year)->first();
        $sumMiahuatlan = Colaborador_ManiobraModel::selectraw('count(area) AS total')->where('area','AREA MIAHUATLAN')->whereYear('fecha_evaluacion',$year)->first();
        $sumOaxaca = Colaborador_ManiobraModel::selectraw('count(area) AS total')->where('area','AREA OAXACA')->whereYear('fecha_evaluacion',$year)->first();
        $sumOcotlan = Colaborador_ManiobraModel::selectraw('count(area) AS total')->where('area','AREA OCOTLAN')->whereYear('fecha_evaluacion',$year)->first();
        $sumTlacolula = Colaborador_ManiobraModel::selectraw('count(area) AS total')->where('area','AREA TLACOLULA')->whereYear('fecha_evaluacion',$year)->first();
        $sumZimatlan = Colaborador_ManiobraModel::selectraw('count(area) AS total')->where('area','AREA ZIMATLAN')->whereYear('fecha_evaluacion',$year)->first();
        $sumTemporales = Colaborador_ManiobraModel::selectraw('count(area) AS total')->where('area','Temporales Oax')->whereYear('fecha_evaluacion',$year)->first();
        //Total programado
        $sumEt = MetaModel::selectRaw('sum(meta) as total')->where('year',$year)->where('centro_trabajo','AREA ETLA')->first();
        $sumIx = MetaModel::selectRaw('sum(meta) as total')->where('year',$year)->where('centro_trabajo','AREA IXTLAN')->first();
        $sumMia = MetaModel::selectRaw('sum(meta) as total')->where('year',$year)->where('centro_trabajo','AREA MIAHUATLAN')->first();
        $sumOax = MetaModel::selectRaw('sum(meta) as total')->where('year',$year)->where('centro_trabajo','AREA OAXACA')->first();
        $sumOco = MetaModel::selectRaw('sum(meta) as total')->where('year',$year)->where('centro_trabajo','AREA OCOTLAN')->first();
        $sumTla = MetaModel::selectRaw('sum(meta) as total')->where('year',$year)->where('centro_trabajo','AREA TLACOLULA')->first();
        $sumZim = MetaModel::selectRaw('sum(meta) as total')->where('year',$year)->where('centro_trabajo','AREA ZIMATLAN')->first();
        $sumTem = MetaModel::selectRaw('sum(meta) as total')->where('year',$year)->where('centro_trabajo','AREA Temporales Oax')->first();

        //Porcentaje


        if(!$sumEtla->total || !$sumEt->total){
            $porcientoEtla = 0;
        }
        else{
            $porcientoEtla = ($sumEtla->total * 100)/($sumEt->total);
        }

        if(!$sumIxtlan->total || !$sumIx->total){
            $porcientoIxtlan = 0;
        }
        else{
            $porcientoIxtlan= ($sumIxtlan->total * 100)/($sumIx->total);
        }

        if(!$sumMiahuatlan->total || !$sumMia->total){
            $porcientoMiahuatlan = 0;
        }
        else{
            $porcientoMiahuatlan = ($sumMiahuatlan->total * 100)/($sumMia->total);
        }

        if(!$sumOaxaca->total || !$sumOax->total){
            $porcientoOaxaca = 0;
        }
        else{
            $porcientoOaxaca = ($sumOaxaca->total * 100)/($sumOax->total);
        }

        if(!$sumOcotlan->total || !$sumOco->total){
            $porcientoOcotlan = 0;
        }
        else{
            $porcientoOcotlan = ($sumOcotlan->total * 100)/($sumOco->total);
        }

        if(!$sumTlacolula->total || !$sumTla->total){
            $porcientoTlacolula = 0;
        }
        else{
            $porcientoTlacolula = ($sumTlacolula->total * 100)/($sumTla->total);
        }

        if(!$sumZimatlan->total || !$sumZim->total){
            $porcientoZimatlan = 0;
        }
        else{
            $porcientoZimatlan = ($sumZimatlan->total * 100)/($sumZim->total);
        }

        if(!$sumTemporales->total || !$sumTem->total){
            $porcientoTemporales = 0;
        }
        else{
            $porcientoTemporales = ($sumTemporales->total * 100)/($sumTem->total);
        }




        return view('cfe.admin.maniobras_colaboradores.metas-area1')->with(['areas'=>$areas, 'ye'=>$ye,'metaEtla'=>$metaEtla,'metaIxtlan'=>$metaIxtlan,'metaMiahuatlan'=>$metaMiahuatlan,'metaOaxaca'=>$metaOaxaca,'metaOcotlan'=>$metaOcotlan,'metaTlacolula'=>$metaTlacolula,'metaZimatlan'=>$metaZimatlan,'metaTemporales'=>$metaTemporales, 'sumEtla'=>$sumEtla, 'sumIxtlan'=>$sumIxtlan, 'sumMiahuatlan'=>$sumMiahuatlan, 'sumOaxaca'=>$sumOaxaca, 'sumOcotlan'=>$sumOcotlan, 'sumTlacolula'=>$sumTlacolula, 'sumZimatlan'=>$sumZimatlan, 'sumTemporales'=>$sumTemporales, 'metaEt'=>$metaEt, 'metaIx'=>$metaIx, 'metaMia'=>$metaMia, 'metaOax'=>$metaOax, 'metaOco'=>$metaOco, 'metaTlac'=>$metaTlac, 'metaZim'=>$metaZim, 'metaTem'=>$metaTem, 'sumEt'=>$sumEt, 'sumIx'=>$sumIx, 'sumMia'=>$sumMia, 'sumOax'=>$sumOax, 'sumOco'=>$sumOco, 'sumTla'=>$sumTla, 'sumZim'=>$sumZim, 'sumTem'=>$sumTem, 'porcientoEtla'=>$porcientoEtla, 'porcientoIxtlan'=>$porcientoIxtlan, 'porcientoMiahuatlan'=>$porcientoMiahuatlan, 'porcientoOaxaca'=>$porcientoOaxaca, 'porcientoOcotlan'=>$porcientoOcotlan, 'porcientoTlacolula'=>$porcientoTlacolula, 'porcientoZimatlan'=>$porcientoZimatlan, 'porcientoTemporales'=>$porcientoTemporales]);
    }


    

    public function ver_area_mes($area, $mes, $year){
        $ye = $year;
        $ar = $area;
        $meses = array('ENERO','FEBRERO','MARZO','ABRIL','MAYO','JUNIO','JULIO','AGOSTO','SEPTIEMBRE','OCTUBRE','NOVIEMBRE','DICIEMBRE', 'EN TODO EL AÑO');


        for($i = 1; $i <= 13; $i++){
            if($i == $mes){
                $nombremes = $meses[$i - 1];
            }
        }

        $count_maniobra = Colaborador_ManiobraModel::where('area',$area)->whereMonth('fecha_evaluacion',$mes)->whereYear('fecha_evaluacion', $ye)->count();

        $maniobras = Colaborador_ManiobraModel::select('RPE','nombre','fecha_evaluacion','maniobra','calificacion')->where('area',$area)->whereMonth('fecha_evaluacion',$mes)->whereYear('fecha_evaluacion',$ye)->orderBy('calificacion', 'DES')->get();

        $maniobras_total = Colaborador_ManiobraModel::select('RPE','nombre','fecha_evaluacion','maniobra','calificacion')->where('area',$area)->whereYear('fecha_evaluacion',$ye)->orderBy('calificacion', 'DES')->get();

        $count_maniobratotal = Colaborador_ManiobraModel::where('area',$area)->whereYear('fecha_evaluacion', $ye)->count();

        return view('cfe.admin.maniobras_colaboradores.filtrarMesArea')->with(['ye'=>$ye,'ar'=>$ar, 'count_maniobra'=>$count_maniobra, 'nombremes'=>$nombremes,'maniobras'=>$maniobras, 'maniobras_total'=>$maniobras_total,'count_maniobratotal'=>$count_maniobratotal]);
   }
}
