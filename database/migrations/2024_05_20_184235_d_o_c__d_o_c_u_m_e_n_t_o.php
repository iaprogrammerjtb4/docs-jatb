<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DOCDOCUMENTO extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('DOC_DOCUMENTO', function(Blueprint $table){
            $table->bigIncrements('DOC_ID');
            $table->string('DOC_NOMBRE');
            $table->string('DOC_CODIGO');
            $table->string('DOC_CONTENIDO');
            $table->unsignedBigInteger('DOC_ID_TIPO');
            $table->unsignedBigInteger('DOC_ID_PROCESO');
            $table->foreign('DOC_ID_TIPO')->references('TIP_TIPO_DOC')->on('TIP_ID');
            $table->foreign('DOC_ID_PROCESO')->references('PRO_PROCESO')->on('PRO_ID');
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
        //
    }
}
