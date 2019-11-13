<?php

namespace App\Http\Controllers;

use App\crediario;
use Illuminate\Http\Request;

class CrediarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crediario = crediario::get();
        return view('crediario.crediario', ['crediario' => $crediario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function novo()
    {
        return view('crediario.formulario');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function salvar(Request $request)
    {
        $crediario = new \App\crediario();

        $crediario -> create($request->all());

        \Session::flash('mensagem_sucesso', 'Crediário cadastrado com sucesso!');
        return redirect ('crediario');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\crediario  $crediario
     * @return \Illuminate\Http\Response
     */
    public function show(crediario $crediario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\crediario  $crediario
     * @return \Illuminate\Http\Response
     */
    public function editar(crediario $crediario)
    {
        $crediario = \App\crediario::findOrFail($id);

        return view('crediario.formulario', ['crediario' => $crediario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\crediario  $crediario
     * @return \Illuminate\Http\Response
     */
    public function atualizar(Request $request, crediario $crediario)
    {
        $crediario = \App\crediario::findOrFail($id);
        $crediario->update($request->all());
        \Session::flash('mensagem_sucesso', 'Crediário atualizado com sucesso!');
        return redirect ('crediario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\crediario  $crediario
     * @return \Illuminate\Http\Response
     */
    public function deletar(crediario $crediario)
    {
        $crediario = crediario::findOrFail($id);

        $crediario->delete();

        \Session::flash('mensagem_sucesso', 'Crediário deletado com sucesso!');

        return redirect ('crediario');
    }
}
