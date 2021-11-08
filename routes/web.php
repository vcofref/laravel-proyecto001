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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contacto', function(){
    return "formulario de contacto";
});

Route::get('/productos/{producto?}/{precio?}', function($producto="Bebida", $precio=null){
    return view('productos', array(
        'producto' => $producto,
        'precio' => $precio
    ));
})->where([
    'producto' => '[A-Za-z]+',
    'precio' => '[0-9]+'
]);

Route::match(['get','post'],'/hola-mundo', function (){
    return "Hola Victor";
});

Route::get('/listado/{titulo}', function($titulo){
    return view('listado')
    ->with('titulo', $titulo)
    ->with('frutas', array('Naranja', 'Pera', 'Manzana', 'Frutilla'));
});

Route::get('/verduras','VerdurasController@index');
Route::get('/verduras/editar','VerdurasController@editarVerdura');
Route::get('/verduras/eliminar', [
    'uses' => 'VerdurasController@eliminarVerdura',
    'as' => 'eliminarVerdura'
]);

Route::get('/verduras/agregar','VerdurasController@agregarVerdura');

Route::post('guardarFormulario','VerdurasController@guardarVerdura');