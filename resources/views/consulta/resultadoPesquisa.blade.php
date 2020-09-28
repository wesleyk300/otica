@extends('templetes.templete')

@section('content')


<p class="ex1">

  <div class="form-style-1">
    <h2>
        <p>PESQUISADO PELO Nome</p>
      <p class="font-weight-bolder">Resultado:</p>
    </h2>
    <br>
    <hr>

    @foreach ($resultado as $item)
    @csrf
        <h4>Status:</h4>
        @if ($item->status == 0)
            <label for="exampleFormControlInput1">Ativado </label>
        @else
            <label for="exampleFormControlInput1"> Desativado</label>
        @endif
        <h4>Nome:</h4>
        <label for="exampleFormControlInput1">{{ $item->nome_cliente }}</label>
        <br>
        <h4>CPF:</h4>
        <label for="exampleFormControlInput1">{{ $item->cpf_cliente }}</label>
        <br>
        <h4>Data de Nascimento:</h4>
        <label for="exampleFormControlInput1">{{ $item->data_nascimento }}</label>
        <br>


            <div class="row">
              <div class="col">
        <h4>Telefone:</h4>
        <label for="exampleFormControlInput1">{{ $item->telefone_cliente }}</label>
            </div>
            <div class="col">
        <h4>Celular:</h4>
        <label for="exampleFormControlInput1">{{ $item->celular_cliente }}</label>
    </div>
    <div class="col"></div>
    <div class="col"></div>

</div>
        <br>
        <a
            class="btn btn-outline-success"
            href="/pesquisar/nome/{{$item->id_cliente}}"
            role="button">
            Pesquisar Consultas
        </a>
        <hr>
    @endforeach

    </div>
</p>

    @endsection
