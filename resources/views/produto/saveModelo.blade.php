@extends('templetes.templete')

@section('content')


<p class="ex1">

  <div class="form-style-1">
    <h2>
      <p class="font-weight-bolder">Cadastro de Novo Modelo de Armação</p>
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
    <form method="POST" action="{{route('save.modelo')}}">
    @csrf
      <p class="ex1">
      <div class="form-group">
        <label for="exampleFormControlInput1">Marca:</label>
      <br>

        <select class="browser-default custom-select" name="marca">
           <option value="" selected>Selecione</option>
           
           @foreach($list as $lists)
           @if($lists->idmarca == old('marca'))

              <option value="{{$lists->idmarca}}" selected>{{$lists->nome_marca}}</option>                
              @else

              <option value="{{$lists->idmarca}}">{{$lists->nome_marca}}</option>

              @endif
            @endforeach

                          
            
          </select>


        <br><br>
        <label for="exampleFormControlInput1">Modelo:</label>
        <input name="modelo" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite..."
        value="{{old('modelo')}}">
        <br>

        <label for="exampleFormControlInput1">Cor:</label>
        <input name="cor" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite..."
        value="{{old('cor')}}">
        <br>

        <label for="exampleFormControlInput1">REF:</label>
        <input name="referencia" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite..."
        value="{{old('referencia')}}">
        <br>

        <label for="exampleFormControlInput1">Quantidade:</label>
        <input name="quantidade" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Digite..."
        value="{{old('quantidade')}}">
        <br>

        <label for="exampleFormControlInput1">Valor Entrada:</label>
        <input name="entrada" type="text" class="form-control" id="moedaEntrada" placeholder="Digite..."
        value="{{old('entrada')}}">
        <br>

        <label for="exampleFormControlInput1">Valor Saída:</label>
        <input name="saida" type="text" class="form-control" id="moedaSaida" placeholder="Digite..."
        value="{{old('saida')}}">
        <br><br>

        <div class="col text-center">
          <button type="submit" class="btn btn-outline-primary">Salvar</button>
        </div>
      </div>

    </form>
    <div></div>
    </p>

    @endsection