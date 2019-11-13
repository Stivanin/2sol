{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Informações da Venda</h3>
                </div>
                <!-- /.card-header -->

                @if(Session::has('mensagem_sucesso'))
                  <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}} </div>
                @endif

                @if(Request::is('*/editar'))
                    {!!Form::model($vendas, ['method' => 'PATCH', 'url' => 'vendas/'.$vendas->id]) !!}
                @else
                    {!!Form::open(['url' => 'vendas/salvar']) !!}
                @endif

                <!-- form start -->
                {!!Form::open(['url' => 'vendas/salvar', 'method' => 'post']) !!}
                <div class="card-body">
                    <div class="form-group">
                      <div class="input-group">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                        <label class="col-form-label">Código do Produto</label>
                        {!! Form::input('text', 'cod_produto', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Digite...']) !!} <br />
                      </div>
                        <!-- text input -->
                        <div class="form-group">
                        <label class="col-form-label">Quantidade</label>
                        {!! Form::input('number', 'quantidade', null, ['class' => 'form-control', '','placeholder' => 'Digite...']) !!}<br />
                      </div>
                      <!-- text input -->
                      <div class="form-group">
                        <label class="col-form-label">Valor Total da Venda</label>
                        {!! Form::input('double', 'valor_venda', null, ['class' => 'form-control', '', 'placeholder' => 'Digite...']) !!}<br />
                      </div>
                        <!-- text input -->
                      <div class="form-group">
                        <label class="col-form-label">Método de Pagamento</label>
                        {!! Form::input('text', 'pagamento', null, ['class' => 'form-control', '', 'placeholder' => 'Digite...']) !!}<br />
                      </div>
                      <div class="form-group">
                        <label class="col-form-label">Número de Parcelas</label>
                        {!! Form::input('text', 'parcelas', null, ['class' => 'form-control', '', 'placeholder' => 'Digite...']) !!}<br />
                      </div>
                      <div class="form-group">
                        <label class="col-form-label">Método de Entrega</label>
                        {!! Form::input('text', 'entrega', null, ['class' => 'form-control', '', 'placeholder' => 'Digite...']) !!}<br />
                      </div>
                      <div class="form-group">
                        <label class="col-form-label">Data da Venda</label>
                        {!! Form::input('date', 'data', null, ['class' => 'form-control', '', 'placeholder' => 'Digite...']) !!}<br />
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    {!! Form::submit('Cadastrar', ['class' => 'btn btn-success']) !!}
                  </div>
                {!!Form::close()!!}
              </div>
        </div>
        </div>
    </div>
</div>
@endsection
