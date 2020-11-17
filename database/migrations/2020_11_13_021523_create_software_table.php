<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('software', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('categoria_id');
            $table->unsignedInteger('funcionalidad_id');
            $table->string('software',50);
            $table->string('imagen',500);
            $table->string('version',15);
            $table->string('url',500);
            $table->string('url_repo',500);
            $table->string('licencia',25);
            $table->tinyInteger('soberania');
            $table->tinyInteger('generacion_de_tecnologia');
            $table->tinyInteger('curva_de_aprendizaje');
            $table->tinyInteger('soporte');
            $table->string('paquetes',15);
            $table->tinyInteger('anio');
            $table->date('fecha_ultima_version');
            $table->tinyInteger('seguridad');
            $table->tinyInteger('usabilidad');
            $table->tinyInteger('especializacion');
            $table->tinyInteger('compatibilidad');
            $table->string('referente_privativo', 100)->nullable();
            $table->text('ventajas')->nullable();
            $table->text('desventajas')->nullable();
            $table->tinyInteger('recomendacion');
            $table->unsignedInteger('user_id');
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
        Schema::dropIfExists('software');
    }
}
