<?php

use Illuminate\Support\Facades\Route;



//Route::get('/marca','MarcaControler@index')->name('marca');
Route::get('/marca/pesquisarMarcas','MarcaControler@index')->name('marca.pesquisar');// pesquisar marca
Route::post('/marca/pesquisarMarcasnome','MarcaControler@localizarNome')->name('marca.pesquisar.nome');// pesquisa no banco a marca


//Route::get('/modelos','ProdutoController@exibirModelos')->name('exibirModelos'); //mostra todos dos modelos

Route::get('/marca/createMarca','MarcaControler@createMarca')->name('register.marca.armacao'); //abrir pagina para registrar
Route::post('/marca/registrarMarca','MarcaControler@saveMarca')->name('save.marca.armacao'); //pega os dados para registrar no banco

//EDITAR MARCA
Route::get('/marca/editarmarca/{id}','MarcaControler@editarMarca')->name('editar.marca.armacao'); //pega os dados para registrar no banco
Route::post('/marca/editarsavemarca','MarcaControler@editarSaveMarca')->name('editarsave.marca.armacao'); //pega os dados para registrar no banco

//modelo armacao
Route::get('/modelo/createModelo','ProdutoController@index')->name('salvar.modelo.armacao'); //abrir pagina para registrar
Route::post('/modelo/registerModelo','ProdutoController@salveModelo')->name('save.modelo'); //abrir pagina para registrar
Route::get('/modelo/buscarModelo','ProdutoController@buscarModelo')->name('buscar.modelo'); //abrir pagina para registrar

//pesquisar modelo
Route::post('/modelo/pesquisarModelo','ProdutoController@pesquisarModelo')->name('pesquisar.modelo'); //abrir pagina para registrar

//modelo lente
Route::get('/lente/createModelo','ProdutoLenteController@index')->name('salvar.modelo.lente'); //abrir pagina para registrar
Route::post('/lente/registerModelo','ProdutoLenteController@salveLente')->name('save.lente'); //abrir pagina para registrar

// tela para buscar o modelo da lente
Route::get('/lente/buscarModelo','ProdutoLenteController@buscarLente')->name('buscar.lente'); //abrir pagina para registrar
Route::post('/lente/pesquisarModelo','ProdutoLenteController@pesquisarLente')->name('pesquisar.lente'); //abrir pagina para registrar
//excluir lente
Route::get('/lente/excluirModelo/{id}','ProdutoLenteController@excluirLente')->name('excluir.lente'); //abrir pagina para registrar

//editar
Route::get('/lente/editarmarca/{id}','ProdutoLenteController@editarlente')->name('editar.lente'); //pega os dados para registrar no banco
Route::post('/lente/editarsavemarca','ProdutoLenteController@editarSavelente')->name('editarsave.lente'); //pega os dados para registrar no banco

//exibir modelos e modelos em detalhe
Route::get('/modelo/{id}','ProdutoController@mostrarModelo')->name('modelo'); //mostra os modelos da marca escolhida
Route::get('/modeloDetalhes/{id}','ProdutoController@mostrarModeloDetalhes')->name('modelo.detalhe'); //mostra os detalhes do produto como o estoque

//modelo armacao editar
Route::get('/EditarModeloDetalhado/{id}','ProdutoController@editarModelo')->name('save.update');;//pagina para editar os dados
Route::post('/saveEditarModeloDetalhado','ProdutoController@saveUpdate')->name('update.modelo');//pagina para editar os dados
Route::get('/modelo/excluir/{id}','ProdutoController@excluir')->name('excluir.modelo');//pagina para editar os dados





































//cadastrar cliente
Route::get('/cliente','ClienteController@index')->name('cliente'); //abrir pagina para registrar
Route::post('/cliente/cadastrar','ClienteController@salvar')->name('cliente.salvar'); //pega os dados para registrar no banco
Route::get('/cliente/pesquisar','ClienteController@pesquisar')->name('cliente.pesquisar'); //pega os dados para registrar no banco

//pesquisar por CPF e NOME
Route::post('/cliente/pesquisarcpf','ClienteController@pesquisarCpf')->name('cliente.pesquisarcpf'); //pega os dados para registrar no banco
Route::post('/cliente/pesquisarnome','ClienteController@pesquisarNome')->name('cliente.pesquisarnome'); //pega os dados para registrar no banco
Route::get('/cliente/pesquisardetalhado/{id}','ClienteController@pesquisarDetalhado')->name('cliente.pesquisardetalhado'); //pega os dados para registrar no banco

//editar e excluir cliente
Route::get('/cliente/editarCliente/{id}','ClienteController@editarCliente')->name('editar.cliente'); //pega os dados para registrar no banco
Route::post('/cliente/salvarEditarCliente','ClienteController@saveEditarCliente')->name('save.editar.cliente'); //pega os dados para registrar no banco

Route::get('/cliente/desativarCliente/{id}','ClienteController@desativarCliente')->name('desativar.cliente'); //pega os dados para registrar no banco
Route::get('/cliente/ativarCliente/{id}','ClienteController@ativarCliente')->name('ativar.cliente'); //pega os dados para registrar no banco


//REGISRAR VENDA
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
Route::get('/consulta/excluirConsulta/{id}','ConsultaController@excluirConsulta')->name('excluir.consulta'); //pega os dados para registrar no banco
