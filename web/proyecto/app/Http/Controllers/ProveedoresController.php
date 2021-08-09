<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedoresController extends Controller
{
    public function getProveedores(){
        $proveedores = Proveedor::all();
        return $proveedores;
    }

    public function crearProveedor(Request $request){
        $input = $request->all();

        $proveedor = new Proveedor();
        $proveedor->nombre = $input["nombre"];
        $proveedor->rut = $input["rut"];
        $proveedor->correo = $input["correo"];
        $proveedor->telefono = $input["telefono"];

        $proveedor->save();
        return $proveedor;
    }


    public function eliminarProveedor(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();
        return "ok";
    }

    public function obtenerPorId(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $proveedor = Proveedor::findOrFail($id); 
        return $proveedor;
    }

    public function actualizarProveedor(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->nombre = $input["nombre"];
        $proveedor->rut = $input["rut"];
        $proveedor->correo = $input["correo"];
        $proveedor->telefono = $input["telefono"];
        $proveedor->save();
        return $proveedor; 
    }


}
