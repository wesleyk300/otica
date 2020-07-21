@extends('templetes.templete')

@section('content')


<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">	

				<div class="table100 ver2 m-b-110">
					<table data-vertable="ver2">
						<thead>
							<tr class="row100 head">								
								
							
								<th class="column100 column3" data-column="column3">Modelo</th>
								<th class="column100 column4" data-column="column4">Cor</th>
								<th class="column100 column5" data-column="column5">REF</th>
								<th class="column100 column6" data-column="column6">V. Entrada</th>
								<th class="column100 column7" data-column="column7">V. Saída</th>
								<th class="column100 column8" data-column="column8">Tratamento</th>
								<th class="column100 column9" data-column="column9">EST</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($list as $lists)

							<tr class="row100">
								
								
								<td class="column100 column3" data-column="column3">{{$lists->modelo_produto}}</td>
								<td class="column100 column4" data-column="column4">{{$lists->cor_produto}}</td>
								<td class="column100 column5" data-column="column5">{{$lists->ref_produto}}</td>
								<td class="column100 column6" data-column="column6">{{$lists->valor_entrada}}</td>
								<td class="column100 column7" data-column="column7">{{$lists->valor_saida}}</td>
								<td class="column100 column8" data-column="column8">{{$lists->tratamento_produto}}</td>
								<td class="column100 column9" data-column="column9">{{$lists->estoque}}</td>
							</tr>

							
                            @endforeach
							

							
						</tbody>
					</table>
				</div>

				
			</div>
		</div>
	</div>







@endsection