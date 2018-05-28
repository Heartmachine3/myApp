<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_paises', function (Blueprint $table) {
            // $table->increments('id');
            $table ->string('PaisCodigo');
            $table ->string('PaisNombre');
            $table ->string('PaisContinente');
            $table ->string('PaisRegion');
            $table ->float('PaisArea');
            $table ->integer('PaisIndependencia')->nullable();
            $table ->integer('PaisPoblacion');
            $table ->float('PaisExpectativaDeVida');
            $table ->float('PaisProductoInternoBruto')->nullable();
            $table ->float('PaisProductoInternoBrutoAntiguo')->nullable();
            $table ->string('PaisNombreLocal')->nullable();
            $table ->string('PaisGobierno')->nullable();
            $table ->string('PaisJefeDeEstado')->nullable();
            $table ->float('PaisCapital')->nullable();
            $table ->string('PaisCodigo2')->nullable();
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
        Schema::dropIfExists('tb_paises');
    }
}
