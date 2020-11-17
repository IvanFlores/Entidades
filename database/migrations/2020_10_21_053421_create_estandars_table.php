<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstandarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estandars', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('categoria_id');
            $table->string('formato', 50);
            $table->string('estandar', 100);
            $table->text('descripcion');
            $table->string('extension', 50);
            $table->string('mime_type', 100);
            $table->varchar('imagen', 500);
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
        Schema::dropIfExists('estandars');
    }
}
