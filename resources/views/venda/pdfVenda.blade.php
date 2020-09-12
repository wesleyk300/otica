<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style>
p {
  font-size: 15px;
  line-height: 5px;
},

negrito {
  font-size: 15px;
  font-weight: bold;
},

h5 {
  font-size: 15px;
  line-height: 5px;
},

h6 {
  font-size: 15px;
  line-height: 10px;
},

tabelatitulo {
  font-size: 15px;
  line-height: 10px;
},

tabelacorpo {
  font-size: 15px;
  line-height: 10px;
},
</style>


    <title>PDF</title>
  </head>
  <body>
      <h5>NOME DA CLINICA</h5>
      <p>nome da atendente</p>

         <h5>Cliente:</h5>
         <p>{{$clienteVenda->nome_cliente}}</p>

         <h5>CPF:</h5>
         <p>{{$clienteVenda->cpf_cliente}}</p>
<hr>

<table width="80%" align=center>
  <tr>
     <td><p><negrito>COD</negrito></p></td>
     <td><p><negrito>Total</negrito></p></td>
     <td><p><negrito>Pagamento</negrito></p></td>
     <td><p><negrito>Data</negrito></p></td>
     <td><p><negrito>Hora</negrito></p></td>
  </tr>
  <tr>
       <td><p>{{$clienteVenda->id_venda}}</p></td>
       <td><p>{{number_format($clienteVenda->valor_venda, 2, ',', '.')}}</p></td>
       <td><p>{{$clienteVenda->tipo_pagamento}}</p></td>
       <td><p>{{ date( 'd/m/Y' , strtotime($clienteVenda->created_at))}}</p></td>
       <td><p>{{ date( 'H:i' , strtotime($clienteVenda->created_at))}}</p></td>
  </tr>
</table>
<hr>


<br>

<h5>Descrição:</h5><br>
<table width="100%" align=center>
    <tr>
       <td><p><negrito>ID</negrito></p></td>
       <td><p><negrito>Produto</negrito></p></td>
       <td><p><negrito>Quantidade</negrito></p></td>
       <td><p><negrito>Valor</negrito></p></td>
       <td><p><negrito>Subtotal</negrito></p></td>
    </tr>
    @foreach($itens as $item)
    <tr>
        <th scope="row">{{$item->id_produto}}</th>
        <td>{{$item->modelo_produto}}</td>
        <td>{{$item->quantidade_saida}}</td>
        <td>{{number_format($item->valor_saida, 2, ',', '.')}}</td>
        <td>{{number_format($item->subtotal, 2, ',', '.')}}</td>
      </tr>
    @endforeach
    <tr style="font-weight: bold;">
        <td><p><negrito>#</negrito></p></td>
        <td><p><negrito>SubTotal</negrito></p></td>
        <td><p><negrito>***</negrito></p></td>
        <td><p><negrito>***</negrito></p></td>
        <td><p><negrito>{{number_format($item->valor_total, 2, ',', '.')}}</negrito></p></td>
      </tr>

      <tr style="font-weight: bold;">
        <td><p>#</td>
        <td><p>Desconto</td>
        <td><p>***</td>
        <td><p>***</td>
        <td><p>{{number_format($item->desconto, 2, ',', '.')}}</td>
      </tr>

      <tr style="font-weight: bold;">
        <td><p>{{$clienteVenda->id_venda}}</td>
        <td><p>Total</td>
        <td><p>***</td>
        <td><p>***</td>
        <td><p>{{number_format($item->valor_venda, 2, ',', '.')}}</td>
      </tr>
  </table>



<br><br><br>

<div style="text-align: center;">
    <h5>_______________________________________________________</h5>
    <h6>Ass: {{$clienteVenda->nome_cliente}}</h6>
</div>





  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

