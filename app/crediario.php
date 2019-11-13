<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class crediario extends Model
{
    protected $fillable = [
        'cod_cliente',
        'num_parcelas',
        'valor_parcelas',
        'vendedor',
      ];
}
