<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BateriaModel extends Model
{
    //
protected $table="bateria";
protected $filable=['idperfil','nombrecentro','tipocontrato'];
protected $connection="rosario";
protected $primaryKey="id";
}
