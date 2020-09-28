@extends('templetes.templete')

@section('content')

<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">

        @if (session('mensagemDeSucesso'))
        <div class="alert alert-success">
            {{ session('mensagemDeSucesso') }}
        </div>
        @endif

        @if (session('mensagem'))
        <div class="alert alert-warning" role="alert">
            {{ session('mensagem') }}
        </div>
        @endif




				<div class="table100 ver2 m-b-110">
					<table data-vertable="ver2">
                        <H1>dddd</H1>
						<thead>
							<tr class="row100 head">

                                <th class="column100 column2" data-column="column2">COD</th>
                                <th class="column100 column2" data-column="column2">Marca</th>
                                <th class="column100 column3" data-column="column3">Modelo</th>
                                <th class="column100 column4" data-column="column4">Cor</th>
                                <th class="column100 column5" data-column="column5">Referência</th>
                                <th class="column100 column6" data-column="column6">Valor Entrada</th>
                                <th class="column100 column7" data-column="column7">Valor Saída</th>
                                <th class="column100 column8" data-column="column8">Quantidade</th>


                                <th class="column100 column9" data-column="column9">Editar Modelo</th>
                                <th class="column100 column9" data-column="column9">Excluir Modelo</th>


							</tr>
						</thead>
						<tbody>
                            @foreach($list as $lists)

							<tr class="row100">
                                <td class="column100 column2" data-column="column2">{{$lists->id_produto}}</td>
                                <td class="column100 column2" data-column="column2">{{$lists->nome_marca}}</td>
                                <td class="column100 column3" data-column="column3">{{$lists->modelo_produto}}</td>
                                <td class="column100 column4" data-column="column4">{{$lists->cor_produto}}</td>
                                <td class="column100 column5" data-column="column5">{{$lists->ref_produto}}</td>
                                <td class="column100 column6" data-column="column6">{{number_format($lists->valor_entrada, 2, ',', '.')}}</td>
                                <td class="column100 column7" data-column="column7">{{number_format($lists->valor_saida, 2, ',', '.')}}</td>
                                <td class="column100 column8" data-column="column8">{{$lists->estoque}}</td>

                                <td class="column100 column9" data-column="column9">
                                    <a href="/EditarModeloDetalhado/{{$lists->id_produto}}">
                                        <button class="btn btn-outline-success">Editar</button>
                                    </a>
                                </td>

                                <td class="column100 column9" data-column="column9">
                                    <a href="/modelo/excluir/{{$lists->id_produto}}">
                                        <button class="btn btn-outline-danger">Exluir</button>
                                    </a>
                                </td>




                            </tr>


                            @endforeach



						</tbody>
                    </table>
                    </div>
                </div>
            </div>
		</div>








@endsection
