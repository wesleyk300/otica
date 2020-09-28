<?php

namespace App\Http\Controllers;

use App\consulta;
use App\Http\Requests\ConsultaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsultaController extends Controller
{
    public function registrarconsulta($id)
    {
             $resultado  = $this->buscaClienteId($id);

        return view('consulta.consulta', compact ('resultado'));
    }


    public function busca()
    {
        return view('consulta.busca');
    }

    public function pesquisar()
    {
        return view('consulta.pesquisar');
    }

    public function buscacpf(Request $request)
    {

        $resultado  = $this->buscaClienteCpf($request->buscacpf);
        $contador = $resultado->count();

        if ($contador > 0) {
            return view('consulta.resultadoConsulta', compact ('resultado'));
        } else {
            return redirect()->route('register.busca')
                    ->with('mensagemcpf', 'CPF não encontrado');
        }
    }
    public function pesquisarNome (Request $request)
    {
                $resultado  = $this->buscaClienteNome($request->nome);
                $contador = $resultado->count();

        if ($contador > 0) {
            return view('consulta.resultadoPesquisa', compact ('resultado'));
        } else {
            return redirect()->route('pesquisar.consulta')
                    ->with('mensagemnome', 'Nome não encontrado');
        }
    }
    public function pesquisarCpf (Request $request)
    {
                $resultado  = $this->buscaClienteCpf($request->buscacpf);

                $contador = $resultado->count();

        if ($contador > 0 ) {
                    if ($resultado[0]->status ==0) {
                        return view('consulta.resultadoPesquisa', compact ('resultado'));
                    } else {
                        return redirect()->route('pesquisar.consulta')
                                ->with('mensagem', 'Cliente desativado');
                    }
        }
       else {
            return redirect()->route('pesquisar.consulta')
                    ->with('mensagemcpf', 'CPF não encontrado');
        }
    }

    public function buscaNome(Request $request)
    {
                $resultado  = $this->buscaClienteNome($request->nome);
                $contador = $resultado->count();

                if ($contador > 0) {
                    return view('consulta.resultadoConsulta', compact ('resultado'));
                } else {
                    return redirect()->route('register.busca')
                            ->with('mensagemnome', 'Nome não encontrado');
                }

        return view('consulta.resultadoConsulta', compact ('resultado'));
    }

    public function saveConsulta(ConsultaRequest $request)
    {
        consulta::create([
        'idade'=>$request->idade,
        'od_longe'=>$request->odlonge,
        'od_esf'=>$request->odesf,
        'od_cil'=>$request->odcil,
        'od_eixo'=>$request->odeixo,
        'oe_longe'=>$request->oelonge,
        'oe_esf'=>$request->oeesf,
        'oe_cil'=>$request->oecil,
        'oe_eixo'=>$request->oeeixo,
        'fk_cliente_consulta'=>$request->id_cliente,
        ]);

        return redirect()->route('register.busca')
                    ->with('mensagem', 'Exame cadastrado com sucesso.');
    }

    public function listarConsultas($id)
    {
                $resultado  = $this->listarConsultaId($id);

                $contador = $resultado->count();

                $clientes = $this->buscaClienteId($id);


                if ($contador > 0) {
                        if ($clientes->status == 0) {
                            return view('consulta.listarConsultas', compact ('resultado','clientes'));
                        } else {
                            return redirect()->route('pesquisar.consulta')
                                    ->with('mensagem', 'Cliente desativado');
                        }

                } else {
                    return redirect()->route('pesquisar.consulta')
                            ->with('mensagem', 'Cliente não possui consulta registrada');
                }

       // return view('consulta.resultadoConsulta', compact ('resultado'));
    }

    public function consultaDetalhada ($id)
    {
            $resultado = $this->buscaConsultaId($id);

            return view('consulta.consultaDetalhada', compact ('resultado'));
    }

    public function editarConsulta ($id)
    {
            $resultado = $this->buscaConsultaId($id);

            return view('consulta.editarConsulta', compact ('resultado'));
    }
    public function salvarConsulta (Request $request)
    {
        DB::table('consultas')
                    ->where('id_consulta', $request->id_consulta)
                    ->update([
                        'od_longe'=>$request->odlonge,
                        'od_esf'=>$request->odesf,
                        'od_cil'=>$request->odcil,
                        'od_eixo'=>$request->odeixo,
                        'oe_longe'=>$request->oelonge,
                        'oe_esf'=>$request->oeesf,
                        'oe_cil'=>$request->oecil,
                        'oe_eixo'=>$request->oeeixo,
                    ]);


                return redirect()->back()
                        ->with('mensagem', 'Editado com sucesso.');

    }

    public function excluirConsulta ($id){

        $teste = DB::table('cliente')
                            ->join('consultas', 'cliente.id_cliente', '=',
                                    'consultas.fk_cliente_consulta')
                            ->where('consultas.id_consulta', $id)
                            ->select ('id_cliente')
                            ->first();

                 $excluir =DB::table('consultas')
                            ->where('id_consulta', $id)
                            ->delete();



        $resultado = $this->listarConsultaId($teste->id_cliente);

        $contador = $resultado->count();

        $clientes = DB::table('cliente')
                        ->where('id_cliente',$teste->id_cliente)
                            ->first();

        $id = $clientes->id_cliente;

        if ($contador > 0) {

            return redirect()->route('listar.consulta', [$id])
                    ->with('excluido', 'Consulta excluída com sucesso ');

        } else {
            return redirect()->route('pesquisar.consulta')
                    ->with('mensagem', 'Cliente não possui consulta registrada');
        }

        /*DB::table('consultas')
                    ->where('id_consulta', $id)
                    ->delete();


                return redirect()->back()
                        ->with('mensagemeditada', 'Editado com sucesso.');*/

    }


///////////////////////////////////////////////////////////////////////////////////

    public function listarConsultaId($id)
    {
        $resultado = DB::table('consultas')
                            ->where('fk_cliente_consulta',$id)
                            ->orderBy('created_at', 'desc')
                            ->paginate(10);

        return $resultado;
    }

    public function buscaClienteCpf($cpf)
    {
        $resultado = DB::table('cliente')
                ->where('cpf_cliente',$cpf)
                ->get();

        return $resultado;
    }

    public function buscaClienteId($id_cliente)
    {
        $resultado = DB::table('cliente')
                ->where('id_cliente',$id_cliente)
                ->first();

        return $resultado;
    }


    public function buscaClienteNome($nome)
    {
        $resultado = DB::table('cliente')
                ->where('nome_cliente', 'like', '%'.$nome.'%')
                ->get();

        return $resultado;
    }
    public function buscaConsultaId($id)
    {
        $resultado = DB::table('consultas')
                ->where('id_consulta', $id)
                ->first();

        return $resultado;
    }


}
