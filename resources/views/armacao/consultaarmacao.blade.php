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
								<th class="column100 column4" data-column="column4">Consultar Modelo</th>

							</tr>
						</thead>
						<tbody>
                            @foreach($list as $lists)

							<tr class="row100">

								<td class="column100 column2" data-column="column2">{{$lists->nome_marca}}</td>
								<td class="column100 column3" data-column="column3">{{$lists->idmarca}}</td>
								<td class="column100 column4" data-column="column4">
								<a href="/modelo/{{$lists->idmarca}}">
								<button class="btn btn-dark">Consultar</button>
								</a>
								</td>
                                </tr>
                        @endforeach

    @endsection
