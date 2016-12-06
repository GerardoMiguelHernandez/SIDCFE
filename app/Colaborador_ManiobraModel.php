<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Colaborador_ManiobraModel extends Model
{
    //



   protected $table='maniobra_colaborador';
   protected $fillable=['zona','area','RPE','nombre','fecha_evaluacion','maniobra','calificacion'];

   public function scopeSearch($query,$nombre){
    if(trim($nombre)!=""){
    $resultado= $query->where('RPE','LIKE',"%$nombre%")->orWhere('area','LIKE',"%$nombre%")->orWhere('nombre','LIKE',"%$nombre%")->orWhere('maniobra','LIKE',"%$nombre%");

   return $resultado;
}
   }
}
