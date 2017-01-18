<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Colaborador_ManiobraModel;
use Illuminate\Database\Eloquent\Collection;
class Estadisticas extends Controller
{
    //


public function maniobras_areas(){


$maniobras = Colaborador_ManiobraModel::select('maniobra')->distinct()->get();
$areas = Colaborador_ManiobraModel::select('area')->distinct()->get();

//foreach ($areas as $area) {
    //echo $area->area;


foreach ($maniobras as $maniobra) {
    	
$contador[] = Colaborador_ManiobraModel::where('area','AREA ETLA')->where('maniobra',$maniobra->maniobra)->count();

$contador_ixtlan[] = Colaborador_ManiobraModel::where('area','AREA IXTLAN')->where('maniobra',$maniobra->maniobra)->count();

$contador_miahuatlan[] = Colaborador_ManiobraModel::where('area','AREA MIAHUATLAN')->where('maniobra',$maniobra->maniobra)->count();

$contador_oaxaca[] = Colaborador_ManiobraModel::where('area','AREA OAXACA')->where('maniobra',$maniobra->maniobra)->count();

$contador_ocotlan[] = Colaborador_ManiobraModel::where('area','AREA OCOTLAN')->where('maniobra',$maniobra->maniobra)->count();

$contador_tlacolula[] = Colaborador_ManiobraModel::where('area','AREA TLACOLULA')->where('maniobra',$maniobra->maniobra)->count();

$contador_zimatlan[] = Colaborador_ManiobraModel::where('area','AREA ZIMATLAN')->where('maniobra',$maniobra->maniobra)->count();
      
$contador_temporales[] = Colaborador_ManiobraModel::where('area','Temporales Oax')->where('maniobra',$maniobra->maniobra)->count();

    }
// }
//$collection = Collection::make($contador);


//
//$collection = collect(['name', 'age']);

//$combined = $collection->combine(['George', 29]);

//$combined->all();        
//return response()->json($datos);

return view('cfe.admin.estadisticas.General')->with(['datos'=>$contador,'areas'=>$areas,'maniobras'=>$maniobras,'contador_ixtlan'=>$contador_ixtlan,'contador_miahuatlan'=>$contador_miahuatlan,'contador_oaxaca'=>$contador_oaxaca,'contador_ocotlan'=>$contador_ocotlan,'contador_tlacolula'=>$contador_tlacolula,'contador_zimatlan'=>$contador_zimatlan,'contador_temporales'=>$contador_temporales]);
}
}