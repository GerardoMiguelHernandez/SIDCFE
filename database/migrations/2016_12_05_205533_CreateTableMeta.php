<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMeta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('metas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mes');
            $table->integer('meta');
<<<<<<< HEAD
            
=======
            $table->integer('year');
>>>>>>> c5e9e1f327bb929c62ffc1cf5742d1c152923dfc
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('metas');//
    }
}
