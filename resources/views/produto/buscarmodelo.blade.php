@extends('templetes.templete')


@section('content')



<p class="ex1">

  <div class="form-style-1">
    <h2>
      <p class="font-weight-bolder">Pesquisar Modelo</p>
    </h2>

<br>
    @if (session('mensagem'))
        <div class="alert alert-success">
            {{ session('mensagem') }}
        </div>
    @endif




<hr>
      <form method="POST" action="{{route('pesquisar.modelo')}}">
        @csrf
          <p class="ex1">
          <div class="form-group">

           <br>
            <label for="exampleFormControlInput1">Buscar por Nome:</label>
            <input class="form-control" name="nome" type="text" value="{{old('nome')}}" placeholder="Digite aqui ...">
            <br>

            <div class="col text-center">
              <button type="submit" class="btn btn-outline-primary">Buscar</button>
            </div>
          </div>
<hr>
          <br>
          <div class="col text-center">
            <button type="submit" class="btn btn-outline-primary">Mostrar Todos</button>
          </div>

        </form>






    <div></div>
    </p>



    @endsection
