<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carpa;

class CarpasController extends Controller
{
    public function getCarpas(){
        $carpas = Carpa::all();
        return $carpas;
    }

    public function crearCarpa(Request $request){
        $input = $request->all();

        $carpa = new Carpa();
        $carpa->marca = $input["marca"];
        $carpa->tela = $input["tela"];
        $carpa->cantidad = $input["cantidad"];
        $carpa->largo = $input["largo"];
        $carpa->alto = $input["alto"];
        $carpa->ancho = $input["ancho"];
        $carpa->bandeja = $input["bandeja"];
        $carpa->precio = $input["precio"];

        $carpa->save();
        return $carpa;
    }

    public function eliminarCarpa(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $carpa = Carpa::findOrFail($id);
        $carpa->delete();
        return "ok";
    }
}
