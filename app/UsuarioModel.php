<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
    //
protected $connection="rosario";
protected $primaryKey="usuario";
protected $table="usuarios";
protected $fillable=['usuario','contrasena','privilegio'];

}
