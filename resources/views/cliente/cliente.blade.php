@extends('templetes.templete')

@section('content')


<p class="ex1">

  <div class="form-style-1">
    <h2>
      <p class="font-weight-bolder">Cadastro de Novo Cliente</p>
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
    <form method="POST" action="{{route('cliente.salvar')}}">
    @csrf
        <label for="exampleFormControlInput1">Nome:</label>
        <input name="nome" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite..."
        value="{{old('nome')}}">
        <br>

        <label for="exampleFormControlInput1">CPF:</label>
        <input name="cpf" type="text" class="form-control" id="cpf" placeholder="Digite..."
        value="{{old('cpf')}}">
        <br>

        <label for="exampleFormControlInput1">Endereço:</label>
        <input name="endereco" type="text" class="form-control" placeholder="Digite..."
        value="{{old('endereco')}}">
        <br>

        <label for="exampleFormControlInput1">Data de Nascimento:</label>
        <input name="data_nascimento" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Digite..."
        value="{{old('data_nascimento')}}">
        <br>

        <label for="exampleFormControlInput1">Telefone:</label>
        <input name="telefone" type="text" class="form-control" id="telefone" placeholder="Digite..."
        value="{{old('telefone')}}">
        <br>

        <label for="exampleFormControlInput1">Celular:</label>
        <input name="celular" type="text" class="form-control" id="celular" placeholder="Digite..."
        value="{{old('celular')}}">
        <br>


        <div class="col text-center">
          <button type="submit" class="btn btn-outline-primary">Salvar</button>
            </div>
          </div>

    </form>
    <div></div>
    </p>

    @endsection
