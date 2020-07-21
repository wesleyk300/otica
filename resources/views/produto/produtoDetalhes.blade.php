@extends('templetes.templete')

@section('content')

<h1 class="text-center">Visualizar</h1> <hr>

<div class="text-center">


        COD Marca: </br>{{$list->idmarca}} </br></br>
        COD Modelo: </br>{{$list->idmarca}} </br></br>
        Nome Marca: </br>{{$list->nome_marca}} </br></br>
        Nome Modelo: </br>{{$list->modelo_produto}}</br></br>
        Cor: </br>{{$list->cor_produto}}</br></br>
        REF: </br>{{$list->ref_produto}}</br></br>
        Valor Entrada: </br>{{number_format($list->valor_entrada, 2, ',', '.')}}</br></br>
        Valor Saída: </br>{{number_format($list->valor_saida, 2, ',', '.')}}</br></br>
        Estoque:</br>{{$list->estoque}}</br></br>

</div>

@endsection
