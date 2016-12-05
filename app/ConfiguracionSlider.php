<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfiguracionSlider extends Model
{
    //

    protected $table= "slider";
    protected $fillable=['Titulo','imagen','descripcion'];
}
