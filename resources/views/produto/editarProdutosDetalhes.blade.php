@extends('templetes.templete')

@section('content')

<p class="ex1">
    <div class="form-style-1">
        <p class="font-weight-bolder">Editar Modelo de Armação</p>
        <p class="font-weight-bolder">editarProdutosDetalhes</p>

<form method="POST" action="{{route('update.modelo')}}">
    @csrf
      <p class="ex1">
      <div class="form-group">


        <input type="hidden" name="id_produto" value="{{$list->id_produto}}">
        <input type="hidden" name="marca_idmarca" value="{{$list->marca_idmarca}}">
        <h1>{{$list->id_produto}}</h1>
        <h1>{{$list->marca_idmarca}}</h1>

        <br>



        @if ($errors->any())
        <div style="width: 40%"; class="alert alert-danger">
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


        <label for="exampleFormControlInput1">Modelo:</label>
        <input name="modelo" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite..."
        value="{{$list->modelo_produto}}">
        <br>

        <label for="exampleFormControlInput1">Cor:</label>
        <input name="cor" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite..."
        value="{{$list->cor_produto}}">
        <br>

        <label for="exampleFormControlInput1">REF:</label>
        <input name="referencia" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite..."
        value="{{$list->ref_produto}}">
        <br>

        <label for="exampleFormControlInput1">Quantidade:</label>
        <input name="quantidade" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Digite..."
        value="{{$list->estoque}}">
        <br>

        <label for="exampleFormControlInput1">Valor Entrada:</label>
        <input name="entrada" type="text" class="form-control" id="moedaEntrada" placeholder="Digite..."
        value="{{$list->valor_entrada}}">
        <br>

        <label for="exampleFormControlInput1">Valor Saída:</label>
        <input name="saida" type="text" class="form-control" id="moedaSaida" placeholder="Digite..."
        value="{{$list->valor_saida}}">
        <br><br>

        <div class="col text-center">
            <button style="margin-right: 30px";
                class="btn btn-outline-success"
                type="submit"
                value="Salvar">Salvar</button>

            <a class="btn btn-outline-danger" href="/modelo/{{$list->marca_idmarca}}" role="button">Cancelar</a>
        </div>


        {{--
        <div class="col text-center">
        <button style="margin-right: 30px";
        type="submit"
        class="btn btn-outline-success">
        Salvar
        </button>
        </div>

        <div class="col text-center">
        <a href="/modelo/{{$list->marca_idmarca}}">
        <button class="btn btn-outline-danger">
        Cancelar
        </button>
        </a>
        </div>
        --}}


</form>
</p>

    @endsection

