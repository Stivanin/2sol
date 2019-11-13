{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Funcionários
                    <a class="float-right" href="{{url('funcionarios/novo') }}">Novo Funcionário</a>
                </div>

                @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}} </div>
                @endif

                  <table class="table table-striped">
                    <th>Nome do Funcionário</th>
                    <th>Sexo do Funcionário</th>
                    <th>Data de Nascimento</th>
                    <th>Endereço</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Data de Admissão</th>
                    <th>Ações</th>
                    <tbody>
                      @foreach ($funcionarios as $funcionarios)
                        <tr>
                            <td>{{$funcionarios->nome}}</td>
                            <td>{{$funcionarios->sexo}}</td>
                            <td>{{$funcionarios->nascimento}}</td>
                            <td>{{$funcionarios->endereco}}</td>
                            <td>{{$funcionarios->cpf}}</td>
                            <td>{{$funcionarios->telefone}}</td>
                            <td>{{$funcionarios->admissao}}</td>
                            <td>
                              <a href="funcionarios/{{$funcionarios->id}}/editar" class="btn btn-primary">Editar</a>
                              {!!Form::open(['method' => 'DELETE', 'url' => '/funcionarios/'.$funcionarios->id, 'style' => 'display:inline']) !!}
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
