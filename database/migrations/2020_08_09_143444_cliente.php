<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('id_cliente');
            $table->string('nome_cliente',45)->nullable()->default(NULL);
            $table->string('cpf_cliente',14)->nullable()->default(NULL);
            $table->string('endereco',100)->nullable()->default(NULL);
            $table->date('data_nascimento')->nullable()->default(NULL);
            $table->string('telefone_cliente',15)->nullable()->default(NULL);
            $table->string('celular_cliente',15)->nullable()->default(NULL);
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
