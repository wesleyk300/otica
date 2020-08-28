@extends('templetes.templete')

@section('content')

<p class="ex1">
    <div class="form-style-1">
        <p class="font-weight-bolder">Venda Concluída</p>
         <br>
         <h5>Cliente:</h5>
         <h5>{{$clienteVenda->nome_cliente}}</h5>
<br>
         <h5>CPF:</h5>
         <h5>{{$clienteVenda->cpf_cliente}}</h5>
<hr>
<br>
<div class="container">
    <div class="row">
        <div class="col">
            <h5>COD</h5>
        </div>
        <div class="col">
            <h5>Total</h5>
        </div>

        <div class="col">
            <h5>Pagamento</h5>
        </div>

        <div class="col">
            <h5>Data/Hora</h5>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h5>{{$clienteVenda->id_venda}}</h5>
        </div>
        <div class="col">
            <h5>{{$clienteVenda->valor_venda}}</h5>
        </div>

        <div class="col">
            <h5>{{$clienteVenda->tipo_pagamento}}</h5>
        </div>

        <div class="col">
            <h5>{{ date( 'd/m/Y H:i:s' , strtotime($clienteVenda->created_at))}}</h5>
        </div>
    </div>


</div>

<hr>


<br>
    <h5>Descrição:</h5>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Produto</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Valor</th>

    </tr>
  </thead>
  <tbody>

  @foreach($itens as $item)
    <tr>
      <th scope="row">{{$item->id_produto}}</th>
      <td>{{$item->modelo_produto}}</td>
      <td>{{$item->quantidade_saida}}</td>
      <td>{{number_format($item->valor_saida, 2, ',', '.')}}</td>

    </tr>
 @endforeach
    <tr>
      <th class="table-dark" scope="row">#</th>
      <td class="table-dark">SubTotal</td>
      <td class="table-dark"></td>
      <td class="table-dark">{{number_format($item->valor_total, 2, ',', '.')}}</td>
    </tr>

    <tr>
      <th class="table-dark" scope="row">#</th>
      <td class="table-dark">Desconto</td>
      <td class="table-dark"></td>
      <td class="table-dark">{{number_format($item->desconto, 2, ',', '.')}}</td>
    </tr>

    <tr>
      <th class="table-dark" scope="row">{{$clienteVenda->id_venda}}</th>
      <td class="table-dark" >Total</td>
      <td class="table-dark" ></td>
      <td class="table-dark" >{{number_format($item->valor_venda, 2, ',', '.')}}</td>
    </tr>


  </tbody>
</table>



</p>

    @endsection
