<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Saidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saidas', function (Blueprint $table) {
            $table->increments('id_saida');
            $table->integer('quantidade_saida');

            $table->unsignedInteger('fk_produto')->nullable()->default(NULL);
            $table->foreign('fk_produto')->references('id_produto')->on('produto');

            $table->unsignedInteger('fk_venda')->nullable()->default(NULL);
            $table->foreign('fk_venda')->references('id_venda')->on('vendas');

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
