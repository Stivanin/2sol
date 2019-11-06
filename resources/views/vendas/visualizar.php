<?php


use App\vendas;
use Illuminate\Http\Request;
use App\Http\Requests;


$visualiza = DB::table('produtos')
        -> join('vendas', 'produtos.id', '=', 'vendas.cod_produto')
        ->get('produtos.nome');



          echo "<table>";
          echo "<tr><td>" . $visualiza . "</td></tr>";
          echo "</table>";
