<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalesController;
use App\Http\Controllers\SemillasController;
use App\Http\Controllers\CarpasController;
use App\Http\Controllers\ProveedoresController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("regiones/get", [LocalesController::class, "getRegiones"]);

Route::get("tipo/get", [SemillasController::class, "getTipos"]);

//Proveedor
Route::get("proveedor/get", [ProveedoresController::class, "getProveedores"]);

Route::get("proveedor/findById", [ProveedoresController::class,"obtenerPorId"]);

Route::post("proveedor/post", [ProveedoresController::class, "crearProveedor"]);

Route::post("proveedor/actualizar", [ProveedoresController::class,"actualizarProveedor"]);

Route::post("proveedor/delete", [ProveedoresController::class, "eliminarProveedor"]);

//Locales
Route::get("local/get", [LocalesController::class, "getLocales"]);

Route::get("local/findById", [LocalesController::class,"obtenerPorId"]);

Route::get("local/filtrar", [LocalesController::class, "filtrarLocales"]);

Route::post("local/post", [LocalesController::class, "crearLocal"]);

Route::post("local/delete", [LocalesController::class, "eliminarLocal"]);

Route::post("local/actualizar", [LocalesController::class,"actualizarLocal"]);

//Semilla.
Route::get("semilla/get", [SemillasController::class, "getSemillas"]);

Route::get("semilla/filtrar", [SemillasController::class, "filtrarSemillas"]);

Route::get("semilla/findById", [SemillasController::class,"obtenerPorId"]);

Route::post("semilla/post", [SemillasController::class, "crearSemilla"]);

Route::post("semilla/delete", [SemillasController::class, "eliminarSemilla"]);

Route::post("semilla/actualizar", [SemillasController::class,"actualizarSemilla"]);

//Carpas
Route::get("carpa/get", [CarpasController::class, "getCarpas"]);

Route::get("carpa/findById", [CarpasController::class,"obtenerPorId"]);

Route::post("carpa/post", [CarpasController::class, "crearCarpa"]);

Route::post("carpa/delete", [CarpasController::class, "eliminarCarpa"]);

Route::post("carpa/actualizar", [CarpasController::class,"actualizarCarpa"]);