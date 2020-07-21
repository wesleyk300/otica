<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUserRequest;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ModelMarca;
use App\Models\ModelProduto;
use App\User;

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
       

              DB::table('produto')->insert([
                'marca_idmarca'=>$request->marca,
                'modelo_produto'=>$request->modelo,
                'cor_produto'=>$request->cor,
                'ref_produto'=>$request->referencia,
                'estoque'=>$request->quantidade,
                'valor_entrada'=>$valorEntrada,
                'valor_saida'=>$valorSaida                
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

      
    
    /*public function index($id)
    {
        $list = DB::table('produto')
            ->where('marca_idmarca',$id)
            ->get();
        
        return view ('armacao.index',compact('list')) ; 
    }*/




    /*public function index()
    {
        $lsit=  $this->objProduto->all();

        return view ('index',compact('lsit')) ; 
    }
*/





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
