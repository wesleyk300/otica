<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="app.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <!-- <script src="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script> -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />


        <!-- select2-bootstrap4-theme -->
        <link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css" rel="stylesheet"> <!-- for live demo page -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">




        <meta name="viewport" content="width=device-width">

    	<title>Controle de Estoque Purchase Store</title>
    </head>
    <body>



        <form class="form-horizontal" method="post" action="{{route('venda.salvar')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="container">
                <div class="row">
                    <fieldset>
                        <!-- Form Name -->
                        <!-- Text input-->
                        <h1 style="text-align: center; ">Registrar Venda</h1><br>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="cliente">Nome da Cliente</label>
                                <div class="col-md-3">
                                    <select style="width:300%;" id="nomeClientes" name="fk_cliente" class="form-control">
                                        @foreach($cliente as $c)
                                            <option value="{{ $c->id_cliente }}">{{ $c->cpf_cliente }} - {{ $c->nome_cliente }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="produto">Código/Nome do Produto</label>
                                <div class="col-md-3">
                                    <select style="width:300%;" id="categoria" class="form-control">
                                        @foreach($produto as $p)
                                            <option label="{{ $p->valor_saida }}" value="{{ $p->id_produto }}">{!! $p->modelo_produto !!} - {!! $p->ref_produto !!}
                                                - ({!! $p->estoque !!})</option>
                                        @endforeach
                                    </select>
                                    <br>
                                    <button type="button" class="btn btn-primary" onclick="listaVenda()" data-type="plus" data-field="quant[1]">
                                        Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </fieldset>




                    <fieldset>
                        <div class="container">
                            <div class="row" id="lista">
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="porcentagem">Desconto %</label>
                            <div class="col-md-3">
                                <input id="descontoPorcent" name="porcentagem" onfocus="this.value=''" onchange="calcularDescontoPorcent()" value="{{ old('descontoPorcent') }}" type="text" placeholder="Insira desconto em porcentagem do produto" class="form-control input-md">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="desconto">Desconto R$</label>
                            <div class="col-md-3">
                                <input id="desconto" name="desconto" onfocus="this.value=''" onchange="calcularDesconto()" value="{{ old('desconto') }}" type="text" placeholder="Insira desconto em dinheiro do produto" class="form-control input-md">
                            </div>
                        </div>


                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="tipo_pagamento">Tipo de pagamento</label>
                            <div class="col-md-3">
                                <select class="form-control" id="tipo_pagamento" name="tipo_pagamento">
                                    <option value="1">Débito</option>
                                    <option value="2">Dinheiro</option>
                                    <option value="3">Crédito</option>
                                </select>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-md-4 control-label" for="desconto">Total</label>
                            <div class="col-md-3">
                                <input id="total" name="total" value="{{ old('total') }}" type="text" class="form-control input-md" disabled>
                                <input id="valorVenda" name="valor_venda" type="hidden">
                            </div>
                        </div>
                    </fieldset>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-5 control-label" for="salvar"></label>
                        <div class="col-md-3">
                        <button class="btn btn-success" onclick="valorTotal()">SALVAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

























</body>


              <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



              <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
              <script type="text/javascript" src="addproduto.js"></script>

</html>

