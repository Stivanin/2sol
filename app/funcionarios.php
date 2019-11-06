<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Class funcionarios extends Model{

  protected $fillable = [
    'nome',
    'sexo',
    'nascimento',
    'endereco',
    'cpf',
    'telefone',
    'admissao'
  ];
}
 ?>
