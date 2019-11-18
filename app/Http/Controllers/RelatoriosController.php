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
                ->pluck('produtos.nome');



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

    public function produtos() {
        return view('relatorios.produtos');
    }

    public function gerarProdutos(Request $request) {

        //dd($request->get('dataInicio'));

        $vendas = \DB::table('vendas')
                ->where('data', '>=', $request->get('dataInicio'))
                ->where('data', '<=', $request->get('dataFim'))
                ->where('cod_produto', '=', $request->get('codProduto'))
                ->get();

        $visualiza = \DB::table('produtos')
                -> join('vendas', 'produtos.id', '=', 'vendas.cod_produto')
                ->value('produtos.nome');

        $soma=0;

        echo "<table>";
        foreach ($vendas as $vendas) {
            echo "<tr><td>" . $vendas->cod_produto . "  |</td><td>" . $visualiza . " -</td><td>| Quantidade: " . $vendas->quantidade . "</td><td> | Data da Venda: " . $vendas->data . "</td></tr>";
            $soma+=$vendas->quantidade;

        }
        echo "</table>";

            if ($soma == 0) {
               echo "Nenhuma compra foi feita no intervalo selecionado.";
            }
            else {
                echo "Total de Itens do Produto Vendido: ".$soma;
            }
    }

}
