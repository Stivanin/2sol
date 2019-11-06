@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Informe abaixo os dados da nova venda
                    <a class="float-right" href="{{url('vendas') }}">Vendas Realizadas:</a>
                </div>

                @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}} </div>
                @endif

                @if(Request::is('*/editar'))
                    {!!Form::model($vendas, ['method' => 'PATCH', 'url' => 'vendas/'.$vendas->id]) !!}
                @else
                    {!!Form::open(['url' => 'vendas/salvar']) !!}
                @endif

                {!!Form::open(['url' => 'vendas/salvar', 'method' => 'post']) !!}

                <strong>{!!Form::label('cod_produto','Código do Produto') !!}</strong>
                {!! Form::input('text', 'cod_produto', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Código do Produto']) !!} <br />

                <strong>{!!Form::label('quantidade','Quantidade de Itens') !!}</strong>
                {!! Form::input('integer', 'quantidade', null, ['class' => 'form-control', '', 'placeholder' => 'Quantidade de Itens']) !!}<br />

                <strong>{!!Form::label('valor_venda','Valor Total da Venda') !!}</strong>
                {!! Form::input('float', 'valor_venda', null, ['class' => 'form-control', '', 'placeholder' => 'Valor Total da Venda']) !!}<br />

                <strong>{!!Form::label('pagamento','Método de Pagamento') !!}</strong>
                {!! Form::input('text', 'pagamento', null, ['class' => 'form-control', '', 'placeholder' => 'Método de Pagamento']) !!}<br />

                <strong>{!!Form::label('parcelas','Número de Parcelas') !!}</strong>
                {!! Form::input('text', 'parcelas', null, ['class' => 'form-control', '', 'placeholder' => 'Número de Parcelas']) !!}<br />

                <strong>{!!Form::label('entrega','Método de Entrega') !!}</strong>
                {!! Form::input('text', 'entrega', null, ['class' => 'form-control', '', 'placeholder' => 'Método de Entrega']) !!}<br />

                {!! Form::submit('Cadastrar', ['class' => 'btn-primary']) !!}
                {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
