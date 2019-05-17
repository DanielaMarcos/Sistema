<?php

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

Route::get("/", function () {
    return view("layout.layout");
});


Route::resources([
    'usuarios' => 'UsuariosController',
    'municipios' => 'MunicipiosController',
    'estados' => 'EstadosController',
    'sexos' => 'SexosController',
    'civiles' => 'CivilesController',
    'localidades'=> 'LocalidadesController',
    'edades' => 'EdadesController'

]);