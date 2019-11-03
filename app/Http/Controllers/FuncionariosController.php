<?php

namespace App\Http\Controllers;

use App\funcionarios;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class FuncionariosController extends Controller
{
    function index()
    {
      $funcionarios = funcionarios::get();
      return view('funcionarios.funcionarios', ['funcionarios' => $funcionarios]);
    }

    public function novo()
    {
      return view('funcionarios.formulario');
    }

    public function salvar(Request $request)
    {
      $funcionarios = new \App\funcionarios();

      $funcionarios -> create($request->all());

      \Session::flash('mensagem_sucesso', 'Funcionário cadastrado com sucesso!');
      return redirect ('funcionarios');

    }

    public function editar($id)
    {
      $funcionarios = \App\funcionarios::findOrFail($id);

      return view('funcionarios.formulario', ['funcionarios' => $funcionarios]);
    }

    public function atualizar($id, Request $request)
    {
      $funcionarios = \App\funcionarios::findOrFail($id);
      $funcionarios->update($request->all());
      \Session::flash('mensagem_sucesso', 'Funcionário atualizado com sucesso!');
      return redirect ('funcionarios');
    }

    public function deletar($id)
    {
      $funcionarios = funcionarios::findOrFail($id);

      $funcionarios->delete();

      \Session::flash('mensagem_sucesso', 'Funcionário deletado com sucesso!');

      return redirect ('funcionarios');
    }
}
