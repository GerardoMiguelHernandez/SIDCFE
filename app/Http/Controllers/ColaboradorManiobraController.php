<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests;
use App\Colaborador_ManiobraModel;
use Carbon\Carbon;
//use App\ImportarArchivos;
use App\Colaborador1 as Colaborador;
use App\UsuarioModel;
use App\User;

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
   
    }



public function detalleColaboradorAjax($clave){

    //$this->RPE=$RPE;

//return Datatables::of(Colaborador_ManiobraModel::where('RPE',$RPE))->make(true);


return Datatables::eloquent(Colaborador_ManiobraModel::where('RPE',$clave))->make(true);

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
        
        
        


       
       $areas = Colaborador_ManiobraModel::orderBy('maniobra','DES')->select('maniobra')->distinct()->get();
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



    $areas = Colaborador_ManiobraModel::where('maniobra',$area1)->paginate(10);
    //dd($d->count());
    $areaRe = $areas->first();
    $areaReal = $areaRe->maniobra;
    
    return view('cfe.admin.maniobras_colaboradores.filtrarArea1')->with(['areas'=>$areas,'areaReal'=>$areaReal]);

     

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
    return view('cfe.admin.maniobras_colaboradores.filtrarArea1')->with(['areas'=>$areas,'areaReal'=>$areaReal]);

   }

   public function ver_area_maniobra($area, $maniobra){
     
    $area_maniobra = Colaborador_ManiobraModel::where('area',$area)->where('maniobra',$maniobra)->paginate(10);

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
