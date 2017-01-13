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

//vtW7XXs7Juro


Route::get('Estadisticas/general',[
    'uses'=>'Estadisticas@maniobras_areas',
    'as'=>'Estadisticas.general']);
Route::get('DetalleColaboradorAjax/{clave}','ColaboradorManiobraController@detalleColaboradorAjax');
Route::get('DetalleColaborador/{id}','ColaboradoresController@show');

Route::get('imagen/{id1}','ColaboradoresController@foto');


Route::get('/obtenertabla',function(){

    return view('cfe.admin.maniobras_colaboradores.tabla');
});
Route::get('/tabla/daticos',[
    'uses'=>'ColaboradorManiobraController@tabla',
    'as'=>'tabladatos']); 

Route::get('uploadfile',[
    'uses'=>'ColaboradorManiobraController@uploadFile',
    'as'=>'uploadfile']); 

/*
Route::get('/hola1',function(){

	return view('cfe.admin.dashboard');
}); */


Route::get('/hola1',[
    'uses'=>'ColaboradorManiobraController@index',
    'as'=>'hola1']);

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
Route::get('colaboradorcontroller/Maniobras/{maniobra111}/{area111}',[
     'uses' => 'ColaboradorManiobraController@retornardaticos',
     'as'=>'colaborador.maniobra.area']);

Route::get('colaboradorcontroller/Maniobras/Excel/{man}/{ar}',[
     'uses' => 'pdfController@filtrarManiobraArea',
     'as'=>'colaborador.filtrar.maniobra.area']);
//

//ruta para filtrar en base a un rango de fechas
Route::get('colaboradorcontroller/Fechas/{fecha111}/{fecha222}',[
     'uses' => 'ColaboradorManiobraController@rango_fechas',
     'as'=>'colaborador.maniobra.fecha']);

Route::get('colaboradorcontroller/Fechas/Excel/{fecha1}/{fecha2}',[
     'uses' => 'pdfController@fechas',
     'as'=>'colaborador.maniobra.fecharango']);


//


Route::get('colaboradorcontroller/Area1/{area1}',[
    'uses'=>'ColaboradorManiobraController@ver_area1',
    'as'=>'maniobra.filtro']);


Route::get('colaboradorcontroller/maniobra/{maniobra1}','ColaboradorManiobraController@obtener');

Route::get('mostrar', 'ColaboradorManiobraController@max_maniobra');

Route::get('metas', 'MetasControllers@metas');

Route::get('metas-area/{area}/{anio}',['uses' => 'MetasControllers@metasconsulta',
    'as'=>'metas-ar']);



//ruta para obtener con ajax desde datatables solo area en especifico

Route::get('colaboradorcontroller/AreaDatos/{areadatos}',[
    'uses'=>'ColaboradorManiobraController@areadatos',
    'as'=>'ruta.areas']);

Route::get('colaboradorcontroller/cachar/{area23}','ColaboradorManiobraController@areadatosobtener');


Route::get('colaboradorcontroller/Area/{area}',[
     'uses' => 'ColaboradorManiobraController@ver_area',
     'as'=>'colaborador.area']);
//ruta para filtrar por area ademas de maniobra en especifico
Route::get('colaboradorcontroller/Area/{area}/{maniobra}',[
     'uses' => 'ColaboradorManiobraController@ver_area_maniobra',
     'as'=>'colaborador.area.maniobra']);

//listado general

Route::get('colaboradorcontroller/listado/general',[
     'uses' => 'ColaboradorManiobraController@listado',
     'as'=>'colaborador.listado']);

Auth::routes();
Route::get('bienvenido', function(){
return view('Admin.main');
});
//Route::get('/home', 'HomeController@index');


    
Route::group(['prefix' => 'excel'], function() {
    Route::get('all', [
        'uses'=>'pdfController@index',
        'as'=>'excel.todos']);


    Route::get('area/{dato}',[
        'uses'=>'pdfController@area',
        'as' =>'excel.area']);

    Route::get('maniobra/{maniobra}',[
    'uses'=>'pdfController@maniobra',
    'as'=>'excel.maniobra']
        );
    
});
Route::get('colaborador/evaluacion/{rpe}','pdfController@colaborador');
Route::group(['prefix' => 'pdf'], function() {
    Route::get('all', 'ExcelController@evaluaciones_all');
   
});

Route::group(['prefix' => 'admin'], function() {
Route::resource('slider','ConfiguracionesSlidersControllers');
Route::resource('metas','MetasControllers');
Route::resource('filtros','FiltrosControllers');


   
});


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('usuarios','UsersControllers');
Route::get('usuarios/{id}/destroy1',[
	'uses' => 'UsersControllers@destroy',
	'as' => 'usuarios.destroy1']);

