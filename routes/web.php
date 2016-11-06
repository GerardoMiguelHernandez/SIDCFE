<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
}); 


Route::resource('colaboradorcontroller','ColaboradorManiobraController');

Route::get('hola','UsuariosController@index');
Route::resource('usuarios','UsuariosController');
Route::resource('colaborador','ColaboradoresController');



Auth::routes();
Route::get('bienvenido', function(){
return view('admin.main');
});
Route::get('/home', 'HomeController@index');
