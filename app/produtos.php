<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Class produtos extends Model{

  protected $fillable = [
    'nome',
    'custo',
    'valor',
    'especificacao'
  ];
}
 ?>
