<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PROPROCESO extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('PRO_PROCESO', function(Blueprint $table){
            $table->bigIncrements('PRO_ID');
            $table->string('PRO_NOMBRE');
            $table->string('PRO_PREFIJO');
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
