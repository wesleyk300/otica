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











                        <div class="limiter">
                            <div class="container-table100">
                                <div class="wrap-table100">


                                    <div class="table100 ver2 m-b-110">
                                        <table data-vertable="ver2">
                                            <thead>
                                                <tr class="row100 head">
                                                    <th class="column100 column1" data-column="column1">Semana</th>
                                                    <th class="column100 column2" data-column="column2">Segunda</th>
                                                    <th class="column100 column3" data-column="column3">Terça</th>
                                                    <th class="column100 column4" data-column="column4">Quarta</th>
                                                    <th class="column100 column5" data-column="column5">Quinta</th>
                                                    <th class="column100 column6" data-column="column6">Sexta</th>
                                                    <th class="column100 column7" data-column="column7">Sábado</th>
                                                    <th class="column100 column8" data-column="column8">Domingo</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="row100">
                                                    <td class="column100 column1" data-column="column1">Wesley Severiano</td>
                                                    <td class="column100 column2" data-column="column2">8:00 AM</td>
                                                    <td class="column100 column3" data-column="column3">--</td>
                                                    <td class="column100 column4" data-column="column4">--</td>
                                                    <td class="column100 column5" data-column="column5">8:00 AM</td>
                                                    <td class="column100 column6" data-column="column6">--</td>
                                                    <td class="column100 column7" data-column="column7">5:00 PM</td>
                                                    <td class="column100 column8" data-column="column8">8:00 AM</td>
                                                </tr>

                                                <tr class="row100">
                                                    <td class="column100 column1" data-column="column1">Jane Medina</td>
                                                    <td class="column100 column2" data-column="column2">--</td>
                                                    <td class="column100 column3" data-column="column3">5:00 PM</td>
                                                    <td class="column100 column4" data-column="column4">5:00 PM</td>
                                                    <td class="column100 column5" data-column="column5">--</td>
                                                    <td class="column100 column6" data-column="column6">9:00 AM</td>
                                                    <td class="column100 column7" data-column="column7">--</td>
                                                    <td class="column100 column8" data-column="column8">--</td>
                                                </tr>

                                                <tr class="row100">
                                                    <td class="column100 column1" data-column="column1">Billy Mitchell</td>
                                                    <td class="column100 column2" data-column="column2">9:00 AM</td>
                                                    <td class="column100 column3" data-column="column3">--</td>
                                                    <td class="column100 column4" data-column="column4">--</td>
                                                    <td class="column100 column5" data-column="column5">--</td>
                                                    <td class="column100 column6" data-column="column6">--</td>
                                                    <td class="column100 column7" data-column="column7">2:00 PM</td>
                                                    <td class="column100 column8" data-column="column8">8:00 AM</td>
                                                </tr>

                                                <tr class="row100">
                                                    <td class="column100 column1" data-column="column1">Beverly Reid</td>
                                                    <td class="column100 column2" data-column="column2">--</td>
                                                    <td class="column100 column3" data-column="column3">5:00 PM</td>
                                                    <td class="column100 column4" data-column="column4">5:00 PM</td>
                                                    <td class="column100 column5" data-column="column5">--</td>
                                                    <td class="column100 column6" data-column="column6">9:00 AM</td>
                                                    <td class="column100 column7" data-column="column7">--</td>
                                                    <td class="column100 column8" data-column="column8">--</td>
                                                </tr>

                                                <tr class="row100">
                                                    <td class="column100 column1" data-column="column1">Tiffany Wade</td>
                                                    <td class="column100 column2" data-column="column2">8:00 AM</td>
                                                    <td class="column100 column3" data-column="column3">--</td>
                                                    <td class="column100 column4" data-column="column4">--</td>
                                                    <td class="column100 column5" data-column="column5">8:00 AM</td>
                                                    <td class="column100 column6" data-column="column6">--</td>
                                                    <td class="column100 column7" data-column="column7">5:00 PM</td>
                                                    <td class="column100 column8" data-column="column8">8:00 AM</td>
                                                </tr>

                                                <tr class="row100">
                                                    <td class="column100 column1" data-column="column1">Sean Adams</td>
                                                    <td class="column100 column2" data-column="column2">--</td>
                                                    <td class="column100 column3" data-column="column3">5:00 PM</td>
                                                    <td class="column100 column4" data-column="column4">5:00 PM</td>
                                                    <td class="column100 column5" data-column="column5">--</td>
                                                    <td class="column100 column6" data-column="column6">9:00 AM</td>
                                                    <td class="column100 column7" data-column="column7">--</td>
                                                    <td class="column100 column8" data-column="column8">--</td>
                                                </tr>

                                                <tr class="row100">
                                                    <td class="column100 column1" data-column="column1">Rachel Simpson</td>
                                                    <td class="column100 column2" data-column="column2">9:00 AM</td>
                                                    <td class="column100 column3" data-column="column3">--</td>
                                                    <td class="column100 column4" data-column="column4">--</td>
                                                    <td class="column100 column5" data-column="column5">--</td>
                                                    <td class="column100 column6" data-column="column6">--</td>
                                                    <td class="column100 column7" data-column="column7">2:00 PM</td>
                                                    <td class="column100 column8" data-column="column8">8:00 AM</td>
                                                </tr>

                                                <tr class="row100">
                                                    <td class="column100 column1" data-column="column1">Mark Salazar</td>
                                                    <td class="column100 column2" data-column="column2">8:00 AM</td>
                                                    <td class="column100 column3" data-column="column3">--</td>
                                                    <td class="column100 column4" data-column="column4">--</td>
                                                    <td class="column100 column5" data-column="column5">8:00 AM</td>
                                                    <td class="column100 column6" data-column="column6">--</td>
                                                    <td class="column100 column7" data-column="column7">5:00 PM</td>
                                                    <td class="column100 column8" data-column="column8">8:00 AM</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                            </div>
                        </div>













						</tbody>
					</table>
				</div>


			</div>
		</div>
	</div>







@endsection
