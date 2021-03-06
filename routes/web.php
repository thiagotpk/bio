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

Route::get('/', 'HomeController@index');

Route::get('clientes', 'ClientesController@index');
Route::get('clientes/novo', 'ClientesController@novo');
Route::get('clientes/{cliente}/editar', 'ClientesController@editar');
Route::post('clientes/salvar', 'ClientesController@salvar');
Route::patch('clientes/{cliente}', 'ClientesController@atualizar');
Route::delete('clientes/{cliente}', 'ClientesController@deletar');

Route::get('unidades', 'UnidadesController@index');
Route::get('unidades/novo', 'UnidadesController@novo');
Route::post('unidades/salvar', 'UnidadesController@salvar');
Route::get('unidades/{unidade}/editar', 'UnidadesController@editar');
Route::patch('unidades/{unidade}', 'UnidadesController@atualizar');
Route::delete('unidades/{unidade}', 'UnidadesController@deletar');

Route::get('perfil/editar', 'HomeController@perfil');
Route::patch('perfil/{perfil}', 'HomeController@atualizar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
