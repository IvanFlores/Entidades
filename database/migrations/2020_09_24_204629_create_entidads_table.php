<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidads', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_padre');
            $table->tinyInteger('nivel');
            $table->unsignedInteger('tipo_id');
            $table->string('cod', 5);
            $table->string('denominacion', 100);
            $table->string('sigla', 20);
            $table->tinyInteger('estado');
            $table->tinyInteger('presenta');
            $table->tinyInteger('grafica');
            $table->varchar('logo', 300);
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
        Schema::dropIfExists('entidads');
    }
}
