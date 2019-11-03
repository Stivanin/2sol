@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Informe abaixo os dados do cliente
                    <a class="float-right" href="{{url('clientes') }}">Listagem Clientes</a>
                </div>

                @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}} </div>
                @endif

                @if(Request::is('*/editar'))
                    {!!Form::model($clientes, ['method' => 'PATCH', 'url' => 'clientes/'.$clientes->id]) !!}
                @else
                    {!!Form::open(['url' => 'clientes/salvar']) !!}
                @endif

                {!!Form::open(['url' => 'clientes/salvar', 'method' => 'post']) !!}

                <strong>{!!Form::label('nome','Nome') !!}</strong>
                {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome do Cliente']) !!} <br />

                <strong>{!!Form::label('sexo','Sexo do Cliente') !!}</strong><br />
                  <input type="radio" name="sexo" value="Masculino"> Masculino<br />
                  <input type="radio" name="sexo" value="Feminino"> Feminino<br />
                  <input type="radio" name="sexo" value="Outros"> Outros<br /><br />

                <strong>{!!Form::label('nascimento','Data de Nascimento do Cliente') !!}</strong>
                {!! Form::input('text', 'nascimento', null, ['class' => 'form-control', '', 'placeholder' => 'DD/MM/AAAA']) !!}<br />

                <strong>{!!Form::label('endereco','Endereço do Cliente') !!}</strong>
                {!! Form::input('text', 'endereco', null, ['class' => 'form-control', '', 'placeholder' => 'Endereço do Cliente']) !!}<br />

                <strong>{!!Form::label('cpf','CPF do Cliente') !!}</strong>
                {!! Form::input('text', 'cpf', null, ['class' => 'form-control', '', 'placeholder' => '111.222.333-44']) !!}<br />

                {!! Form::submit('Cadastrar', ['class' => 'btn-primary']) !!}
                {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
