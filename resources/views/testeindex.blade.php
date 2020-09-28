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



@php
        public function saveEditarCliente (Request $request){


$request -> validate([
    'nome' => 'required',
    'cpf' => 'required | cpf | unique:cliente,cpf_cliente,',
    'data_nascimento' => 'required',
    'telefone' => 'required | min:10',
    'celular' => 'required | min:10',
],[
    'nome.required' => 'Informar o nome',
    'cpf.required' => 'Informar o CPF',
    'cpf.cpf' => 'CPF inválido',
    'cpf.unique' => 'CPF já existe',
    'celular.min' => 'Informar celular válido',
    'celular.required' => 'Informar celular',
    'telefone.required' => 'Informar telefone',
    'telefone.min' => 'Informar telefone válido',
]);



DB::table('cliente')
            ->where('id_cliente', $request->id_cliente)
            ->update([
                'nome_cliente'=>$request->nome,
                'cpf_cliente'=>$request->cpf,
                'endereco'=>$request->endereco,
                'data_nascimento'=>$request->data_nascimento,
                'telefone_cliente'=>$request->telefone,
                'celular_cliente'=>$request->celular,
            ]);

        return view('ok!!!');
}
@endphp
