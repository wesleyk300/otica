@extends('templetes.templete')

@section('content')



@if ($count>0)

<div class="limiter">
		<div class="container-table100">




			<div class="wrap-table100">

				<div class="table100 ver2 m-b-110">
					<table data-vertable="ver2">
						<thead>
							<tr class="row100 head">

								<th class="column100 column2" data-column="column2">COD</th>
								<th class="column100 column3" data-column="column3">Modelo</th>
								<th class="column100 column3" data-column="column3">Consultar Modelo</th>

							</tr>
						</thead>
						<tbody>
                            @foreach($list as $lists)

							<tr class="row100">
								<td class="column100 column2" data-column="column2">{{$lists->id_produto}}</td>
								<td class="column100 column3" data-column="column3">{{$lists->modelo_produto}}</td>




                                <td class="column100 column4" data-column="column4">
                                    <a
                                        class="btn btn-outline-success"
                                        href="/modeloDetalhes/{{$lists->id_produto}}"
                                        role="button">
                                        Consultar
                                    </a>
                                </td>




                            </tr>


                            @endforeach



						</tbody>
					</table>
                </div>
            </div>
		</div>





@else
<div class="form-style-1">
    <H4>Nenhum modelo encontrado.</H4>
</div>
@endif






@endsection
