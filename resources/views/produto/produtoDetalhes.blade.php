@extends('templetes.templete')

@section('content')

<h1 class="text-center">Visualizar</h1> <hr>

<div class="form-style-1">
<div class="d-flex justify-content-center">
    @if (session('mensagemDeSucesso'))
            <div style="width: 200%"; class="alert alert-success">
                {{ session('mensagemDeSucesso') }}
            </div>
    @endif
</div>
</div>

<div class="text-center">

    <div class="container">
        <div class="row">
          <div class="col">
            <h6>COD Marca:</h6>
          </div>
          <div class="col">
            <h6>COD Modelo:</h6>
          </div>
          <div class="col">
            <h6>Marca:</h6>
          </div>
          <div class="col">
            <h6>Modelo:</h6>
          </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
          <div class="col">
            {{$list->idmarca}}
          </div>
          <div class="col">
            {{$list->idmarca}}
          </div>
          <div class="col">
            {{$list->nome_marca}}
          </div>
          <div class="col">
            {{$list->modelo_produto}}
          </div>
        </div>
    </div>
<br>

    <div class="container">
        <div class="row">
          <div class="col">
            <h6> Cor:</h6>
          </div>
          <div class="col">
            <h6>REF:</h6>
          </div>
          <div class="col">
            <h6>Estoque:</h6>
          </div>
          <div class="col">
            <h6></h6>
          </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
          <div class="col">
            {{$list->cor_produto}}
          </div>
          <div class="col">
            {{$list->ref_produto}}
          </div>
          <div class="col">
            {{ $list->estoque }}
          </div>
          <div class="col">

          </div>
        </div>
    </div>
<br>
    <div class="container">
        <div class="row">
          <div class="col">
            <h6>Valor Entrada: </h6>
          </div>
          <div class="col">
            <h6>Valor Saída: </h6>
          </div>
          <div class="col">
          </div>
          <div class="col">
          </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
          <div class="col">
            {{number_format($list->valor_entrada, 2, ',', '.')}}
          </div>
          <div class="col">
            {{number_format($list->valor_saida, 2, ',', '.')}}
          </div>
          <div class="col">
          </div>
          <div class="col">
          </div>
        </div>
    </div>

<br><br>


        <a href="/EditarModeloDetalhado/{{$list->id_produto}}">
            <button style="margin-right: 30px" class="btn btn-outline-success">Editar</button>
        </a>

</div>
</div>

@endsection
