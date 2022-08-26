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

            $table->int('id');
            $table->string('APREN_Nombre',45);
            $table->int('APREN_Documento');
            $table->string('APREN_Tipo_Documento',2);
            $table->string('APREN_Genero',15);
            $table->string('APREN_Estado',10);

            $table->string('APREN_Foto',10);

            $table->int('id_ficha');

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
