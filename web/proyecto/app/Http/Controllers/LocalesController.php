<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Local;

class LocalesController extends Controller
{
    public function getRegiones(){
        $regiones = array();
        $regiones[] = "XV-Arica y Parinacota";
        $regiones[] = "I-Tarapaca";
        $regiones[] = "II-Antofagasta";
        $regiones[] = "III-Atacama";
        $regiones[] = "IV-Coquimbo";
        $regiones[] = "V-Valpariso";
        $regiones[] = "RM-Metropolitana de Santiago";
        $regiones[] = "VI-OHiggins";
        $regiones[] = "VII-El Maule";
        $regiones[] = "VIII-El BioBio";
        $regiones[] = "IX-La Araucania";
        $regiones[] = "X-Los Lagos";
        $regiones[] = "XI-Aysen";
        $regiones[] = "XII-Magallanes";
        $regiones[] = "XIV-Los Rios";

        return $regiones;
    }

    public function getLocales(){
        $locales = Local::all();
        return $locales;
    }

    public function crearLocal(Request $request){
        $input = $request->all();

        $local = new Local();
        $local->region = $input["region"];
        $local->calle = $input["calle"];
        $local->ciudad = $input["ciudad"];
        $local->local = $input["local"];
        $local->telefono = $input["telefono"];

        $local->save();
        return $local;
    }

    public function eliminarLocal(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $local = Local::findOrFail($id);
        $local->delete();
        return "ok";
    }

    public function filtrarLocales(Request $request){
        $input = $request->all();
        $filtro = $input["filtro"];
        $locales = Local::where("region", $filtro)->get();
        return $locales;
    }

}
