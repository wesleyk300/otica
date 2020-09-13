@extends('templetes.templete')

@section('content')


<p class="ex1">

  <div class="form-style-1">
    <h2>
        <p>** TESTE PESQUISADO PELO CPF **</p>
      <p class="font-weight-bolder">Exames Realizados:</p>
    </h2>
    <br>

    @csrf



        <h4>Nome:</h4>
        <label for="exampleFormControlInput1">{{ $clientes->nome_cliente }}</label>
        <br>
        <h4>CPF:</h4>
        <label for="exampleFormControlInput1">{{ $clientes->cpf_cliente }}</label>
        <br>

        <br>
        <br>



        @foreach ($resultado as $item)
        <h4>{{ date( 'd/m/Y' , strtotime($item->created_at))}}</h4>

        <br>
        <a
            class="btn btn-outline-success"
            href="/pesquisar/detalhe/{{$item->id_consulta}}"
            role="button">
            Exibir
        </a>
        <hr>
 @endforeach
 {{ $resultado->links() }}



    </div>









    </div>
</p>

    @endsection
