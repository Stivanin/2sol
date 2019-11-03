@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Clientes
                    <a class="float-right" href="{{url('clientes/novo') }}">Novo Cliente</a>
                </div>

                @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}} </div>
                @endif

                  <table class="table">
                    <th>Nome do Cliente</th>
                    <th>Sexo do Cliente</th>
                    <th>Data de Nascimento</th>
                    <th>Endereço</th>
                    <th>CPF</th>
                    <tbody>
                      @foreach ($clientes as $clientes)
                        <tr>
                            <td>{{$clientes->nome}}</td>
                            <td>{{$clientes->sexo}}</td>
                            <td>{{$clientes->nascimento}}</td>
                            <td>{{$clientes->endereco}}</td>
                            <td>{{$clientes->cpf}}</td>
                            <td>
                              <a href="clientes/{{$clientes->id}}/editar" class="btn btn-primary">Editar</a>
                              {!!Form::open(['method' => 'DELETE', 'url' => '/clientes/'.$clientes->id, 'style' => 'display:inline']) !!}
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
