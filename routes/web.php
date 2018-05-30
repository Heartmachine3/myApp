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

Route::get('prueba', function(){
    return "Holamundo" +1;
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

#Route Users
Route::resource('user', 'UserController')->middleware('auth');

Route::resource('jugadores', 'JugadoresController')->middleware('auth');
Route::get('jugadores/{id}/destroy', [
    'uses' => 'JugadoresController@destroy',
    'as' => 'jugadores.destroy'
]);

#Route Paises
Route::resource('paises', 'PaisesController')->middleware('auth');
Route::get('paises/{PaisCodigo}/destroy', [
    'uses' => 'paisesController@destroy',
    'as' => 'paises.destroy'
]);

#Route Ciudades
Route::resource('ciudades', 'CiudadesController')->middleware('auth');
Route::get('paises/{id}/destroy', [
    'uses' => 'CiudadesController@destroy',
    'as' => 'ciudades.destroy'
]);

#Route Empresas
Route::resource('empresas', 'EmpresasController')->middleware('auth');
Route::get('empresas/{id}/destroy', [
    'uses' => 'EmpresasController@destroy',
    'as' => 'empresas.destroy'
]);

#Route Sucursales
Route::resource('sucursales', 'SucursalesController')->middleware('auth');
Route::get('sucursales/{id}/destroy', [
    'uses' => 'SucursalesController@destroy',
    'as' => 'sucursales.destroy'
]);

#Route Empleados
Route::resource('empleados', 'EmpleadosController')->middleware('auth');
Route::get('empleados/{id}/destroy', [
    'uses' => 'EmpleadosController@destroy',
    'as' => 'empleados.destroy'
]);

#Route Sedes
Route::resource('sedes', 'SedesController')->middleware('auth');
Route::get('sedes/{id}/destroy', [
    'uses' => 'SedesController@destroy',
    'as' => 'sedes.destroy'
]);

#Route Arbitros
Route::resource('arbitros', 'ArbitrosController')->middleware('auth');
Route::get('arbitros/{id}/destroy', [
    'uses' => 'ArbitrosController@destroy',
    'as' => 'arbitros.destroy'
]);

#Route Seleccion
Route::resource('selecciones', 'SeleccionesController')->middleware('auth');
Route::get('selecciones/{id}/destroy', [
    'uses' => 'SeleccionesController@destroy',
    'as' => 'selecciones.destroy'
]);

#Route Programaciones
Route::resource('programaciones', 'ProgramacionesController')->middleware('auth');
Route::get('programaciones/{id}/destroy', [
    'uses' => 'ProgramacionesController@destroy',
    'as' => 'programaciones.destroy'
]);