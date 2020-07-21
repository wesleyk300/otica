@extends('templetes.templete')

@section('content')

</br></br>

<div class="text-center">


        COD Marca: </br>{{$list->idmarca}} - {{$list->nome_marca}}</br></br>
        COD Modelo: </br>{{$list->id_produto}} </br></br>
        Nome Modelo: </br>{{$list->modelo_produto}}</br></br>
        Cor: </br>{{$list->cor_produto}}</br></br>
        REF: </br>{{$list->ref_produto}}</br></br>
        Valor Entrada: </br>{{number_format($list->valor_entrada, 2, ',', '.')}}</br></br>
        Valor Saída: </br>{{number_format($list->valor_saida, 2, ',', '.')}}</br></br>
        Estoque:</br>{{$list->estoque}}</br></br>

        <a href="/EditarModeloDetalhado/{{$list->id_produto}}">
            <button class="btn btn-outline-primary">Editar</button>
        </a>
        </br></br>

</div>

@endsection
