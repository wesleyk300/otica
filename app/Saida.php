<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saida extends Model
{
    protected $fillable = ['quantidade_saida', 'valor_saida', 'subtotal','fk_produto', 'fk_venda'];
    protected $primaryKey = 'id_saida';
}
