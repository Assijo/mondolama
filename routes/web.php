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

Route::middleware('sesionAdministradores')->group(function () { //grupos de rutas que usan la comprobacion sesiones de administrador master y administrador
    
    Route::resource('/empleados','EmpleadoController');
    Route::resource('/administrarproyectos','ProyectoAdminController');
    Route::resource('/administrarcarouselbanner','CarouselController');
    Route::post('/administrarproyectos','ProyectoAdminController@store');
    Route::post('/eliminarfotos','ProyectoAdminController@destroy');
    Route::post('/eliminarproyecto','ProyectoClienteController@destroy');
    Route::post('/modificarproyectos','ProyectoAdminController@update');
    Route::post('/pago', 'PagoController@store');
    Route::post('/agregarImagen', 'BannerController@store');
    Route::post('/agregarBanner', 'CarouselController@store');
    Route::post('/modificarBanner', 'CarouselController@update');
    Route::post('/eliminarBanner', 'CarouselController@destroy');

    Route::match(['get', 'post'],'/pagar', function(){return view('pagar');});
    Route::match(['get','post'],'/empleado', 'EmpleadoController@show');
});

Route::middleware(['sesionVendedor'])->group(function ()
{



});

Route::middleware(['sesionCliente'])->group(function ()
{

    

});

Route::resource('/verperfil','UsuarioController');

Route::get('/',function(){return view('index');});
Route::get('/vistaproyecto/{id}',['as'=>'/vistaproyecto','uses'=>'ProyectoClienteController@show']);
Route::get('/apartarlotes/{id}',['as'=>'/apartarlotes','uses'=>'LoteController@show']);
Route::get('/terminoscondiciones', 'BannerController@show');
Route::get('/politicasprivacidad', 'BannerController@update');

Route::resource('/index','ProyectoClienteController');

Route::resource('/acercade','BannerController');

Route::post('/usuarios','UsuarioController@store');
Route::post('/modificarusuario', 'UsuarioController@update');
Route::post('/loginn','LoginController@create');
Route::post('/logout','LoginController@destroy');


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

Route::get('/login', function () {
    return view('login');
});

Route::get('/registro', function () {
    return view('registro');
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

Route::get('/elegirproyecto', function () {
    return view('elegirProyecto');
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

Route::get('/clientes','UsuarioController@create');
