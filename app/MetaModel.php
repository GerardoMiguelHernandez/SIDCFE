<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetaModel extends Model
{
    //

    protected $table="metas";
    protected $fillable=['mes','meta','personalAsignado','year'];
}
