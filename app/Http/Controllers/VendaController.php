<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Venda;
use App\Saida;
use PDF;

class VendaController extends Controller
{

    public  $venda ;


    public function index()
    {
        $produto = DB::table('produto')
                        ->get();

        $cliente = DB::table('cliente')
                        ->get();;
        return view('venda.registrarVenda', compact('produto','cliente'));
    }


    public function salvar(Request $request)
    {

        $tamanho = count($request["saida"]["quantidade"]);
        $total = $request["valor_venda"] +  $request["desconto"];

        //$totalQuantidade = 0;
        //for($i = 0;$i <= $tamanho - 1;$i++){
        //$totalQuantidade = $totalQuantidade + $request["saida"]["quantidade"][$i];
        //}

        $tamanho = count($request["saida"]["quantidade"]);

        $id = Venda::create([ 'valor_total' => $total,
                              'valor_venda' => $request["valor_venda"],
                              'desconto' => $request["desconto"],
                              'porcentagem' => $request["porcentagem"],
                              'tipo_pagamento' => $request["tipo_pagamento"],
                              'fk_cliente' => $request["fk_cliente"],


        ]);

        $id = $id->id_venda;

        for($i = 0;$i <= $tamanho - 1;$i++){
        $subtotal = $request["saida"]["quantidade"][$i] * $request["saida"]["valor"][$i];
                        Saida::create([
                            'fk_produto' => $request["saida"]["fk_produto"][$i],
                            'quantidade_saida' => $request["saida"]["quantidade"][$i],
                            'valor_saida' => $request["saida"]["valor"][$i],
                            'subtotal' => $subtotal,
                            'fk_venda' => $id
                        ]);

        }

        for($i = 0;$i <= $tamanho - 1;$i++){

        DB::update('update produto set estoque = estoque - ?
                    where
                    id_produto = ?',
                    [
                        $request["saida"]["quantidade"][$i],
                        $request["saida"]["fk_produto"][$i]
                    ]
                );
        }

        $clienteVenda = $this->queryClient($id);
        $itens = $this->queryItens($id);


        //dd($queryClientItens);

        return view('venda.mostrarVenda', compact ('clienteVenda', 'itens'));
    }

    public function gerarPDF($id)
    {
        $clienteVenda = $this->queryClient($id);
        $itens = $this->queryItens($id);

        $pdf = PDF::loadView('venda.pdfVenda', compact('clienteVenda','itens'));
        return $pdf->setPaper('a4')->stream('venda_venda');
        //return view ('venda.pdfVenda', compact('clienteVenda','itens'));
    }

    public function queryClient($id)
    {
        $clienteVenda = DB::table('vendas')
                            ->join('cliente', 'cliente.id_cliente', '=', 'vendas.fk_cliente')
                            ->select('vendas.*', 'cliente.*')
                            ->where('id_venda', '=', $id)
                            ->first();

        return $clienteVenda;
        //return view ('venda.pdfVenda', compact('clienteVenda','itens'));
    }

    public function queryItens($id)
    {
        $itens = DB::table('vendas')
                            ->join('saidas', 'vendas.id_venda', '=', 'saidas.fk_venda')
                            ->join('produto', 'saidas.fk_produto', '=', 'produto.id_produto')
                            ->select('vendas.*', 'saidas.*', 'produto.*')
                            ->where('id_venda', '=', $id)
                            ->get();
        return $itens;
        //return view ('venda.pdfVenda', compact('clienteVenda','itens'));
    }

}
