@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Informe abaixo as informações do novo produto
                    <a class="float-right" href="{{url('produtos') }}">Listagem Produtos</a>
                </div>

                @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}} </div>
                @endif

                @if(Request::is('*/editar'))
                    {!!Form::model($produtos, ['method' => 'PATCH', 'url' => 'produtos/'.$produtos->id]) !!}
                @else
                    {!!Form::open(['url' => 'produtos/salvar']) !!}
                @endif

                {!!Form::open(['url' => 'produtos/salvar', 'method' => 'post']) !!}

                <strong>{!!Form::label('nome','Nome') !!}</strong>
                {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome do Produto']) !!} <br />

                <strong>{!!Form::label('custo','Custo do Produto') !!}</strong>
                {!! Form::input('float', 'custo', null, ['class' => 'form-control', '', 'placeholder' => 'Custo do Produto']) !!}<br />

                <strong>{!!Form::label('valor','Valor de Venda do Produto') !!}</strong>
                {!! Form::input('float', 'valor', null, ['class' => 'form-control', '', 'placeholder' => 'Valor do Produto']) !!}<br />

                <strong>{!!Form::label('especificacao','Especificações do Produto') !!}</strong>
                {!! Form::input('text', 'especificacao', null, ['class' => 'form-control', '', 'placeholder' => 'Especificações']) !!}<br />

                {!! Form::submit('Cadastrar', ['class' => 'btn-primary']) !!}
                {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
