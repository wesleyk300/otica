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

Route::get('/marca','MarcaControler@index')->name('marca');
Route::get('/modelos','ProdutoController@exibirModelos')->name('exibirModelos'); //mostra todos dos modelos


Route::get('/marca/createMarca','MarcaControler@createMarca')->name('register.marca.armacao'); //abrir pagina para registrar
Route::post('/marca/registrarMarca','MarcaControler@saveMarca')->name('save.marca.armacao'); //pega os dados para registrar no banco

//modelo armacao
Route::get('/modelo/createModelo','ProdutoController@index')->name('salvar.modelo.armacao'); //abrir pagina para registrar
Route::post('/modelo/registerModelo','ProdutoController@salveModelo')->name('save.modelo'); //abrir pagina para registrar

//modelo lente
Route::get('/lente/createModelo','ProdutoLenteController@index')->name('salvar.modelo.lente'); //abrir pagina para registrar
Route::post('/lente/registerModelo','ProdutoLenteController@salveLente')->name('save.lente'); //abrir pagina para registrar

Route::get('/modelo/{id}','ProdutoController@mostrarModelo')->name('modelo'); //mostra os modelos da marca escolhida
Route::get('/modeloDetalhes/{id}','ProdutoController@mostrarModeloDetalhes'); //mostra os detalhes do produto como o estoque

//cadastrar cliente
Route::get('/cliente','ClienteController@index')->name('cliente'); //abrir pagina para registrar
Route::post('/cliente/cadastrar','ClienteController@salvar')->name('cliente.salvar'); //pega os dados para registrar no banco

Route::get('/venda','VendaController@index')->name('venda'); //abrir pagina para registrar
Route::post('/venda/cadastrar','VendaController@salvar')->name('venda.salvar'); //pega os dados para registrar no banco

//GERAR PDF
Route::get('/pdf/{id}','VendaController@gerarPDF'); //extrair PDF

//REGISTRAR CONSULTA
//PAGINA DE BUSCAR
Route::get('/consulta/createBusca','ConsultaController@busca')->name('register.busca'); //abrir pagina para consulta

//BUSCAR POR CPF OU NOME
Route::post('/consulta/createBuscacpf','ConsultaController@buscacpf')->name('register.buscacpf'); //abrir pagina para registrar
Route::post('/consulta/createBuscanome','ConsultaController@buscaNome')->name('register.buscanome'); //abrir pagina para registrar

//PAGE PARA REGISTRAR CONSUL E SALVAR
Route::get('/consulta/createConsulta/{id}','ConsultaController@registrarConsulta')->name('register.consulta'); //abrir pagina para registrar
Route::post('/consulta/registrarConsulta','ConsultaController@saveConsulta')->name('save.consulta'); //pega os dados para registrar no banco

// PESQUISAR AS CONSULTAS, EDITAR, EXCLUIR
//PESQUISAR POR CPF OU NOME
Route::get('/pesquisar/consulta','ConsultaController@pesquisar')->name('pesquisar.consulta'); //pega os dados para registrar no banco

//PESQUISAR POR CPF OU NOME
Route::post('/pesquisar/cpf','ConsultaController@pesquisarCpf')->name('pesquisar.cpf'); //pega os dados para registrar no banco
Route::post('/pesquisar/nome','ConsultaController@pesquisarNome')->name('pesquisar.nome'); //pega os dados para registrar no banco

//LISTAR AS CONSULTAS REALIZADAS
Route::get('/pesquisar/nome/{id}','ConsultaController@listarConsultas')->name('listar.consulta'); //pega os dados para registrar no banco

//MOSTAR CONSULTA DETALHADA
Route::get('/pesquisar/detalhe/{id}','ConsultaController@consultaDetalhada')->name('pesquisa.detalhada'); //pega os dados para registrar no banco

//EDITAR E SALVAR CONSULTA
Route::get('/consulta/editarConsulta/{id}','ConsultaController@editarConsulta')->name('editar.consulta'); //pega os dados para registrar no banco
Route::post('/consulta/salvarConsulta','ConsultaController@salvarConsulta')->name('salvar.consulta'); //pega os dados para registrar no banco



