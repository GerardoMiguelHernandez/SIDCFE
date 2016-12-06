<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    //
protected $table="colaborador";
protected $fillable = ['RPE','nombrecolaborador','apellidop','apellidom','fecha_nac','edad','telefono','correo','escolaridad','fecha_ingreso','nombre_contrato','seccion','fecha_ingresopuesto','jefe','idpuesto','ncentro','nempresa','foto','puesto_superior'];
protected $connection="rosario";
protected $primaryKey="RPE";

}
