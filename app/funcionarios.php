<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funcionarios extends Model
{
    protected $fillable = [
        'nome',
        'genero',
        'data_nascimento',
        'cpf',
        'endereco',
        'telefone',
        'data_admissao',
        'salario',
        'data_demissao',
        'estado',
        
      ];
}

?>