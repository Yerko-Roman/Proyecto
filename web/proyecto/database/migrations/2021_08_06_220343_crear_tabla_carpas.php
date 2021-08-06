<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaCarpas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carpas', function (Blueprint $table) {
            $table->id();
            $table->String("marca",50);
            $table->String("tela",50);
            $table->integer("cantidad")->unsigned();
            $table->integer("largo")->unsigned();
            $table->integer("alto")->unsigned();
            $table->integer("ancho")->unsigned();
            $table->tinyInteger("bandeja")->default(0);
            $table->integer("precio")->unsigned();
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
        Schema::dropIfExists('carpas');
    }
}

