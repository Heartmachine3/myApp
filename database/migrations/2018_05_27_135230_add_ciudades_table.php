<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCiudadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ciudades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CiudadNombre');
            $table->string('CiudadDistrito')->nullable();
            $table->float('CiudadPoblacion')->nullable();
            $table->string('PaisCodigo');
            // $table->string('PaisCodigo',255)->nullable($value = false);
            // $table->foreign('PaisCodigo')->references('PaisCodigo')->on('tb_paises')->onDelete('cascade');

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
        Schema::dropIfExists('tb_ciudades');
    }
}
