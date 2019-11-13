<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fornecedores extends Model
{
    protected $fillable = [
        'denominacao_social',
        'endereco',
        'cnpj',
        'email',
        'telefone',
      ];
}
