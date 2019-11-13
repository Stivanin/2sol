<?php

namespace App\Http\Controllers;

use App\vendas;
use Illuminate\Http\Request;
use DB;

use App\Http\Controllers\Controller;

class VendasController extends Controller
{
    function index()
    {
      $vendas = vendas::get();
      return view('vendas.vendas', ['vendas' => $vendas]);
    }

    public function novo()
    {
      return view('vendas.formulario');
    }

    public function salvar(Request $request)
    {
      $vendas = new \App\vendas();

      $vendas -> create($request->all());

      \Session::flash('mensagem_sucesso', 'Venda realizada com sucesso!');
      return redirect ('vendas');

    }

    public function editar($id)
    {
      $vendas = \App\vendas::findOrFail($id);

      return view('vendas.formulario', ['vendas' => $vendas]);
    }

    public function atualizar($id, Request $request)
    {
      $vendas = \App\vendas::findOrFail($id);
      $vendas->update($request->all());
      \Session::flash('mensagem_sucesso', 'Venda realizada com sucesso!');
      return redirect ('vendas');
    }

    public function visualizar($id) {

        $vendas = vendas::findOrFail($id);

        return view('vendas.visualizar', ['vendas' => $vendas]);
    }

    public function deletar($id)
    {
      $vendas = Vendas::findOrFail($id);

      $vendas->delete();

      \Session::flash('mensagem_sucesso', 'Venda removida com sucesso!');

      return redirect ('vendas');
    }

    public function showNome()
    {
      return $visualiza = DB::table('produtos')
      ->join('vendas', 'produtos.id', 'vendas.cod_produto')
      ->value('produtos.nome');
    }

    public function showValor()
    {
      $Vcusto = DB::table('produtos')
      ->join('vendas', 'produtos.id', 'vendas.cod_produto')
      ->select('produtos.custo');
    }

    public function totalVendas(){
      $vendas = vendas::get();
      $total = $vendas->count();
      return $total;
    }
}
