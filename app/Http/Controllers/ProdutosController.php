<?php

namespace App\Http\Controllers;

use App\produtos;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class ProdutosController extends Controller
{
    function index()
    {
      $produtos = produtos::get();
      return view('produtos.produtos', ['produtos' => $produtos]);
    }

    public function novo()
    {
      return view('produtos.formulario');
    }

    public function salvar(Request $request)
    {
      $produtos = new \App\produtos();

      $produtos -> create($request->all());

      \Session::flash('mensagem_sucesso', 'Cliente cadastrado com sucesso!');
      return redirect ('produtos');

    }

    public function editar($id)
    {
      $produtos = \App\produtos::findOrFail($id);

      return view('produtos.formulario', ['produtos' => $produtos]);
    }

    public function atualizar($id, Request $request)
    {
      $produtos = \App\produtos::findOrFail($id);
      $produtos->update($request->all());
      return redirect ('produtos');
    }

    public function deletar($id)
    {
      $produtos = Produtos::findOrFail($id);

      $produtos->delete();

      \Session::flash('mensagem_sucesso', 'Cliente deletado com sucesso!');
      
      return redirect ('produtos');
    }
}
