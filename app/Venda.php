<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = ['valor_total','valor_venda', 'desconto', 'porcentagem', 'tipo_pagamento', 'fk_cliente', 'created_at','updated_at'];
    protected $primaryKey = 'id_venda';
}
