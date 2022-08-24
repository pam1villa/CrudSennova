<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprendizsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendizs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('Codigo_Aprendiz',10);
            $table->string('Nombre_Aprendiz',20);
            $table->string('Documento_Aprendiz',10);
            $table->string('Tipo_Documento',2);
            $table->string('Genero_Aprendiz',1);
            $table->string('Estado_Aprendiz',10);
            $table->string('Identificador_Unico_Ficha',12);

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
        Schema::dropIfExists('aprendizs');
    }
}
