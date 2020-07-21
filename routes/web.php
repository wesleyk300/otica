<?php

use Illuminate\Support\Facades\Route;

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
//marca armacao
Route::get('/marca','MarcaControler@index');

Route::get('/marca/createMarca','MarcaControler@createMarca')->name('register.marca.armacao'); //abrir pagina para registrar
Route::post('/marca/registrarMarca','MarcaControler@saveMarca')->name('save.marca.armacao'); //pega os dados para registrar no banco

//modelo armacao

Route::get('/modelo/createModelo','ProdutoController@index')->name('salvar.modelo.armacao'); //abrir pagina para registrar
Route::post('/modelo/registerModelo','ProdutoController@salveModelo')->name('save.modelo'); //abrir pagina para registrar

Route::get('/modelo/{id}','ProdutoController@mostrarModelo')->name('modelo'); //mostra os modelos da marca escolhida
Route::get('/modeloDetalhes/{id}','ProdutoController@mostrarModeloDetalhes'); //mostra os detalhes do produto como o estoque




//Route::get('/teste/{id}','ProdutoController@index');

