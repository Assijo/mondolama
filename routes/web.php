<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mondolama', function () {
    return 'hola';
});
Route::resource('proyectos', 'PruebaController');
Route::get('/administrarproyectos', function () {
    return view('AdministrarProyectos');
});

Route::get('/administrarlotesmanzanas', function () {
    return view('administrarLotesManzanas');
});

Route::get('/apartarlotes', function () {
    return view('apartarLotes');
});

Route::resource('/index','ProyectoController');

Route::get('/vistaproyecto', function () {
    return view('vistaProyecto');
});

Route::get('/acercade', function () {
    return view('acercaDe');
});

Route::get('/terminoscondiciones', function () {
    return view('terminosCondiciones');
});

Route::get('/politicasprivacidad', function () {
    return view('politicasPrivacidad');
});

Route::get('/pagosclientes', function () {
    return view('pagosClientes');
});

Route::get('/pagosempleados', function () {
    return view('pagosEmpleados');
});

Route::get('/vendedoresproyectos', function () {
    return view('vendedoresProyectos');
});

Route::get('/documentosclientes', function () {
    return view('documentosClientes');
});

Route::get('/proyectosactivosinactivos', function () {
    return view('proyectosActivosInactivos');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});

Route::get('/pagosaprobar', function () {
    return view('pagosAprobar');
});

Route::get('/empleados', function () {
    return view('empleados');
});

Route::get('/verperfil', function () {
    return view('verPerfil');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login','LoginController@store')->middleware('registeduser');//*Login*//

Route::get('/cambiarcontrasena', function () {
    return view('cambiarContrasena');
});

Route::get('/verperfildesactivar', function () {
    return view('verPerfilDesactivar');
});

Route::get('/elegirlote', function () {
    return view('elegirLote');
});

Route::get('/verpagos', function () {
    return view('verPagos');
});

Route::get('/verdocumentos', function () {
    return view('verDocumentos');
});

Route::get('/verproyectos', function () {
    return view('verProyectos');
});
