<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::view("/","home")->name("home");
Route::view("/agregar_proveedor","agregar_proveedor")->name("agregar_proveedor");
Route::view("/agregar_local","agregar_local")->name("agregar_local");
Route::view("/agregar_semilla","agregar_semilla")->name("agregar_semilla");
Route::view("/agregar_carpa","agregar_carpa")->name("agregar_carpa");
Route::view("/ver_semilla","ver_semilla")->name("ver_semilla");
Route::view("/ver_local","ver_local")->name("ver_local");
Route::view("/ver_proveedor","ver_proveedor")->name("ver_proveedor");
Route::view("/ver_carpa","ver_carpa")->name("ver_carpa");