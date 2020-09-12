@extends('templetes.templete')


@section('content')



<p class="ex1">

  <div class="form-style-1">
    <h2>
      <p class="font-weight-bolder">Cadastro de Novo Exame</p><br>
    </h2>


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

    <form method="POST" action="{{route('save.consulta')}}">
    @csrf
      <p class="ex1">
      <div class="form-group">



            @csrf
                <input class="form-control" name="id_cliente" type="hidden" value="{{ $resultado->id_cliente }}">

                <h4>Nome:</h4>
                <label for="exampleFormControlInput1">{{ $resultado->nome_cliente }}</label>
                <br>
                <h4>CPF:</h4>
                <label for="exampleFormControlInput1">{{ $resultado->cpf_cliente }}</label>
                <h4>Data de Nascimento:</h4>
                <label for="exampleFormControlInput1">{{ date( 'd/m/Y' , strtotime($resultado->data_nascimento))}}
                </label>

                <?php
                $dianascimento = date('j', strtotime($resultado->data_nascimento));
                $mesnascimento = date('n', strtotime($resultado->data_nascimento));
                $anonascimento = date('Y', strtotime($resultado->data_nascimento));
                $diaatual = date("j");
                $mesatual = date("n");
                $anoatual = date("Y");

                $nascimento = $anoatual - $anonascimento;

                if ($mesnascimento >= $mesatual && $dianascimento > $diaatual  ) {
                    $nascimento--;
                }

                ?>





<br>


        <h4>Idade:</h4>
        <label for="exampleFormControlInput1"><?php echo $nascimento; ?></label>
        <input class="form-control" name="idade" type="hidden" value="<?php echo $nascimento; ?>">
        <br>

        <h4>Exame:</h4>
        <label for="exampleFormControlInput1">OD:</label>
        <div class="container">
            <div class="row">
              <div class="col-sm">

            <label for="exampleFormControlInput1">Longe:</label>
            <input name="odlonge" type="text" class="form-control" placeholder="OD Longe"
            value="{{old('odlonge')}}">
              </div>

              <div class="col-sm">
            <label for="exampleFormControlInput1">ESF:</label>
            <input name="odesf" type="text" class="form-control" placeholder="OD ESF"
            value="{{old('odesf')}}">
              </div>

                  <div class="col-sm">
            <label for="exampleFormControlInput1">CIL:</label>
            <input name="odcil" type="text" class="form-control" placeholder="OD CIL"
            value="{{old('odcil')}}">
               </div>

                  <div class="col-sm">
            <label for="exampleFormControlInput1">Eixo:</label>
            <input name="odeixo" type="text" class="form-control" placeholder="OD Eixo"
            value="{{old('odeixo')}}">
                  </div>
            </div>
        </div>
<br>

        <label for="exampleFormControlInput1">OE:</label>
        <div class="container">
            <div class="row">
              <div class="col-sm">

            <label for="exampleFormControlInput1">Longe:</label>
            <input name="oelonge" type="text" class="form-control" placeholder="OE Longe"
            value="{{old('oelonge')}}">
              </div>

              <div class="col-sm">
            <label for="exampleFormControlInput1">ESF:</label>
            <input name="oeesf" type="text" class="form-control" placeholder="OE ESF"
            value="{{old('oeesf')}}">
              </div>

            <div class="col-sm">
            <label for="exampleFormControlInput1">CIL:</label>
            <input name="oecil" type="text" class="form-control" placeholder="OE CIL"
            value="{{old('oecil')}}">
               </div>

                  <div class="col-sm">
            <label for="exampleFormControlInput1">Eixo:</label>
            <input name="oeeixo" type="text" class="form-control" placeholder="OE Eixo"
            value="{{old('oeeixo')}}">
                  </div>
            </div>
        </div>

        <br><br>

        <div class="col text-center">
          <button type="submit" class="btn btn-outline-primary">Salvar</button>
        </div>
      </div>

    </form>
    <div></div>
    </p>



    @endsection
