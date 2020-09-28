@extends('templetes.templete')

@section('content')


<p class="ex1">

  <div class="form-style-1">
    <h2>
      <p class="font-weight-bolder">Resultado:</p>
    </h2>


    @csrf

    @if (session('mensagem'))
    <br>
    <div class="alert alert-success">
        {{ session('mensagem') }}
    </div>
    <br>
    @endif




        <h4>Status:</h4>
        @if ($resultado->status == 0)
            <label for="exampleFormControlInput1">Ativado </label>
        @else
            <label for="exampleFormControlInput1"> Desativado</label>
        @endif

        <br>
        <h4>Nome:</h4>
        <label for="exampleFormControlInput1">{{ $resultado->nome_cliente }}</label>
        <br>
        <h4>CPF:</h4>
        <label for="exampleFormControlInput1">{{ $resultado->cpf_cliente }}</label>
        <br>
        <h4>Data de Nascimento:</h4>
        <label for="exampleFormControlInput1">{{ date( 'd/m/Y' , strtotime($resultado->data_nascimento))}}</label>
        <br>
        <h4>Endereço:</h4>
        <label for="exampleFormControlInput1">{{ $resultado->endereco }}</label>
        <br>
            <div class="row">
              <div class="col">
        <h4>Telefone:</h4>
        <label for="exampleFormControlInput1">{{ $resultado->telefone_cliente }}</label>
            </div>
            <div class="col">
        <h4>Celular:</h4>
        <label for="exampleFormControlInput1">{{ $resultado->celular_cliente }}</label>
    </div>
    <div class="col"></div>
    <div class="col"></div>

</div>
        <br>
        <div class="row d-flex justify-content-center">
            <a
            class="btn btn-outline-primary"
            style="margin: 0 20px;"
            href="/cliente/pesquisar"
            role="button">
            Voltar
            </a>
            <a
            class="btn btn-outline-warning"
            style="margin: 0 20px;"
            href="/cliente/editarCliente/{{$resultado->id_cliente}}"
            role="button">
            Editar
            </a>

            @if ($resultado->status == 0)
            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#desativar" style="margin: 0 20px;">
                Desativar
            </button>

            @else
            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#ativar" style="margin: 0 20px;">
                Ativar
              </button>
            @endif

            </div>







  <!-- Modal -->
  <div class="modal fade" id="desativar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ $resultado->nome_cliente }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Será desativado todos os dados deste usuário como consultas e vendas.
          <br>
          Deseja realmente desativar?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Sair</button>
          <a type="button"
                    class="btn btn-outline-danger"
                    href="/cliente/desativarCliente/{{$resultado->id_cliente}}"
                    >Confirmar</a>
        </div>
      </div>
    </div>
  </div>


    <!-- Modal -->
    <div class="modal fade" id="ativar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">{{ $resultado->nome_cliente }}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Será ativado todos os dados deste usuário como consultas e vendas.
              <br>
              Deseja realmente ativar?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Sair</button>
              <a type="button"
                        class="btn btn-outline-danger"
                        href="/cliente/ativarCliente/{{$resultado->id_cliente}}"
                        >Confirmar</a>
            </div>
          </div>
        </div>
      </div>









    </div>
</p>

    @endsection
