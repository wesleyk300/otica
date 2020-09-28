<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Consultas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
        $table->increments('id_consulta');
        $table->string('idade',7)->nullable()->default(NULL);
        $table->string('od_longe',5)->nullable()->default(NULL);
        $table->string('od_esf',5)->nullable()->default(NULL);
        $table->string('od_cil',5)->nullable()->default(NULL);
        $table->string('od_eixo',5)->nullable()->default(NULL);
        $table->string('oe_longe',5)->nullable()->default(NULL);
        $table->string('oe_esf',5)->nullable()->default(NULL);
        $table->string('oe_cil',5)->nullable()->default(NULL);
        $table->string('oe_eixo',5)->nullable()->default(NULL);

        $table->unsignedInteger('fk_cliente_consulta')->nullable()->default(NULL);
        $table->foreign('fk_cliente_consulta')->references('id_cliente')->on('cliente');
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
