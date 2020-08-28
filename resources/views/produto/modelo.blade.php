@extends('templetes.templete')

@section('content')

<<<<<<< Updated upstream
<h1>sdfafsssssajmgojangao</h1>
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">	
=======

<div class="limiter">
		<div class="container-table100">

            <div class="d-flex justify-content-center">
                @if (session('mensagemDeSucesso'))
                        <div style="width: 200%"; class="alert alert-success">
                            {{ session('mensagemDeSucesso') }}
                        </div>
                @endif
            </div>


			<div class="wrap-table100">
>>>>>>> Stashed changes

				<div class="table100 ver2 m-b-110">
					<table data-vertable="ver2">
                        <H1>modelo.blade</H1>
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
<<<<<<< Updated upstream
								
								<td class="column100 colum2" data-column="column2">{{$lists->id_produto}}</td>
								<td class="column100 colum3" data-column="column3">{{$lists->modelo_produto}}</td>
								<td class="column100 column4" data-column="column4">
								<a href="/modeloDetalhes/{{$lists->id_produto}}"> 
								<button class="btn btn-dark">Consultar</button>	
								</a>
								</td>
								</tr>
=======
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

                                <td class="column100 column4" data-column="column4">
                                    <a
                                        class="btn btn-outline-danger"
                                        href="#"
                                        role="button">
                                        Excluir
                                    </a>
                                </td>


                            </tr>
>>>>>>> Stashed changes

							
                            @endforeach
							

							
						</tbody>
					</table>
<<<<<<< Updated upstream
				</div>

				
			</div>
=======
                </div>
            </div>
>>>>>>> Stashed changes
		</div>








@endsection