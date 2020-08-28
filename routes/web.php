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
<<<<<<< Updated upstream
Route::get('/marca','MarcaControler@index');
=======
Route::get('/marca','MarcaControler@index')->name('marca');
Route::get('/modelos','ProdutoController@exibirModelos')->name('exibirModelos'); //mostra todos dos modelos
>>>>>>> Stashed changes

Route::get('/marca/createMarca','MarcaControler@createMarca')->name('register.marca.armacao'); //abrir pagina para registrar
Route::post('/marca/registrarMarca','MarcaControler@saveMarca')->name('save.marca.armacao'); //pega os dados para registrar no banco

//modelo armacao

Route::get('/modelo/createModelo','ProdutoController@index')->name('salvar.modelo.armacao'); //abrir pagina para registrar
Route::post('/modelo/registerModelo','ProdutoController@salveModelo')->name('save.modelo'); //abrir pagina para registrar

Route::get('/modelo/{id}','ProdutoController@mostrarModelo')->name('modelo'); //mostra os modelos da marca escolhida
Route::get('/modeloDetalhes/{id}','ProdutoController@mostrarModeloDetalhes'); //mostra os detalhes do produto como o estoque

//cadastrar cliente
Route::get('/cliente','ClienteController@index')->name('cliente'); //abrir pagina para registrar
Route::post('/cliente/cadastrar','ClienteController@salvar')->name('cliente.salvar'); //pega os dados para registrar no banco

Route::get('/venda','VendaController@index')->name('venda'); //abrir pagina para registrar
Route::post('/venda/cadastrar','VendaController@salvar')->name('venda.salvar'); //pega os dados para registrar no banco



//Route::get('/teste/{id}','ProdutoController@index');

