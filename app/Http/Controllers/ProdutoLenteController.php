<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\ModelLente;
use App\Models\ModelMarca;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class ProdutoLenteController extends Controller
{
    private $objMarca;

    public function __construct(){
        $this->objMarca = new ModelMarca();

    }

    public function index()
    {
        $list=  $this->objMarca->all();

        return view('lente.lente', compact('list'));
    }

    public function buscarLente()
    {
        return view('lente.buscarlente');
    }

    public function editarlente ($id)
    {
        $list = DB::table('produto')
                    ->where('id_produto', $id)
                    ->first();
            return view ('lente.editarLentesDetalhes',compact('list')) ;
    }
    public function excluirLente ($id)
    {
        DB::table('produto')
                ->where('id_produto', $id)
                  ->update(['status_produto' => 1]);

        return redirect()->route('buscar.lente')->with('mensagem','Deletado com sucesso.');
    }


    public function editarSavelente (Request $request)
    {

        $source = array('.', ',');
        $replace = array('', '.');
        $valorEntrada = str_replace($source, $replace, $request->entrada);
        $valorSaida = str_replace($source, $replace, $request->saida);

        $request -> validate([
            'modelo_produto' => ['required', Rule::unique('produto')->ignore($request->id_produto,'id_produto')],
            'cor' => 'required',
            'referencia' => 'required',
            'tratamento' => 'required',
            'quantidade' => 'required',
            'entrada' => 'required',
            'saida' => 'required'
        ],[
            'modelo_produto.required' => 'Informar modelo',
            'modelo_produto.unique' => 'Modelo já existe',
            'cor.required' => 'Informar cor',
            'referencia.required' => 'Informar referência',
            'tratamento.required' => 'Informar tratamento',
            'quantidade.required' => 'Informar quantidade',
            'entrada.required' => 'Informar entrda',
            'saida.required' => 'Informar saída',
        ]);



              DB::table('produto')
                    ->where('id_produto', $request->id_produto)
                    ->update([
                    'modelo_produto'=>$request->modelo_produto,
                    'cor_produto'=>$request->cor,
                    'ref_produto'=>$request->referencia,
                    'tratamento_produto'=>$request->tratamento,
                    'estoque'=>$request->quantidade,
                    'valor_entrada'=>$valorEntrada,
                    'valor_saida'=>$valorSaida
                    ]);



                /*return redirect()->route('modelo', [$request->marca_idmarca])
                        ->with('mensagemDeSucesso', 'Modelo editado com sucesso.');*/

                return redirect()->route('buscar.lente')
                        ->with('mensagem', 'Modelo editado com sucesso.');
    }

    public function pesquisarLente(Request $request)
    {

        $list = DB::table('produto')
        ->join('marca', 'produto.marca_idmarca', '=', 'marca.idmarca')
        ->where('modelo_produto', 'like', '%'.$request->nome.'%')
        ->where('tipo','Lente')
        ->where('status_produto',0)
        ->get();

        $count = $list->count();

        if ($count>0) {
            return view ('lente.exibirModelo',compact('list')) ;
        } else {
            return redirect()->back()->with('mensagem','Nenhum resultado encontrado');
        }

    }



    public function salveLente(StoreUserRequest $request)
    {
        $source = array('.', ',');
        $replace = array('', '.');
        $valorEntrada = str_replace($source, $replace, $request->entrada);
        $valorSaida = str_replace($source, $replace, $request->saida);
        $tipo = 'Lente';

        $request -> validate([
            'tratamento' => 'required',
        ],[
            'tratamento.required' => 'Informar tratamento',
        ]);

              DB::table('produto')
                    ->insert([
                    'marca_idmarca'=>$request->marca,
                    'modelo_produto'=>$request->modelo,
                    'cor_produto'=>$request->cor,
                    'ref_produto'=>$request->referencia,
                    'tratamento_produto'=>$request->tratamento,
                    'estoque'=>$request->quantidade,
                    'valor_entrada'=>$valorEntrada,
                    'valor_saida'=>$valorSaida,
                    'tipo'=>$tipo,

            ]);

            return redirect()->route('salvar.modelo.lente')
                    ->with('mensagem', 'Modelo de lente cadastrado com sucesso.');

    }







/*
    public function mostrarModelo($id)
    {
        $list = DB::table('produto')
            ->select('id_produto', 'modelo_produto')
            ->where('marca_idmarca', $id)
            ->get();
            return view ('produto.modelo',compact('list')) ;
    }


    public function mostrarModeloDetalhes($id)
    {
        $list = DB::table('produto')
                    ->join('marca', 'produto.marca_idmarca', '=', 'marca.idmarca')
                    ->where('id_produto', $id)
                    ->first();
            return view ('produto.produtoDetalhes',compact('list')) ;
    }

    public function exibirModelos()
    {
        $list = DB::table('produto')
                    ->join('marca', 'produto.marca_idmarca', '=', 'marca.idmarca')
                    ->get();

            return view ('produto.exibirModelo',compact('list')) ;
    }



    public function editarModelo($id)
    {
        $list = DB::table('produto')
                    ->where('id_produto', $id)
                    ->first();
            return view ('produto.editarProdutosDetalhes',compact('list')) ;
    }

    public function saveUpdate(Request $request)
    {
        $source = array('.', ',');
        $replace = array('', '.');
        $valorEntrada = str_replace($source, $replace, $request->entrada);
        $valorSaida = str_replace($source, $replace, $request->saida);

        $request -> validate([
            'modelo' => 'required',
            'cor' => 'required',
            'referencia' => 'required',
            'quantidade' => 'required',
            'entrada' => 'required',
            'saida' => 'required'
        ],[
            'modelo.required' => 'Informar modelo',
            'modelo.unique' => 'Modelo já existe',
            'cor.required' => 'Informar cor',
            'referencia.required' => 'Informar referência',
            'quantidade.required' => 'Informar quantidade',
            'entrada.required' => 'Informar entrda',
            'saida.required' => 'Informar saída',
        ]);



              DB::table('produto')
                    ->where('id_produto', $request->id_produto)
                    ->update([
                    'modelo_produto'=>$request->modelo,
                    'cor_produto'=>$request->cor,
                    'ref_produto'=>$request->referencia,
                    'estoque'=>$request->quantidade,
                    'valor_entrada'=>$valorEntrada,
                    'valor_saida'=>$valorSaida
                    ]);



                return redirect()->route('modelo', [$request->marca_idmarca])
                        ->with('mensagemDeSucesso', 'Modelo editado com sucesso.');

    }
*/


}
