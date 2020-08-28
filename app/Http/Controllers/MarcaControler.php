<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelMarca;
use Illuminate\Support\Facades\DB;

class MarcaControler extends Controller
{

    private $objMarca;

    public function __construct(){
        $this->objMarca = new ModelMarca();

    }



    public function index()
    {
    $list=  $this->objMarca->all();

        return view ('marca.consultaarmacao',compact('list')) ;
    }



      public function saveMarca(Request $request)
    {
            DB::table('marca')->insert([
                'nome_marca'=>$request->marca
            ]);

            return redirect()->route('register.marca.armacao')
                    ->with('mensagem', 'Marca cadastrado com sucesso.');

    }


    public function createMarca()
    {
        return view ('marca.saveMarca') ;
    }


    public function create()
    {
        //
    }






    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {

    }




    public function edit($id)
    {
        //
    }



    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
