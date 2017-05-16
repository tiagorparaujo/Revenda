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
})->name('home');

Route::get('/veiculos', 'VeiculosController@index')->name('veiculos');
Route::match(['post','get'],'/veiculos/create', 'VeiculosController@create')->name('veiculos_cadastrar');
Route::get('/veiculos/{id}', 'VeiculosController@show');
Route::get('/veiculos/{id}/update', 'VeiculosController@update')->name('veiculos_update');
Route::get('/veiculos/{id}/delete', 'VeiculosController@delete')->name('veiculos_delete');




Route::get('/clientes', 'ClientesController@index')->name('clientes');
Route::match(['post','get'],'/clientes/create', 'ClientesController@create')->name('clientes_cadastrar');
Route::get('/clientes/{id}', 'ClientesController@show');
Route::get('/clientes/{id}/update', 'ClientesController@update')->name('clientes_update');
Route::get('/clientes/{id}/delete', 'ClientesController@delete')->name('clientes_delete');





Route::get('/marcas', 'MarcasController@index')->name('marcas');
Route::get('/marcas/create', 'MarcasController@create')->name('marcas_cadastrar');
Route::get('/marcas/{id}', 'MarcasController@show');
Route::get('/marcas/{id}/update', 'MarcasController@update');
Route::get('/marcas/{id}/delete', 'MarcasController@delete');

Route::get('/vendas', 'VendasController@index')->name('vendas');
Route::get('/vendas/create', 'VendasController@create')->name('vendas_cadastrar');
Route::get('/vendas/{id}', 'VendasController@show');
Route::get('/vendas/{id}/update', 'VendasController@update');
Route::get('/vendas/{id}/delete', 'VendasController@delete');