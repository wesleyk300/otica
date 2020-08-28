<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->increments('id_venda');
            $table->decimal('valor_total', 8, 2);
            $table->decimal('valor_venda', 8, 2);
            $table->decimal('desconto', 8, 2);
            $table->double('porcentagem', 8, 2);
            $table->enum('tipo_pagamento', ['Débito', 'Crédito', 'Dinheiro'])->nullable();

            $table->unsignedInteger('fk_cliente')->nullable()->default(NULL);
            $table->foreign('fk_cliente')->references('id_cliente')->on('cliente');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
