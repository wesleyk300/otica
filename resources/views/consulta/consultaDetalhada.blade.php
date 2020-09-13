@extends('templetes.templete')

@section('content')


<p class="ex1">

    <div class="form-style-1">
        <h4>Data:</h4>
        <label for="exampleFormControlInput1">{{ date( 'd/m/Y' , strtotime($resultado->created_at))}}</label>

        <h4>Idade:</h4>
        <label for="exampleFormControlInput1">{{ $resultado->idade }}</label>


        <br>
        <h4>Exame:</h4>
        <h4>OD:</h4>
        <div class="row">
            <div class="col"><h5>Longe:</h5></div>
            <div class="col"><h5>ESF:</h5></div>
            <div class="col"><h5>CIL:</h5></div>
            <div class="col"><h5>Eixo:</h5></div>
          </div>
          <div class="row">
            <div class="col"><label for="exampleFormControlInput1">{{ $resultado->od_longe }}</label></div>
            <div class="col"><label for="exampleFormControlInput1">{{ $resultado->od_esf }}</label></div>
            <div class="col"><label for="exampleFormControlInput1">{{ $resultado->od_cil }}</label></div>
            <div class="col"><label for="exampleFormControlInput1">{{ $resultado->od_eixo }}</label></div>
          </div>
          <br>

          <h4>OE:</h4>
          <div class="row">
              <div class="col"><h5>Longe:</h5></div>
              <div class="col"><h5>ESF:</h5></div>
              <div class="col"><h5>CIL:</h5></div>
              <div class="col"><h5>Eixo:</h5></div>
            </div>
            <div class="row">
              <div class="col"><label for="exampleFormControlInput1">{{ $resultado->oe_longe }}</label></div>
              <div class="col"><label for="exampleFormControlInput1">{{ $resultado->oe_esf }}</label></div>
              <div class="col"><label for="exampleFormControlInput1">{{ $resultado->oe_cil }}</label></div>
              <div class="col"><label for="exampleFormControlInput1">{{ $resultado->oe_eixo }}</label></div>
            </div>
            <br>
            <br>


            <div class="row d-flex justify-content-center">
            <a
            class="btn btn-outline-primary"
            style="margin: 0 20px;"
            href="{{ URL::previous() }}"
            role="button">
            Voltar
            </a>
            <a
            class="btn btn-outline-warning"
            style="margin: 0 20px;"
            href="/consulta/editarConsulta/{{$resultado->id_consulta}}"
            role="button">
            Editar
            </a>

            <a
            class="btn btn-outline-danger"
            style="margin: 0 20px;"
            href=""
            role="button">
            Excluir
            </a>
            </div>




    </div>
</p>






@endsection
