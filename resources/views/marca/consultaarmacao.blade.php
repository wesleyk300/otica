@extends('templetes.templete')

@section('content')

<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">

				<div class="table100 ver2 m-b-110">
					<table data-vertable="ver2">
						<thead>
							<tr class="row100 head">

								<th class="column100 column2" data-column="column2">Marca</th>
								<th class="column100 column3" data-column="column3">id</th>
								<th class="column100 column3" data-column="column3">Consultar Modelos</th>
								<th class="column100 column3" data-column="column3">Editar</th>
                                {{-- <th class="column100 column3" data-column="column3">Excluir</th> --}}


							</tr>
						</thead>
						<tbody>
                            @foreach($resultado as $lists)

							<tr class="row100">

								<td class="column100 colum2" data-column="column2">{{$lists->nome_marca}}</td>
								<td class="column100 colum3" data-column="column3">{{$lists->idmarca}}</td>


                                <td class="column100 column4" data-column="column4">
                                    <div class="col text-center">
								<a href="/modelo/{{$lists->idmarca}}">
								<button class="btn btn-outline-dark">Modelos</button>
                                </a>
                                </div>
								</td>


                                <td class="column100 column4" data-column="column4">
                                    <div class="col text-center">
								<a href="/marca/editarmarca/{{$lists->idmarca}}">
								<button class="btn btn-outline-primary">Editar</button>
                                </a>
                                </div>
								</td>


                                {{--
                                    <td class="column100 column4" data-column="column4">
                                    <div class="col text-center">
								<a href="/modelo/{{$lists->idmarca}}">
								<button class="btn btn-outline-danger">Excluir</button>
                                </a>
                                </div>
                                </td>
                                --}}
								</tr>


                            @endforeach



						</tbody>
					</table>
				</div>


			</div>
		</div>
	</div>







@endsection
