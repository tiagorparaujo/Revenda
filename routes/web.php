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

Route::get('/', function () {
    return view('layout');
});

Route::get('/veiculos', 'VeiculosController@index');
Route::get('/veiculos/{id}', 'VeiculosController@show');
Route::get('/veiculos/create', 'VeiculosController@create');
Route::get('/veiculos/{id}/update', 'VeiculosController@update');
Route::get('/veiculos/{id}/delete', 'VeiculosController@delete');


Route::get('/clientes', 'ClientesController@index');
Route::get('/clientes/{id}', 'ClientesController@show');
Route::get('/clientes/create', 'ClientesController@create');
Route::get('/clientes/{id}/update', 'ClientesController@update');
Route::get('/clientes/{id}/delete', 'ClientesController@delete');

Route::get('/marcas', 'MarcasController@index');
Route::get('/marcas/{id}', 'MarcasController@show');
Route::get('/marcas/create', 'MarcasController@create');
Route::get('/marcas/{id}/update', 'MarcasController@update');
Route::get('/marcas/{id}/delete', 'MarcasController@delete');

Route::get('/vendas', 'VendasController@index');
Route::get('/vendas/{id}', 'VendasController@show');
Route::get('/vendas/create', 'VendasController@create');
Route::get('/vendas/{id}/update', 'VendasController@update');
Route::get('/vendas/{id}/delete', 'VendasController@delete');

Route::get('/clientes', 'ClientesController@index');
Route::get('/clientes/{id}', 'ClientesController@show');
Route::get('/clientes/create', 'ClientesController@create');
Route::get('/clientes/{id}/update', 'ClientesController@update');
Route::get('/clientes/{id}/delete', 'ClientesController@delete');
