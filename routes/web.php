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

use Illuminate\Routing\RouteGroup;

Route::get('/', function () {
    return view('welcome');
});

Route::get('productos','ProductosController@index')->name('adminproducto');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'],function(){
    Route::get('permiso','PermisoController@index')->name('permiso');
    Route::get('permiso/crear','PermisoController@crear')->name('crear_permiso');

    
    Route::get('rol','RolController@index')->name('rol');
    Route::get('rol/crear','RolController@crear')->name('crear_rol');
    Route::post('rol','RolController@guardar')->name('guardar_rol');
    Route::post('rol','RolController@guardar')->name('guardar_rol');
    Route::get('rol/{id}/editar','RolController@editar')->name('editar_rol');
    Route::put('rol/{id}','RolController@actualizar')->name('actualizar_rol');
    Route::delete('rol/{id}','RolController@eliminar')->name('eliminar_rol');

    Route::get('menu-rol','MenuRolController@index')->name('menu_rol');
});




