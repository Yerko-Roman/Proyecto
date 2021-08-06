<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaSemillas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semillas', function (Blueprint $table) {
            $table->id();
            $table->String("nombre",150);
            $table->String("tipo",50);
            $table->float("thc", 4, 1)->unsigned();
            $table->float("cbd", 4, 1)->unsigned();
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
        Schema::dropIfExists('semillas');
    }
}
