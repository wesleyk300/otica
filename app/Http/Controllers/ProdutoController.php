<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUserRequest;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ModelMarca;
use App\Models\ModelProduto;

class ProdutoController extends Controller
{
    private $objMarca;

    public function __construct(){
        $this->objMarca = new ModelMarca();

    }

    public function index()
    {
        $list=  $this->objMarca->all();

        return view('produto.saveModelo', compact('list'));
    }



    public function salveModelo(StoreUserRequest $request)
    {
        $source = array('.', ',');
        $replace = array('', '.');
        $valorEntrada = str_replace($source, $replace, $request->entrada);
        $valorSaida = str_replace($source, $replace, $request->saida);
        $tipo = 'Armação';


              DB::table('produto')
                    ->insert([
                    'marca_idmarca'=>$request->marca,
                    'modelo_produto'=>$request->modelo,
                    'cor_produto'=>$request->cor,
                    'ref_produto'=>$request->referencia,
                    'estoque'=>$request->quantidade,
                    'valor_entrada'=>$valorEntrada,
                    'valor_saida'=>$valorSaida,
                    'tipo'=>$tipo

            ]);


            return redirect()->route('salvar.modelo.armacao')
                    ->with('mensagem', 'Modelo cadastrado com sucesso.');

    }




    public function mostrarModelo($id)
    {
        $list = DB::table('produto')
            ->select('id_produto', 'modelo_produto')
            ->where('marca_idmarca', $id)
            ->get();

            $count = $list->count();

            return view ('produto.modelo',compact('list','count'));
    }
    public function buscarModelo ()
    {
         return view ('produto.buscarmodelo');
    }

    public function excluir($id)


    {
        DB::table('produto')
                ->where('id_produto', $id)
                  ->update(['status_produto' => 1]);

        return redirect()->route('buscar.modelo')->with('mensagem','Deletado com sucesso.');
    }


    public function mostrarModeloDetalhes($id)
    {
        $list = DB::table('produto')
                    ->join('marca', 'produto.marca_idmarca', '=', 'marca.idmarca')
                    ->where('id_produto', $id)
                    ->first();
            return view ('produto.produtoDetalhes',compact('list')) ;
    }

    public function pesquisarModelo (Request $request)
    {

    $list = DB::table('produto')
        ->join('marca', 'produto.marca_idmarca', '=', 'marca.idmarca')
        ->where('modelo_produto', 'like', '%'.$request->nome.'%')
        ->where('tipo','Armação')
        ->where('status_produto',0)
        ->get();

        $count = $list->count();

        if ($count>0) {
            return view ('produto.exibirModelo',compact('list')) ;
        } else {
            return redirect()->back()->with('mensagem','Nenhum resultado encontrado');
        }




    }

    /*public function exibirModelos()
    {
        $list = DB::table('produto')
                    ->join('marca', 'produto.marca_idmarca', '=', 'marca.idmarca')
                    ->get();

            return view ('produto.exibirModelo',compact('list')) ;
    }*/



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



                /*return redirect()->route('modelo', [$request->marca_idmarca])
                        ->with('mensagemDeSucesso', 'Modelo editado com sucesso.');*/

                return redirect()->route('modelo.detalhe', [$request->id_produto])
                        ->with('mensagemDeSucesso', 'Modelo editado com sucesso.');

    }



}
