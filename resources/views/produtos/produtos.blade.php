@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Produtos
                    <a class="float-right" href="{{url('produtos/novo') }}">Novo Produto</a>
                </div>

                @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}} </div>
                @endif

                  <table class="table table-striped">
                    <th>Nome</th>
                    <th>Custo do Produto</th>
                    <th>Valor de Venda</th>
                    <th>Especificações do Produto</th>
                    <th>Ações</th>
                    <tbody>
                      @foreach ($produtos as $produtos)
                        <tr>
                            <td>{{$produtos->nome}}</td>
                            <td>{{$produtos->custo}}</td>
                            <td>{{$produtos->valor}}</td>
                            <td>{{$produtos->especificacao}}</td>
                            <td>
                              <a href="produtos/{{$produtos->id}}/editar" class="btn btn-primary">Editar</a>
                              {!!Form::open(['method' => 'DELETE', 'url' => '/produtos/'.$produtos->id, 'style' => 'display:inline']) !!}
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
