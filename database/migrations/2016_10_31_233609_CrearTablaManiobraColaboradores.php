<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaManiobraColaboradores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maniobra_colaborador', function (Blueprint $table) {
            //
            //$table->char('utf8_spanish_ci');
           // $table->collate('utf_unicode_ci'); 
            $table->increments('id');
            $table->string('zona');
            $table->string('area');
            $table->string('RPE');
            $table->string('nombre');
            $table->date('fecha_evaluacion');
            $table->string('maniobra')->char('utf8_spanish_ci');
            $table->integer('calificacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('maniobra_colaborador');
    }
}
