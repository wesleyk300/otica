<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class consulta extends Model
{
    protected $fillable = [
                            'idade',
                            'od_longe',
                            'od_esf',
                            'od_cil',
                            'od_eixo',
                            'oe_longe',
                            'oe_esf',
                            'oe_cil',
                            'oe_eixo',
                            'fk_cliente_consulta',
                            'created_at',
                            'updated_at',
                        ];

            protected $primaryKey = 'id_consulta';

}
