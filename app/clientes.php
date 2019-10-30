<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Class clientes extends Model{

  protected $fillable = [
    'nome',
    'sexo',
    'nascimento',
    'endereco',
    'cpf'
  ];
}
 ?>
