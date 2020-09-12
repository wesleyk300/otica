@extends('templetes.templete')


@section('content')



<p class="ex1">

  <div class="form-style-1">
    <h2>
      <p class="font-weight-bolder">Cadastro de Nova Consulta</p>
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

    <form method="POST" action="{{route('register.buscacpf')}}">
    @csrf
      <p class="ex1">
      <div class="form-group">
        <br>
        @if (session('mensagemcpf'))
            <div class="alert alert-warning">
                {{ session('mensagemcpf') }}
            </div>
            @endif
        <br>
        <label for="exampleFormControlInput1">Buscar por CPF:</label>
        <input class="form-control" name="buscacpf" type="text" id= "cpf" value="{{old('buscacpf')}}" placeholder="Buscar por CPF">
        <br>

        <div class="col text-center">
          <button type="submit" class="btn btn-outline-primary">Buscar</button>
        </div>
      </div>

    </form>
<hr>
      <form method="POST" action="{{route('register.buscanome')}}">
        @csrf
          <p class="ex1">
          <div class="form-group">
            <br>
            @if (session('mensagemnome'))
            <div class="alert alert-warning">
                {{ session('mensagemnome') }}
            </div>
            @endif
            <br>
            <label for="exampleFormControlInput1">Buscar por Nome:</label>
            <input class="form-control" name="nome" type="text" value="{{old('nome')}}" placeholder="Digite aqui ...">
            <br>

            <div class="col text-center">
              <button type="submit" class="btn btn-outline-primary">Buscar</button>
            </div>
          </div>

        </form>






    <div></div>
    </p>



    @endsection
