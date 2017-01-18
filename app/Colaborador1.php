<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colaborador1 extends Model
{
    //



    protected $table="colaborador";
protected $fillable = ['nombrecolaborador','apellidop','apellidom','fecha_nac','edad','telefono','correo','escolaridad','fecha_ingreso','nombre_contrato','seccion','fecha_ingresopuesto','jefe','idpuesto','ncentro','nempresa','foto','puesto_superior'];
protected $connection="rosario";
protected $primaryKey="RPE";
}
