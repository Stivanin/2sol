<?php

namespace App\Http\Controllers;

use App\clientes;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class ClientesController extends Controller
{
    function index()
    {
      $clientes = clientes::get();
      return view('clientes.clientes', ['clientes' => $clientes]);
    }

    public function novo()
    {
      return view('clientes.formulario');
    }

    public function salvar(Request $request)
    {
      $clientes = new \App\clientes();

      $clientes -> create($request->all());

      \Session::flash('mensagem_sucesso', 'Cliente cadastrado com sucesso!');
      return redirect ('clientes');

    }

    public function editar($id)
    {
      $clientes = \App\clientes::findOrFail($id);

      return view('clientes.formulario', ['clientes' => $clientes]);
    }

    public function atualizar($id, Request $request)
    {
      $clientes = \App\clientes::findOrFail($id);
      $clientes->update($request->all());
      \Session::flash('mensagem_sucesso', 'Cliente atualizado com sucesso!');
      return redirect ('clientes');
    }

    public function deletar($id)
    {
      $clientes = clientes::findOrFail($id);

      $clientes->delete();

      \Session::flash('mensagem_sucesso', 'Cliente deletado com sucesso!');

      return redirect ('clientes');
    }
}
