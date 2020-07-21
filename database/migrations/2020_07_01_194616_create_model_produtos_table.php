<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->increments('id_produto');
            $table->string('modelo_produto',45)->nullable()->default(NULL);           
            $table->string('cor_produto',15)->nullable()->default(NULL);
            $table->string('ref_produto',15)->nullable()->default(NULL);
            $table->decimal('valor_entrada', 8, 2)->nullable()->default(NULL);
            $table->decimal('valor_saida', 8, 2)->nullable()->default(NULL);
            $table->string('tratamento_produto',45)->nullable()->default(NULL);
            $table->integer('estoque')->nullable()->default(NULL);
            $table->unsignedInteger('marca_idmarca')->nullable()->default(NULL);
            $table->foreign('marca_idmarca')->references('idmarca')->on('marca');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto');
    }
}
