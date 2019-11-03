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
Route::get('usuarios', 'UsuarioController@index');

Route::group(['middleware' => 'web'], function () {

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('produtos', 'ProdutosController@index');
Route::get('produtos/novo', 'ProdutosController@novo');
Route::post('produtos/salvar', 'ProdutosController@salvar');
Route::get('produtos/{produtos}/editar', 'ProdutosController@editar');
Route::patch('produtos/{produtos}', 'ProdutosController@atualizar');
Route::delete('produtos/{produtos}', 'ProdutosController@deletar');

Route::get('clientes', 'ClientesController@index');
Route::get('clientes/novo', 'ClientesController@novo');
Route::post('clientes/salvar', 'ClientesController@salvar');
Route::get('clientes/{clientes}/editar', 'ClientesController@editar');
Route::patch('clientes/{clientes}', 'ClientesController@atualizar');
Route::delete('clientes/{clientes}', 'ClientesController@deletar');


});
