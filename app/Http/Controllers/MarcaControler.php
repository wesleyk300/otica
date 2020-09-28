<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelMarca;
use Dompdf\Positioner\TableRow;
use Illuminate\Support\Facades\DB;

class MarcaControler extends Controller
{

    private $objMarca;

    public function __construct(){
        $this->objMarca = new ModelMarca();

    }



    public function index()
    {
        return view ('marca.pesquisarmarcas') ;
    }


    public function localizarNome(Request $request)
    {
        $resultado = DB::table('marca')
                ->where('nome_marca', 'like', '%'.$request->nome.'%')
                ->get();

        $count = count($resultado);

                if ($count>0) {
                    return view ('marca.consultaarmacao', compact('resultado')) ;
                } else {
                   return redirect()->back()->with('mensagem', 'Nenhum dado encontrado');
                }




    }



      public function saveMarca(Request $request)
    {
            DB::table('marca')->insert([
                'nome_marca'=>$request->marca
            ]);

            return redirect()->route('register.marca.armacao')
                    ->with('mensagem', 'Marca cadastrado com sucesso.');

    }
      public function editarMarca ($id)
    {
        $id = ModelMarca::find($id);

        return view ('marca.editarmarca', compact('id')) ;

    }
      public function editarSaveMarca (Request $request)
    {
        DB::table('marca')
              ->where('idmarca', $request->idmarca)
              ->update(['nome_marca' => $request->marca]);

        return redirect()->back()->with('mensagem','Alterado com sucesso TEWSTE');

    }


    public function createMarca()
    {
        return view ('marca.saveMarca') ;
    }


    
}
