@extends('templetes.templete')

@section('content')


<p class="ex1">

  <div class="form-style-1">
    <h2>
        <p>PESQUISXXXXXXXXXXADO PELO CPF</p>
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

        <br>
        <h4>Nome:</h4>
        <label for="exampleFormControlInput1">{{ $item->nome_cliente }}</label>
        <br>
        <h4>CPF:</h4>
        <label for="exampleFormControlInput1">{{ $item->cpf_cliente }}</label>
        <br>

        <a
            class="btn btn-outline-success"
            href="/cliente/pesquisardetalhado/{{$item->id_cliente}}"
            role="button">
            Exibir
        </a>
        <hr>
    @endforeach

    </div>
</p>

    @endsection
