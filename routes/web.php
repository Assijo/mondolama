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

Route::match(['get', 'post'],'/pagar', function(){return view('pagar');});

Route::resource('proyectos', 'PruebaController');
Route::resource('/index','ProyectoClienteController');
Route::resource('/administrarproyectos','ProyectoAdminController');
Route::resource('/usuarios','UsuarioController');
Route::resource('/empleados','EmpleadoController');
//Route::resource('/pagar','PagoController');
Route::get('/vistaproyecto/{id}',['as'=>'/vistaproyecto','uses'=>'ProyectoClienteController@show']);
Route::get('/apartarlotes/{id}',['as'=>'/apartarlotes','uses'=>'ManzanaController@show']);
Route::get('/administrarlotesmanzanas/{id}',['as'=>'/administrarlotesmanzanas','uses'=>'ManzanaController@show']);
Route::post('/administrarproyectos','ProyectoAdminController@store');
Route::post('/eliminarfotos','ProyectoAdminController@destroy');
Route::post('/eliminarproyecto','ProyectoClienteController@destroy');
Route::post('/usuarios','UsuarioController@store');
Route::post('/modificarproyectos','ProyectoAdminController@update');
Route::post('/loginadministrarproyectos','LoginController@index');
Route::post('/pago', 'PagoController@store');
Route::match(['get','post'],'/empleado', 'EmpleadoController@show');



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
Route::get('/pagosaprobar', function () {
    return view('pagosAprobar');
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

Route::get('/pagarproyecto', function () {
    return view('pagarProyecto');
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
