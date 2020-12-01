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

Route::get('/index', function () {
    return view('index');
});

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