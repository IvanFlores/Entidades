<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePisleaEstructurasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pislea_estructuras', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 15);
            $table->string('descripcion', 200);
            $table->boolean('obligatorio')->nullable()->default(false);
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
        Schema::dropIfExists('pislea_estructuras');
    }
}
