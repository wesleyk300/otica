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
								
							</tr>
						</thead>
						<tbody>
                            @foreach($list as $lists)

							<tr class="row100">
								
								<td class="column100 colum2" data-column="column2">{{$lists->nome_marca}}</td>
								
							</tr>

							
                            @endforeach
							

							
						</tbody>
					</table>
				</div>

				
			</div>
		</div>
	</div>







@endsection