<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semilla;

class SemillasController extends Controller
{
    public function getTipos(){
        $tipos = array();
        $tipos[] = "Automatica";
        $tipos[] = "Ferminizada";
        $tipos[] = "Regulares";

        return $tipos;
    }

    public function getSemillas(){
        $semillas = Semilla::all();
        return $semillas;
    }

    public function crearSemilla(Request $request){
        $input = $request->all();

        $semilla = new Semilla();
        $semilla->nombre = $input["nombre"];
        $semilla->tipo = $input["tipo"];
        $semilla->thc = $input["thc"];
        $semilla->cbd = $input["cbd"];
        $semilla->precio = $input["precio"];

        $semilla->save();
        return $semilla;
    }

    public function eliminarSemilla(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $semilla = Semilla::findOrFail($id);
        $semilla->delete();
        return "ok";
    }
    
    public function filtrarSemillas(Request $request){
        $input = $request->all();
        $filtro = $input["filtro"];
        $semilla = Semilla::where("tipo", $filtro)->get();
        return $semilla;
    }

    public function obtenerPorId(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $semilla = Semilla::findOrFail($id); 
        return $semilla;
    }

    public function actualizarSemilla(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $semilla = Semilla::findOrFail($id);
        $semilla->nombre = $input["nombre"];
        $semilla->tipo = $input["tipo"];
        $semilla->thc = $input["thc"];
        $semilla->cbd = $input["cbd"];
        $semilla->precio = $input["precio"];
        $semilla->save();
        return $semilla; 
    }

}
