@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Informe abaixo os dados do novo funcionário
                    <a class="float-right" href="{{url('funcionarios') }}">Listagem Funcionários</a>
                </div>

                @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}} </div>
                @endif

                @if(Request::is('*/editar'))
                    {!!Form::model($funcionarios, ['method' => 'PATCH', 'url' => 'funcionarios/'.$funcionarios->id]) !!}
                @else
                    {!!Form::open(['url' => 'funcionarios/salvar']) !!}
                @endif

                {!!Form::open(['url' => 'funcionarios/salvar', 'method' => 'post']) !!}

                <strong>{!!Form::label('nome','Nome') !!}</strong>
                {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome do Funcionário']) !!} <br />

                <strong>{!!Form::label('sexo','Sexo do Funcionário') !!}</strong><br />
                  <input type="radio" name="sexo" value="Masculino"> Masculino<br />
                  <input type="radio" name="sexo" value="Feminino"> Feminino<br />
                  <input type="radio" name="sexo" value="Outros"> Outros<br /><br />

                <strong>{!!Form::label('nascimento','Data de Nascimento do Funcionário') !!}</strong>
                {!! Form::input('text', 'nascimento', null, ['class' => 'form-control', '', 'placeholder' => 'DD/MM/AAAA']) !!}<br />

                <strong>{!!Form::label('endereco','Endereço do Funcionário') !!}</strong>
                {!! Form::input('text', 'endereco', null, ['class' => 'form-control', '', 'placeholder' => 'Endereço do Funcionário']) !!}<br />

                <strong>{!!Form::label('cpf','CPF do Funcionário') !!}</strong>
                {!! Form::input('text', 'cpf', null, ['class' => 'form-control', '', 'placeholder' => '111.222.333-44']) !!}<br />

                <strong>{!!Form::label('telefone','Telefone do Funcionário') !!}</strong>
                {!! Form::input('text', 'telefone', null, ['class' => 'form-control', '', 'placeholder' => '(35)91234-5678)']) !!}<br />

                <strong>{!!Form::label('admissao','Data de Admissão') !!}</strong>
                {!! Form::input('text', 'admissao', null, ['class' => 'form-control', '', 'placeholder' => 'DD/MM/AAAA']) !!}<br />

                {!! Form::submit('Cadastrar', ['class' => 'btn-primary']) !!}
                {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
