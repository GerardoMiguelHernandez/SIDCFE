<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Colaborador1 as Colaborador;
use App\UsuarioModel;
use App\BateriaModel;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Response;
use App\Colaborador_ManiobraModel;
class ColaboradoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bateria = BateriaModel::all();
        $count_usuarios = UsuarioModel::all()->count();
        $count_colaborador = Colaborador::all()->count();
        $colaboradores = Colaborador::orderBy('RPE','DES')->paginate(5);

        return view('admin.colaboradores.index')->with(['colaboradores'=>$colaboradores,'count_colaborador'=>$count_colaborador,'count_usuarios'=>$count_usuarios,'bateria'=>$bateria]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $count_usuarios = UsuarioModel::all()->count();
        $count_colaborador = Colaborador::all()->count();
        return response()->json([
    'usuarios' => $count_usuarios,
    'colaboradores' => $count_colaborador
]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    $picture = Colaborador::find($id);
    $detalles= Colaborador_ManiobraModel::select('fecha_evaluacion','calificacion','maniobra','zona','area')->where('RPE',$id)->distinct()->get();
    $total=count($detalles);
    
    //dd($id);
    //$pic = Image::make($picture->foto);
    //$response = Response::make($pic->encode('jpeg'));
    //$response->header('Content-Type', 'image/jpeg');
    
    //return $response;
    
    return view('cfe.admin.colaboradores.detalleColaborador')->with(['response'=>$picture,'id'=>$id,'total'=>$total]);

    }

    public function foto($id1)
    {
    $picture = Colaborador::find($id1);
    $pic = Image::make($picture->foto)->resize(180,180);

    //$img->resize(320, 240);
    $response = Response::make($pic->encode('jpeg'));
    $response->header('Content-Type', 'image/jpeg');
    
    return $response;
    //return view('cfe.admin.colaboradores.detalleColaborador')->with(['response'=>$response]);

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

    public function tablaManiobra($id){

        $picture = Colaborador::find($id);
        $detalles= Colaborador_ManiobraModel::select('fecha_evaluacion','calificacion','maniobra','zona','area')->where('RPE',$id)->distinct()->get();
        $total=count($detalles);


        $maniobras = Colaborador_ManiobraModel::select('maniobra')->orderBy('maniobra','ASC')->distinct()->get();


        foreach ($maniobras as $maniobra) {
            $var = Colaborador_ManiobraModel::where('RPE',$id)->where('maniobra',$maniobra->maniobra)->count();
            $var1 = Colaborador_ManiobraModel::where('RPE',$id)->where('maniobra',$maniobra->maniobra)->avg('calificacion');
            if(!$var){
                $realizo[] = 'N';
                $promedio[] = 0;
            }
            else{
                $realizo[] = $var;
                $promedio[] = $var1;
            }
        }
    
    
        return view('cfe.admin.colaboradores.TablaColaboradorManiobras')->with(['response'=>$picture,'id'=>$id,'total'=>$total, 'maniobras'=>$maniobras, 'realizo'=>$realizo, 'promedio'=>$promedio]);

    }


    public function MostrarManiobraColaborador($id, $maniobra){
        $picture = Colaborador::find($id);
        $detalles= Colaborador_ManiobraModel::select('fecha_evaluacion','calificacion','maniobra','zona','area')->where('RPE',$id)->distinct()->get();
        $total=count($detalles);

        $consulta = Colaborador_ManiobraModel::where('RPE', $id)->where('maniobra', $maniobra)->orderBy('fecha_evaluacion', 'ASC')->get();

        return view('cfe.admin.maniobras_colaboradores.ManiobraRPE')->with(['response'=>$picture,'id'=>$id,'total'=>$total, 'consulta'=>$consulta]);

    }



}
