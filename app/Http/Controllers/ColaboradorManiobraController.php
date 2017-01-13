<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests;
use App\Colaborador_ManiobraModel;
use Carbon\Carbon;
//use App\ImportarArchivos;
use App\Colaborador1 as Colaborador;
use App\UsuarioModel;
use App\User;
use Illuminate\Support\Facades\DB;
use Datatables;

class ColaboradorManiobraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


public function __construct()
    {
   
   Carbon::setlocale('es');
    }



public function detalleColaboradorAjax($clave){

    //$this->RPE=$RPE; //9512909122

//return Datatables::of(Colaborador_ManiobraModel::where('RPE',$RPE))->make(true);


//return Datatables::eloquent(Colaborador_ManiobraModel::distinct()->where('RPE',$clave))->make(true);

   // return Datatables::of(Colaborador_ManiobraModel::where('RPE',$clave))->make(true);

    return Datatables::of(Colaborador_ManiobraModel::distinct('fecha_evaluacion','calificacion','maniobra','zona','area','nombre')->where('RPE',$clave))->make(true);

}

public function rango_fechas($fecha111, $fecha222){


    $rango_fechas = Colaborador_ManiobraModel::whereBetween('fecha_evaluacion',[$fecha111,$fecha222])->get();

      //$this->fecha111=$fecha111;
     // $this->fecha222=$area222;
   return Datatables::of(Colaborador_ManiobraModel::whereBetween('fecha_evaluacion',[$fecha111,$fecha222]))->make(true);

//dd($rango_fechas);

//return response()->json($rango_fechas);
        
    }    
public function retornardaticos($maniobra111, $area111){
$this->maniobra=$maniobra111;
$this->area=$area111;
return Datatables::of(Colaborador_ManiobraModel::where('maniobra',$this->maniobra)->where('area',$this->area))->make(true);
}

public function listado(){
 $hoy = Carbon::now();   
$total = Colaborador_ManiobraModel::all();
$aprobados = Colaborador_ManiobraModel::where('calificacion','>=',70);
$reprobados = Colaborador_ManiobraModel::where('calificacion','<',70);

//$aprobados
//$reprobados
return view('cfe.admin.maniobras_colaboradores.listado')->with([
    'total'=>$total,'aprobados'=>$aprobados,'reprobados'=>$reprobados,
    'hoy'=>$hoy]);
}
public function tabla(){
//return Datatables::of(Colaborador_ManiobraModel::query())->make(true);
    return Datatables::collection(Colaborador_ManiobraModel::all())->make(true);
  }

public function uploadFile(){

    return view('cfe.admin.maniobras_colaboradores.uploadfile');


}
    public function index(Request $request)
    {
        /*  contadores de areas,zonas,colaboradores*/
        //$count_areas = Colaborador_ManiobraModel::select('area')->distinct()->get();


         /* contador por cada area*/
        $count_zimatlan = Colaborador_ManiobraModel::where('area','AREA ZIMATLAN')->count();
        $count_etla = Colaborador_ManiobraModel::where('area','AREA ETLA')->count();
        $count_ixtlan = Colaborador_ManiobraModel::where('area','AREA IXTLAN')->count();
        $count_ocotlan = Colaborador_ManiobraModel::where('area','AREA OCOTLAN')->count();
        $count_miahuatlan = Colaborador_ManiobraModel::where('area','AREA MIAHUATLAN')->count();
        $count_tlacolula = Colaborador_ManiobraModel::where('area','AREA TLACOLULA')->count();
        $count_oaxaca = Colaborador_ManiobraModel::where('area','AREA OAXACA')->count();
        $count_temporales = Colaborador_ManiobraModel::where('area','Temporales Oax')->count();


        $contador=['zimatlan'=>$count_zimatlan,'etla'=>$count_etla,'ixtlan'=>$count_ixtlan,
        'ocotlan'=>$count_ocotlan,'miahuatlan'=>$count_miahuatlan,'tlacolula'=>$count_tlacolula,
        'oaxaca'=>$count_oaxaca,'temporales'=>$count_temporales];



        //dd($request->dato);
        $zonas = Colaborador_ManiobraModel::select('area')->distinct()->get();
        
        
        


       
       $areas = Colaborador_ManiobraModel::orderBy('maniobra','ASC')->select('maniobra')->distinct()->get();
       $mani=Colaborador_ManiobraModel::search($request->input_buscar)->paginate(10);
       $count_areas =$zonas->count();
       $count_evaluaciones = Colaborador_ManiobraModel::all()->count();
       $count_colaboradores = UsuarioModel::all()->count();
       $count_maniobras = $areas->count();
      // $imagenesss =Imagen::search($request->fixed-header-drawer-exp)->orderBy('created_at','DES')->get();
 //$mani = Colaborador_ManiobraModel::all();
       return view('cfe.admin.maniobras_colaboradores.index')->with(['maniobras1'=>$mani,'count_areas'=>$count_areas,'count_evaluaciones'=>$count_evaluaciones,'count_colaboradores'=>$count_colaboradores,'count_maniobras'=>$count_maniobras,'areas'=>$areas,'zonas'=>$zonas,'contador'=>$contador]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        $count_zimatlan = Colaborador_ManiobraModel::where('area','AREA ZIMATLAN')->count();
        $count_etla = Colaborador_ManiobraModel::where('area','AREA ETLA')->count();
        $count_ixtlan = Colaborador_ManiobraModel::where('area','AREA IXTLAN')->count();
        $count_ocotlan = Colaborador_ManiobraModel::where('area','AREA OCOTLAN')->count();
        $count_miahuatlan = Colaborador_ManiobraModel::where('area','AREA MIAHUATLAN')->count();
        $count_tlacolula = Colaborador_ManiobraModel::where('area','AREA TLACOLULA')->count();
        $count_oaxaca = Colaborador_ManiobraModel::where('area','AREA OAXACA')->count();
        $count_temporales = Colaborador_ManiobraModel::where('area','Temporales Oax')->count();


        return response()->json([
    'zimatlan' => $count_zimatlan,'etla' => $count_etla,'ixtlan'=>$count_ixtlan,
    'ocotlan'=>$count_ocotlan,'miahuatlan'=>$count_miahuatlan,'tlacolula'=>$count_tlacolula,'oaxaca'=>$count_oaxaca,'temporales'=>$count_temporales]);
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
     // $file = $request->file('archivo');
       // dd($file);
        /*
$this->validate($request,[
     'archivo'=>'required',
    ]); */

//$archivo = $request->archivo;


    //$archivo = $request->get('archivo');

    //dd($archivo);
    
    $archivo = $request->file('file');
    $ext    = $archivo->getClientOriginalExtension();
    $this->validate($request, [
        'file' => 'required',
    ]);


     //$archivo = $request->file('archivo'); //cachamos el archivo agregado por el usuario
    //dd($archivo);

     $filename =time() .$archivo->getClientOriginalName();
     //dd($filename);
     \Storage::disk('local')->put($filename, \File::get($archivo)); //guardamos el archivo en la direccion public/archivos la ruta fue configurada en 
      
      //$public_path = public_path();
      //$url= $public_path.'/archivos'.$archivo;

    /*
 $this->validate($request, [
        'title' => 'required|unique:posts|max:255',
        'body' => 'required',
    ]);

    */
/*  $csv    = $request->file('document');
        $table  = $request->route('table');
        $ext    = $csv->getClientOriginalExtension();

        Validator::make(
            [
                'document' => $csv,
                'format'   => $ext
            ],[
                'document' => 'required',
                'format'   => 'in:csv,xlsx,xls,ods' // all working except for ods
            ]
        )->passOrDie(); */

         Excel::load($archivo, function($reader) {

            foreach ($reader->get() as $book) {
        /*

         $checar_datos=Colaborador_ManiobraModel::where('maniobra',$book->maniobra)->where('fecha_evaluacion',$book->fecha_evaluacion)->where('nombre',$book->nombre)->get();
         
         if($checar_datos!=null){       
       
        }
        else{ */

             $colaborador_maniobra_model  = new Colaborador_ManiobraModel();
        $colaborador_maniobra_model->zona =$book->zona;
        $colaborador_maniobra_model->area=$book->area;
        $colaborador_maniobra_model->RPE= $book->rpe;
        $colaborador_maniobra_model->nombre=$book->nombre;
        $colaborador_maniobra_model->fecha_evaluacion=date("y-m-d",strtotime($book->fecha_evaluacion));
        $colaborador_maniobra_model->maniobra =str_replace('/', '-', $book->maniobra);

        //$resultado = str_replace("a", "A", $cadena);
        $colaborador_maniobra_model->calificacion= $book->calificacion;
       
          
        $colaborador_maniobra_model->save(); 
          
       // }
    }
        }); 

     


   return redirect()->action('ColaboradorManiobraController@index');
  
     
     
  }


   

   public function ver_maniobra($maniobra, Request $request){


    $maniobras = Colaborador_ManiobraModel::where('maniobra',$maniobra)->search($request->input_buscar1)->paginate(10);
//$mani=Colaborador_ManiobraModel::search($request->input_buscar)->paginate(10);
    //dd($maniobra);
    $maniobraRe = $maniobras->first();
    $maniobraReal = $maniobraRe->maniobra;
    return view('cfe.admin.maniobras_colaboradores.filtrarArea')->with(['maniobras'=>$maniobras,'maniobraReal'=>$maniobraReal]);

   }
public function ver_maniobra_area($maniobra, $area){

    $maniobra_por_area = Colaborador_ManiobraModel::where('maniobra',$maniobra)->where('area',$area)->paginate(10);

    $count_maniobra_por_area = Colaborador_ManiobraModel::where('maniobra',$maniobra)->where('area',$area)->count();



     return view('cfe.admin.maniobras_colaboradores.filtrar.filtrarManiobraArea')->with(
        ['maniobra_por_area'=>$maniobra_por_area,
         'count_maniobra_por_area'=>$count_maniobra_por_area,
         'area'=>$area,
         'maniobra'=>$maniobra]);

    

}
   
 public function ver_area1($area1){


//querys para obtener el numero de evaluaciones por zona

  //$etla=AREA ETLA  
   $count_zimatlan = Colaborador_ManiobraModel::where('area','AREA ZIMATLAN')->where('maniobra',$area1)->count();

   $zimatlan1= Colaborador_ManiobraModel::select(DB::raw('sum(calificacion) as totalZimatlan'))->where('area','AREA ZIMATLAN')->where('maniobra',$area1)->first();
if($zimatlan1->totalZimatlan==null || $count_zimatlan==0){
    $zimatlan1->totalZimatlan = 0;
}
else{
$zimatlan1->totalZimatlan = $zimatlan1->totalZimatlan/$count_zimatlan;
}

        $count_etla = Colaborador_ManiobraModel::where('area','AREA ETLA')->where('maniobra',$area1)->count();


        $etla1= Colaborador_ManiobraModel::select(DB::raw('sum(calificacion) as totalEtla'))->where('area','AREA ETLA')->where('maniobra',$area1)->first();
if($etla1->totalEtla==null || $count_etla==0){
    $etla1->totalEtla = 0;
}
else{
$etla1->totalEtla = $etla1->totalEtla/$count_etla;
}
        $count_ixtlan = Colaborador_ManiobraModel::where('area','AREA IXTLAN')->where('maniobra',$area1)->count();

$ixtlan1= Colaborador_ManiobraModel::select(DB::raw('sum(calificacion) as totalIxtlan'))->where('area','AREA IXTLAN')->where('maniobra',$area1)->first();
if($ixtlan1->totalIxtlan==null || $count_ixtlan==0){
    $ixtlan1->totalIxtlan = 0;
}
else{
$ixtlan1->totalIxtlan = $ixtlan1->totalIxtlan/$count_ixtlan;
}


        $count_ocotlan = Colaborador_ManiobraModel::where('area','AREA OCOTLAN')->where('maniobra',$area1)->count();


$ocotlan1= Colaborador_ManiobraModel::select(DB::raw('sum(calificacion) as totalOcotlan'))->where('area','AREA OCOTLAN')->where('maniobra',$area1)->first();
if($ocotlan1->totalOcotlan==null || $count_ocotlan==0){
    $ocotlan1->totalOcotlan = 0;
}
else{
$ocotlan1->totalOcotlan = $ocotlan1->totalOcotlan/$count_ocotlan;
}


        $count_miahuatlan = Colaborador_ManiobraModel::where('area','AREA MIAHUATLAN')->where('maniobra',$area1)->count();

$miahuatlan1= Colaborador_ManiobraModel::select(DB::raw('sum(calificacion) as totalMiahuatlan'))->where('area','AREA MIAHUATLAN')->where('maniobra',$area1)->first();
if($miahuatlan1->totalMiahuatlan==null || $count_miahuatlan==0){
    $miahuatlan1->totalMiahuatlan = 0;
}
else{
$miahuatlan1->totalMiahuatlan = $miahuatlan1->totalMiahuatlan/$count_miahuatlan;
}




        $count_tlacolula = Colaborador_ManiobraModel::where('area','AREA TLACOLULA')->where('maniobra',$area1)->count();

$tlacolula1= Colaborador_ManiobraModel::select(DB::raw('sum(calificacion) as totalTlacolula'))->where('area','AREA TLACOLULA')->where('maniobra',$area1)->first();
if($tlacolula1->totalTlacolula==null || $count_tlacolula==0){
    $tlacolula1->totalTlacolula = 0;
}
else{
$tlacolula1->totalTlacolula = $tlacolula1->totalTlacolula/$count_tlacolula;
}


        $count_oaxaca = Colaborador_ManiobraModel::where('area','AREA OAXACA')->where('maniobra',$area1)->count();

$oaxaca1= Colaborador_ManiobraModel::select(DB::raw('sum(calificacion) as totalOaxaca'))->where('area','AREA OAXACA')->where('maniobra',$area1)->first();
if($oaxaca1->totalOaxaca==null || $count_oaxaca==0){
    $oaxaca1->totalOaxaca = 0;
}
else{
$oaxaca1->totalOaxaca = $oaxaca1->totalOaxaca/$count_oaxaca;
}

        $count_temporales = Colaborador_ManiobraModel::where('area','Temporales Oax')->where('maniobra',$area1)->count();

$temporales1= Colaborador_ManiobraModel::select(DB::raw('sum(calificacion) as totalTemporales'))->where('area','Temporales Oax')->where('maniobra',$area1)->first();
if($temporales1->totalTemporales==null || $count_temporales==0){
    $temporales1->totalTemporales = 0;
}
else{
$temporales1->totalTemporales = $temporales1->totalTemporales/$count_temporales;
}





    $areas = Colaborador_ManiobraModel::where('maniobra',$area1)->get();
    //dd($d->count());
    $areaRe = $areas->first();
    $areaReal = $areaRe->maniobra;
    
    return view('cfe.admin.maniobras_colaboradores.filtrarArea1')->with(['areas'=>$areas,'areaReal'=>$areaReal,'zimatlan'=>$count_zimatlan,'etla'=>$count_etla,'ixtlan'=>$count_ixtlan,'ocotlan'=>$count_ocotlan,'miahuatlan'=>$count_miahuatlan,'tlacolula'=>$count_tlacolula,'oaxaca'=>$count_oaxaca,'temporales'=>$count_temporales,'zimatlan1'=>$zimatlan1,'etla1'=>$etla1,'ixtlan1'=>$ixtlan1,'ocotlan1'=>$ocotlan1,'miahuatlan1'=>$miahuatlan1,'tlacolula1'=>$tlacolula1,'oaxaca1'=>$oaxaca1,'temporales1'=>$temporales1]);

     

 }

public function obtener($maniobra){
    $this->maniobra = $maniobra;
 
 //return Datatables::collection(Colaborador_ManiobraModel::all())->make(true);


 return Datatables::of(Colaborador_ManiobraModel::where('maniobra',$this->maniobra))->make(true);

 }


 public function areadatosobtener($area){

$this->area= $area;

//dd($this->area);
 
 //return Datatables::collection(Colaborador_ManiobraModel::all())->make(true);


 return Datatables::of(Colaborador_ManiobraModel::where('area',$area))->make(true);

 }


 public function areadatos($areadatos){
    $this->areadatos = $areadatos;
    $maniobras = Colaborador_ManiobraModel::where('area',$areadatos)->get();
    //dd($maniobras->count());
    //$areaRe = $areas->first();
    //$areaReal = $areaRe->maniobra;
//$mani=Colaborador_ManiobraModel::search($request->input_buscar)->paginate(10);
    //dd($maniobra);
    $maniobraRe = $maniobras->first();
    $maniobraReal = $maniobraRe->area;
    return view('cfe.admin.maniobras_colaboradores.filtrarArea')->with(['maniobras'=>$maniobras,'maniobraReal'=>$maniobraReal]);

 }

 public function obtenerarea($area){
    $this->maniobra = $maniobra;
 
 //return Datatables::collection(Colaborador_ManiobraModel::all())->make(true);


 return Datatables::of(Colaborador_ManiobraModel::where('area',$area))->make(true);

 }

public function ver_area($area, Request $request){
   


    $areas = Colaborador_ManiobraModel::where('area',$area)->paginate(10);

//dd($areas->count());
    //dd($maniobra);
    $areaRe = $areas->first();
    $areaReal = $areaRe->area;
    return view('cfe.admin.maniobras_colaboradores.filtrarArea')->with(['areas'=>$areas,'areaReal'=>$areaReal]);

   }

   public function ver_area_maniobra($area, $maniobra){
     
    $area_maniobra = Colaborador_ManiobraModel::select('zona','area','RPE','nombre','fecha_evaluacion','calificacion')->where('area',$area)->where('maniobra',$maniobra)->distinct('zona','area','RPE','nombre','fecha_evaluacion')->paginate(10);

    $count_area_maniobra = Colaborador_ManiobraModel::where('area',$area)->where('maniobra',$maniobra)->count();

    return view('cfe.admin.maniobras_colaboradores.filtrar.filtrarAreaManiobra')->with(
        ['area_maniobra'=>$area_maniobra,
         'count_area_maniobra'=>$count_area_maniobra,
         'area'=>$area,
         'maniobra'=>$maniobra]);


   }
   

    public function show($id)
    {
        //

  $areas = Colaborador_ManiobraModel::select('maniobra')->distinct()->get();


  $informacion_trabajador = Colaborador::select('RPE','nombrecolaborador','apellidop','apellidom','fecha_nac','edad','telefono','correo','escolaridad','fecha_ingreso','nombre_contrato','seccion','fecha_ingresopuesto','jefe','idpuesto','ncentro','nempresa','puesto_superior')->where('RPE',$id)->get();
  $filtar_por_RPE = Colaborador_ManiobraModel::where('RPE',$id)->get();
  //return response()->json($filtar_por_RPE);
//return response()->json($informacion_trabajador);
  //dd($informacion_trabajador);
$rpe = $id;

  return view('admin.maniobrascolaboradores.show')->with(['informacion_trabajador'=>$informacion_trabajador,'filtar_por_RPE'=>$filtar_por_RPE,'rpe'=>$rpe,'areas'=>$areas]);
    }


    public function max_maniobra()
    {
        $max_zimatlan = Colaborador_ManiobraModel::selectRaw('maniobra, count(maniobra) as numero')->where('area','AREA ZIMATLAN')->where('calificacion','>=',95)->groupBy('maniobra')-> orderBy('numero','DES')->first();

        $max_etla = Colaborador_ManiobraModel::selectRaw('maniobra, count(maniobra) as numero')->where('area','AREA ETLA')->where('calificacion','>=',95)->groupBy('maniobra')-> orderBy('numero','DES')->first();

        $max_ocotlan = Colaborador_ManiobraModel::selectRaw('maniobra, count(maniobra) as numero')->where('area','AREA OCOTLAN')->where('calificacion','>=',95)->groupBy('maniobra')-> orderBy('numero','DES')->first();

        $max_miahuatlan = Colaborador_ManiobraModel::selectRaw('maniobra, count(maniobra) as numero')->where('area','AREA MIAHUATLAN')->where('calificacion','>=',95)->groupBy('maniobra')-> orderBy('numero','DES')->first();

        $max_tlacolula = Colaborador_ManiobraModel::selectRaw('maniobra, count(maniobra) as numero')->where('area','AREA TLACOLULA')->where('calificacion','>=',95)->groupBy('maniobra')-> orderBy('numero','DES')->first();

        $max_oaxaca = Colaborador_ManiobraModel::selectRaw('maniobra, count(maniobra) as numero')->where('area','AREA OAXACA')->where('calificacion','>=',95)->groupBy('maniobra')-> orderBy('numero','DES')->first();

        $max_temporales = Colaborador_ManiobraModel::selectRaw('maniobra, count(maniobra) as numero')->where('area','Temporales Oax')->where('calificacion','>=',95)->groupBy('maniobra')-> orderBy('numero','DES')->first();

        $max_ixtlan = Colaborador_ManiobraModel::selectRaw('maniobra, count(maniobra) as numero')->where('area','AREA IXTLAN')->where('calificacion','>=',95)->groupBy('maniobra')-> orderBy('numero','DES')->first();




        $min_zimatlan = Colaborador_ManiobraModel::selectRaw('maniobra, count(maniobra) as Numero')->where('area','AREA ZIMATLAN')->where('calificacion','>=',95)->groupBy('maniobra')-> orderBy('Numero','ASC')->first();

        $min_etla = Colaborador_ManiobraModel::selectRaw('maniobra, count(maniobra) as Numero')->where('area','AREA ETLA')->where('calificacion','>=',95)->groupBy('maniobra')-> orderBy('Numero','ASC')->first();

        $min_ocotlan = Colaborador_ManiobraModel::selectRaw('maniobra, count(maniobra) as Numero')->where('area','AREA OCOTLAN')->where('calificacion','>=',95)->groupBy('maniobra')-> orderBy('Numero','ASC')->first();

        $min_miahuatlan = Colaborador_ManiobraModel::selectRaw('maniobra, count(maniobra) as Numero')->where('area','AREA MIAHUATLAN')->where('calificacion','>=',95)->groupBy('maniobra')-> orderBy('Numero','ASC')->first();

        $min_tlacolula = Colaborador_ManiobraModel::selectRaw('maniobra, count(maniobra) as Numero')->where('area','AREA TLACOLULA')->where('calificacion','>=',95)->groupBy('maniobra')-> orderBy('Numero','ASC')->first();

        $min_oaxaca = Colaborador_ManiobraModel::selectRaw('maniobra, count(maniobra) as Numero')->where('area','AREA OAXACA')->where('calificacion','>=',95)->groupBy('maniobra')-> orderBy('Numero','ASC')->first();

        $min_temporales = Colaborador_ManiobraModel::selectRaw('maniobra, count(maniobra) as Numero')->where('area','Temporales Oax')->where('calificacion','>=',95)->groupBy('maniobra')-> orderBy('Numero','ASC')->first();

        $min_ixtlan = Colaborador_ManiobraModel::selectRaw('maniobra, count(maniobra) as numero')->where('area','AREA IXTLAN')->where('calificacion','>=',95)->groupBy('maniobra')-> orderBy('Numero','ASC')->first();




        $min_area = Colaborador_ManiobraModel::selectRaw('area, count(area) as Numero')->where('calificacion','>=',95)->groupBy('area')-> orderBy('Numero','ASC')->first();

        $max_area = Colaborador_ManiobraModel::selectRaw('area, count(area) as Numero')->where('calificacion','>=',95)->groupBy('area')-> orderBy('Numero','DES')->first();


        return view('cfe.admin.maniobras_colaboradores.mostrar')->with(['max_zimatlan'=>$max_zimatlan,'max_etla'=>$max_etla,'max_ocotlan'=>$max_ocotlan,'max_miahuatlan'=>$max_miahuatlan,'max_tlacolula'=>$max_tlacolula,'max_oaxaca'=>$max_oaxaca,'max_temporales'=>$max_temporales,'max_ixtlan'=>$max_ixtlan, 'min_zimatlan'=>$min_zimatlan,'min_etla'=>$min_etla,'min_ocotlan'=>$min_ocotlan,'min_miahuatlan'=>$min_miahuatlan,'min_tlacolula'=>$min_tlacolula,'min_oaxaca'=>$min_oaxaca,'min_temporales'=>$min_temporales,'min_ixtlan'=>$min_ixtlan,'min_area'=>$min_area,'max_area'=>$max_area]);
    }

    /*public function min_maniobra()
    {

        return view()->with([]);
    }*/

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
