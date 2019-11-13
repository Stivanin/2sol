<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Class vendas extends Model{

  protected $fillable = [
    'cod_produto',
    'quantidade',
    'valor_venda',
    'pagamento',
    'parcelas',
    'entrega',
    'data',
  ];
}
 ?>
