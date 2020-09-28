<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome_cliente',
        'cpf_cliente',
        'endereco',
        'data_nascimento',
        'telefone_cliente',
        'celular_cliente',
    ];

    protected $table='cliente';
    protected $primaryKey = 'id_cliente';
}
