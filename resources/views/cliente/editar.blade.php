@extends('templetes.templete')

@section('content')


<p class="ex1">

  <div class="form-style-1">
    <h2>
      <p class="font-weight-bolder">Editar dados do Cliente</p>
    </h2>
    <br>


    @if (session('mensagem'))
        <div class="alert alert-success">
            {{ session('mensagem') }}
        </div>
    @endif




    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
          <?php
          $count=0;
            foreach ($errors->all() as $error){
              $count++;
                echo "$count - $error</br>";
              }
          ?>
        </ul>
    </div>
    @endif


    <br>
    <form method="POST" action="{{route('save.editar.cliente')}}">
    @csrf

    <input class="form-control" type="hidden" name="id_cliente" value="{{ $resultado->id_cliente }}">


        <label for="exampleFormControlInput1">Nome:</label>
        <input name="nome" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite..."
        value="{{ $resultado->nome_cliente }}">
        <br>

        <label for="exampleFormControlInput1">CPF:</label>
        <input name="cpf_cliente" type="text" class="form-control" id="cpf" placeholder="Digite..."
        value="{{ $resultado->cpf_cliente }}">
        <br>

        <label for="exampleFormControlInput1">Endereço:</label>
        <input name="endereco" type="text" class="form-control" placeholder="Digite..."
        value="{{$resultado->endereco}}">
        <br>

        <label for="exampleFormControlInput1">Data de Nascimento:</label>
        <input name="data_nascimento" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Digite..."
        value="{{$resultado->data_nascimento}}">
        <br>

        <label for="exampleFormControlInput1">Telefone:</label>
        <input name="telefone" type="text" class="form-control" id="telefone" placeholder="Digite..."
        value="{{$resultado->telefone_cliente}}">
        <br>

        <label for="exampleFormControlInput1">Celular:</label>
        <input name="celular" type="text" class="form-control" id="celular" placeholder="Digite..."
        value="{{$resultado->celular_cliente}}">
        <br>




            <div class="col text-center">

            <a
            class="btn btn-outline-primary"
            style="margin: 0 20px;"
            href="/cliente/pesquisar"
            role="button">
            Voltar
            </a>

            <button type="submit" class="btn btn-outline-primary">Salvar</button>

            </div>





    </form>
   </div>
    </p>

    @endsection
