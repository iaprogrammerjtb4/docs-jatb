<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TIPTIPODOC extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('TIP_TIPO_DOC', function(Blueprint $table){
            $table->bigIncrements('TIP_ID');
            $table->string('TIP_NOMBRE');
            $table->string('TIP_PREFIJO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
