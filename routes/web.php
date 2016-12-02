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
/*
Route::get('/', function () {
    return view('bootstrapTemplate.main');
});  */

//vtW7XXs7Ju
Route::get('/obtenertabla',function(){

    return view('cfe.admin.maniobras_colaboradores.tabla');
});
Route::get('/tabla/daticos',[
    'uses'=>'ColaboradorManiobraController@tabla',
    'as'=>'tabladatos']); 

Route::get('uploadfile',[
    'uses'=>'ColaboradorManiobraController@uploadFile',
    'as'=>'uploadfile']); 

Route::get('/hola1',function(){

	return view('cfe.admin.dashboard');
});

Route::get('/',[
	'uses'=>'Welcome@Bienvenido',
	'as'=>'welcome']); 


Route::resource('colaboradorcontroller','ColaboradorManiobraController');

Route::get('hola',function(){

	return view('sidcfe.main');
});
Route::resource('usuarios','UsuariosController');
Route::resource('colaborador','ColaboradoresController');

Route::get('colaboradorcontroller/Maniobras/{maniobra}',[
     'uses' => 'ColaboradorManiobraController@ver_maniobra',
     'as'=>'colaborador.maniobra']);
//ruta para filtrar por maniobra ademas de area
Route::get('colaboradorcontroller/Maniobras/{maniobra}/{area}',[
     'uses' => 'ColaboradorManiobraController@ver_maniobra_area',
     'as'=>'colaborador.maniobra.area']);


Route::get('colaboradorcontroller/Area/{area}',[
     'uses' => 'ColaboradorManiobraController@ver_area',
     'as'=>'colaborador.area']);

//ruta para filtrar por area ademas de maniobra en especifico
Route::get('colaboradorcontroller/Area/{area}/{maniobra}',[
     'uses' => 'ColaboradorManiobraController@ver_area_maniobra',
     'as'=>'colaborador.area.maniobra']);



Auth::routes();
Route::get('bienvenido', function(){
return view('Admin.main');
});
//Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('usuarios','UsersControllers');
Route::get('usuarios/{id}/destroy1',[
	'uses' => 'UsersControllers@destroy',
	'as' => 'usuarios.destroy1']);