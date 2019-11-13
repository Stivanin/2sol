<?php

namespace App\Http\Controllers;


use App\vendas;
use App\produtos;
use Illuminate\Http\Request;
use App\Http\Requests;

class RelatoriosController extends Controller {

    public function index() {
        return view('relatorios.lista');
    }

    public function vendas() {
        return view('relatorios.vendas');
    }

    public function gerar(Request $request) {

        //dd($request->get('dataInicio'));

        $vendas = \DB::table('vendas')
                ->where('data', '>=', $request->get('dataInicio'))
                ->where('data', '<=', $request->get('dataFim'))
                ->get();

        $visualiza = \DB::table('produtos')
                -> join('vendas', 'produtos.id', '=', 'vendas.cod_produto')
                ->get('produtos.nome');


        $soma=0;
        echo "<table>";
        foreach ($vendas as $vendas) {
            echo "<tr><td>" . $visualiza . "  -</td><td>" . $vendas->quantidade . " -</td><td> R$ " . $vendas->valor_venda . "</td></tr>";
            $soma+=$vendas->valor_venda;

        }
        echo "</table>";

            if ($soma == 0) {
               echo "Nenhuma compra foi feita no intervalo selecionado.";
            }
            else {
                echo "Soma: R$ ".$soma;
            }
    }

}
