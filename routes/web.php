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
Route::get('clientes/novo', 'ClientesController@novo')->name('cliente.novo');
Route::post('clientes/salvar', 'ClientesController@salvar')->name('cliente.salvar');
Route::get('clientes/{clientes}/editar', 'ClientesController@editar');
Route::patch('clientes/{clientes}', 'ClientesController@atualizar');
Route::delete('clientes/{clientes}', 'ClientesController@deletar');

Route::get('funcionarios', 'FuncionariosController@index');
Route::get('funcionarios/novo', 'FuncionariosController@novo');
Route::post('funcionarios/salvar', 'FuncionariosController@salvar');
Route::get('funcionarios/{funcionarios}/editar', 'FuncionariosController@editar');
Route::patch('funcionarios/{funcionarios}', 'FuncionariosController@atualizar');
Route::delete('funcionarios/{funcionarios}', 'FuncionariosController@deletar');

Route::get('vendas', 'VendasController@index');
Route::get('vendas/novo', 'VendasController@novo');
Route::post('vendas/salvar', 'VendasController@salvar');
Route::get('vendas/{vendas}/editar', 'VendasController@editar');
Route::get('vendas/{vendas}/visualizar', 'VendasController@visualizar');
Route::patch('vendas/{vendas}', 'VendasController@atualizar');
Route::delete('vendas/{vendas}', 'VendasController@deletar');
Route::get('vendas/showNome', 'VendasController@showNome');
Route::get('vendas/show', 'VendasController@showValor');

Route::get('user/{email}', 'ShowProfile');

});
