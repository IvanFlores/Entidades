<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePisleaDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pislea_detalles', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('pislea_id');
            $table->unsignedInteger('estructura_id');
            $table->boolean('prsnnto')->nullable()->default(false);
            $table->string('observaciones', 500)->nullable();
            $table->string('recomendaciones', 500)->nullable();
            $table->unsignedInteger('user_id');
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
        Schema::dropIfExists('pislea_detalles');
    }
}
