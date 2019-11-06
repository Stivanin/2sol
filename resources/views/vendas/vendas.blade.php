@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Vendas
                    <a class="float-right" href="{{url('vendas/novo') }}">Nova Venda</a>
                </div>

                @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}} </div>
                @endif

                  <table class="table table-striped">
                    <th>Código do Produto Vendido</th>
                    <th>Quantidade de Itens</th>
                    <th>Valor Total da Venda</th>
                    <th>Método de Pagamento</th>
                    <th>Número de Parcelas</th>
                    <th>Método de Entrega</th>
                    <th>Ações</th>
                    <tbody>
                      @foreach ($vendas as $vendas)
                        <tr>

                            <td>{{$vendas->cod_produto}}</td>
                            <td>{{$vendas->quantidade}}</td>
                            <td>{{$vendas->valor_venda}}</td>
                            <td>{{$vendas->pagamento}}</td>
                            <td>{{$vendas->parcelas}}</td>
                            <td>{{$vendas->entrega}}</td>
                            <td>
                              <a href="vendas/{{$vendas->id}}/editar" class="btn btn-primary">Editar</a>
                              {!!Form::open(['method' => 'DELETE', 'url' => '/vendas/'.$vendas->id, 'style' => 'display:inline']) !!}
                              <button type="submit" class="btn btn-secondary">Excluir</button>
                              {!!Form::close() !!}
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<?php
$visualiza = DB::table('produtos')
->join('vendas', 'produtos.id', 'vendas.cod_produto')
->value('produtos.nome');?>
