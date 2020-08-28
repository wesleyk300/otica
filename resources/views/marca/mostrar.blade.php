@extends('templetes.templete')

@section('content')

<h1 class="text-center">Visualizar</h1> <hr>

<div class="text-center">
@foreach ($mostarModelo as $p)
           
        COD: </br>{{$p->idmarca}} </br></br>
        Nome: </br>{{$p->nome_marca}} </br></br>
        Modelo: </br>{{$p->modelo_produto}}</br></br>
        Cor: </br>{{$p->cor_produto}}</br></br>
        REF: </br>{{$p->ref_produto}}</br></br>
        Valor Entrada: </br>{{$p->valor_entrada}}</br></br>
        Valor Saída: </br>{{$p->valor_saida}}</br></br>
        Tratamento: </br>{{$p->tratamento_produto}}</br></br>
        Estoque:</br>{{$p->estoque}}</br></br>

@endforeach
</div>



@endsection