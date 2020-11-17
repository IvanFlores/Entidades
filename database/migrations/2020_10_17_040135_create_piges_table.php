<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePigesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piges', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('entidad_id');
            $table->string('usuario_digitaliza',25);
            $table->date('fecha');
            $table->string('resolucion',100);
            $table->date('fecha_res');
            $table->string('doc_externo',50);
            $table->string('url',500);
            $table->string('url_entidad',500);
            $table->text('observaciones');
            $table->tinyInteger('estado');
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
        Schema::dropIfExists('piges');
    }
}
