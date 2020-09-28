<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Http\Controllers\ConsultaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ClienteRequest;
use Illuminate\Validation\Rule;


class ClienteController extends Controller
{
    private $objConsultaController;

    public function __construct()
    {

        $this->objConsultaController = new ConsultaController();

    }
    public function index()
    {
        return view('cliente.cliente');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function salvar(ClienteRequest $request)
    {

              DB::table('cliente')
                    ->insert([
                    'nome_cliente'=>$request->nome,
                    'cpf_cliente'=>$request->cpf,
                    'endereco'=>$request->endereco,
                    'data_nascimento'=>$request->data_nascimento,
                    'telefone_cliente'=>$request->telefone,
                    'celular_cliente'=>$request->celular,
            ]);

            return  back()
                    ->with('mensagem', 'Novo cliente cadastrado com sucesso.');

    }

    public function pesquisar(){
            return view('cliente.pesquisar');
    }


    public function pesquisarCpf(Request $request){

        //$objConsultaController = new ConsultaController();

        $resultado = $this->objConsultaController->buscaClienteCpf($request->buscacpf);

        $contador = $resultado->count();

        if ($contador > 0) {
            return view('cliente.resultadoPesquisaCliente', compact ('resultado'));
        } else {
            return redirect()->back()
                    ->with('mensagemcpf', 'CPF não encontrado');
        }

    }
    public function pesquisarNome(Request $request){

        //$objConsultaController = new ConsultaController();

        $resultado = $this->objConsultaController->buscaClienteNome($request->nome);

        $contador = $resultado->count();

        if ($contador > 0) {
            return view('cliente.resultadoPesquisaCliente', compact ('resultado'));
        } else {
            return redirect()->back()
                    ->with('mensagemnome', 'Nome não encontrado');
        }

    }
    public function pesquisarDetalhado ($id){

        $resultado = $this->objConsultaController->buscaClienteId($id);

                return view('cliente.detalhe', compact('resultado'));
    }


    public function editarCliente ($id){

        $resultado = $this->objConsultaController->buscaClienteId($id);

                return view('cliente.editar', compact('resultado'));
    }
    public function desativarCliente ($id){

        DB::table('cliente')
            ->where('id_cliente', $id)
              ->update([
                  'status'=>1,
              ]);

                return back()
                        ->with('mensagem', 'Cliente desativado.');
    }

    public function ativarCliente ($id){

        DB::table('cliente')
            ->where('id_cliente', $id)
              ->update([
                  'status'=>0,
              ]);

                return back()
                        ->with('mensagem', 'Cliente ativado.');
    }


    public function saveEditarCliente (Request $request){

        /*'email' => [
            'required',
            Rule::unique('users')->ignore($user->id),
        ],*/
        //dd($request->all());

        $request -> validate([
            'nome' => 'required',

            'cpf_cliente' => ['required', 'cpf',
                Rule::unique('cliente')->ignore($request->id_cliente,'id_cliente'),
            ],

            'data_nascimento' => 'required',
            'telefone' => 'required | min:10',
            'celular' => 'required | min:10',
        ],[
            'nome.required' => 'Informar o nome',
            'cpf_cliente.required' => 'Informar o CPF',
            'cpf_cliente.cpf' => 'CPF inválido',
            'cpf_cliente.unique' => 'CPF já existe',
            'celular.min' => 'Informar celular válido',
            'celular.required' => 'Informar celular',
            'telefone.required' => 'Informar telefone',
            'telefone.min' => 'Informar telefone válido',
        ]);



        DB::table('cliente')
                    ->where('id_cliente', $request->id_cliente)
                    ->update([
                        'nome_cliente'=>$request->nome,
                        'cpf_cliente'=>$request->cpf_cliente,
                        'endereco'=>$request->endereco,
                        'data_nascimento'=>$request->data_nascimento,
                        'telefone_cliente'=>$request->telefone,
                        'celular_cliente'=>$request->celular,
                    ]);

                        return redirect()->route('cliente.pesquisardetalhado', [$request->id_cliente])
                    ->with('mensagem', 'Editado com sucesso.');
    }













}
