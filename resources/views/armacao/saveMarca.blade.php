@extends('templetes.templete')

@section('content')

<p class="ex1">

  <div class="form-style-1">
    <h2>
      <p class="font-weight-bolder">Cadastro de Nova Marca de Armação</p>
      <br><br>
    </h2>
    <form method="POST" action="{{route('save.marca.armacao')}}">

    @if (session('mensagem'))
        <div class="alert alert-success">
            {{ session('mensagem') }}
        </div>
        @endif

    @csrf
      <p class="ex1">
      <div class="form-group">
        <label for="exampleFormControlInput1">Marca:</label>
        <input type="text" name="marca" class="form-control" id="exampleFormControlInput1" placeholder="Digite...">
        <br>
        
        <br><br>
        <div class="col text-center">
          <button type="submit" class="btn btn-outline-primary">Salvar</button>
        </div>
      </div>

    </form>
    <div></div>
    </p>

    @endsection

