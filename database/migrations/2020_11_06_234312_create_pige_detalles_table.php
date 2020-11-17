<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePigeDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pige_detalles', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('pige_id');
            $table->unsignedInteger('linea_id');
            $table->string('medio',25);
            $table->string('nombre',500);
            $table->string('instancia',100);
            $table->string('objeto_meta_resultado',1000);
            $table->string('inicio',25);
            $table->string('final',25);
            $table->string('indicador',1000);
            $table->string('observaciones_transcripcion',500);
            $table->unsignedInteger('linea_rev_id');
            $table->string('observaciones_linea',500);
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
        Schema::dropIfExists('pige_detalles');
    }
}
