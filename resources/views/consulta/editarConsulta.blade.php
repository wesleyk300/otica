@extends('templetes.templete')


@section('content')


<form method="POST" action="{{route('salvar.consulta')}}">
@csrf


    <input class="form-control" name="id_consulta" type="hidden" value="{{ $resultado->id_consulta }}">



<div class="form-style-1">

    <br>
    @if (session('mensagemeditada'))
        <div class="alert alert-success">
            {{ session('mensagemeditada') }}
        </div>
        @endif
    <br>


    <h4>Data:</h4>
    <label for="exampleFormControlInput1">{{ date( 'd/m/Y' , strtotime($resultado->created_at))}}</label>




    <h4>Exame:</h4>
<br>
        <h4>OD:</h4>
        <div class="container">
            <div class="row">
              <div class="col-sm">

            <label for="exampleFormControlInput1">Longe:</label>
            <input name="odlonge" type="text" class="form-control" placeholder="OD Longe"
            value="{{$resultado->od_longe}}">
              </div>

              <div class="col-sm">
            <label for="exampleFormControlInput1">ESF:</label>
            <input name="odesf" type="text" class="form-control" placeholder="OD ESF"
            value="{{$resultado->od_esf}}">
              </div>

                  <div class="col-sm">
            <label for="exampleFormControlInput1">CIL:</label>
            <input name="odcil" type="text" class="form-control" placeholder="OD CIL"
            value="{{$resultado->od_cil}}">
               </div>

                  <div class="col-sm">
            <label for="exampleFormControlInput1">Eixo:</label>
            <input name="odeixo" type="text" class="form-control" placeholder="OD Eixo"
            value="{{$resultado->od_eixo}}">
                  </div>
            </div>
        </div>
<br>

        <h4>OE:</h4>
        <div class="container">
            <div class="row">
              <div class="col-sm">

            <label for="exampleFormControlInput1">Longe:</label>
            <input name="oelonge" type="text" class="form-control" placeholder="OE Longe"
            value="{{ $resultado->oe_longe }}">
              </div>

              <div class="col-sm">
            <label for="exampleFormControlInput1">ESF:</label>
            <input name="oeesf" type="text" class="form-control" placeholder="OE ESF"
            value="{{ $resultado->oe_esf }}">
              </div>

            <div class="col-sm">
            <label for="exampleFormControlInput1">CIL:</label>
            <input name="oecil" type="text" class="form-control" placeholder="OE CIL"
            value="{{ $resultado->oe_cil }}">
               </div>

                  <div class="col-sm">
            <label for="exampleFormControlInput1">Eixo:</label>
            <input name="oeeixo" type="text" class="form-control" placeholder="OE Eixo"
            value="{{ $resultado->oe_eixo }}">
                  </div>
            </div>
        </div>
<br><br>

        <div class="col text-center">
            <a href="/pesquisar/nome/{{ $resultado->fk_cliente_consulta }}">
                <button type="button" class="btn btn-outline-primary" style="margin: 0 20px;">Voltar</button>
            </a>
            <button type="submit" class="btn btn-outline-warning" style="margin: 0 20px;">Salvar</button>
        </div>
    </form>
@endsection
