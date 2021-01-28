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
    return view('index');
});

Route::match(['get', 'post'],'/pagar', function(){return view('pagar');});
Route::resource('/index','ProyectoClienteController');
Route::resource('/administrarproyectos','ProyectoAdminController');
Route::resource('/usuarios','UsuarioController');
Route::resource('/empleados','EmpleadoController');
Route::resource('/administrarcarouselbanner','CarouselController');
Route::resource('/acercade','BannerController');
Route::get('/vistaproyecto/{id}',['as'=>'/vistaproyecto','uses'=>'ProyectoClienteController@show']);
Route::post('/administrarproyectos','ProyectoAdminController@store');
Route::post('/eliminarfotos','ProyectoAdminController@destroy');
Route::post('/eliminarproyecto','ProyectoClienteController@destroy');
Route::post('/usuarios','UsuarioController@store');
Route::post('/modificarproyectos','ProyectoAdminController@update');
Route::post('/pago', 'PagoController@store');
Route::post('/agregarImagen', 'BannerController@store');
Route::post('/agregarBanner', 'CarouselController@store');
Route::post('/modificarBanner', 'CarouselController@update');
Route::post('/eliminarBanner', 'CarouselController@destroy');
Route::get('/terminoscondiciones', 'BannerController@show');
Route::get('/politicasprivacidad', 'BannerController@update');
Route::match(['get','post'],'/empleado', 'EmpleadoController@show');

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

Route::get('/verdocumentosadmin', function () {
    return view('verDocumentosAdmin');
});

Route::get('/verproyectos', function () {
    return view('verProyectos');
});
