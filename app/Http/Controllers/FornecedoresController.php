<?php

namespace App\Http\Controllers;

use App\fornecedores;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;


class FornecedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fornecedores = fornecedores::get();
        return view('fornecedores.fornecedores', ['fornecedores' => $fornecedores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function novo()
    {
        return view('fornecedores.formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function salvar(Request $request)
    {
        $fornecedores = new \App\fornecedores();

        $fornecedores -> create($request->all());

        \Session::flash('mensagem_sucesso', 'Fornecedor cadastrado com sucesso!');
        return redirect ('fornecedores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function show(fornecedores $fornecedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $fornecedores = \App\fornecedores::findOrFail($id);

        return view('fornecedores.formulario', ['fornecedores' => $fornecedores]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function atualizar($id, Request $request)
    {
        $fornecedores = \App\fornecedores::findOrFail($id);
        $fornecedores->update($request->all());
        \Session::flash('mensagem_sucesso', 'Fornecedor atualizado com sucesso!');
        return redirect ('fornecedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function deletar($id)
    {
        $fornecedores = fornecedores::findOrFail($id);

        $fornecedores->delete();

        \Session::flash('mensagem_sucesso', 'Fornecedor deletado com sucesso!');

        return redirect ('fornecedores');
    }
}
