{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')



@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="col-lg-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Informações do Funcionário</h3>
              </div>
              <!-- /.card-header -->

              @if(Session::has('mensagem_sucesso'))
                <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}} </div>
              @endif

              @if(Request::is('*/editar'))
                  {!!Form::model($crediario, ['method' => 'PATCH', 'url' => 'crediario/'.$crediario->id]) !!}
              @else
                  {!!Form::open(['url' => 'crediario/salvar']) !!}
              @endif

              <!-- form start -->
              {!!Form::open(['url' => 'crediario/salvar', 'method' => 'post']) !!}
              <div class="card-body">
                  <div class="form-group">
                    <div class="input-group">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                      <label class="col-form-label">Código do Cliente</label>
                      {!! Form::input('number', 'cod_cliente', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Digite...']) !!} <br />
                    </div>
            
                      <!-- text input -->
                      <div class="form-group">
                      <label class="col-form-label">Número de Parcelas</label>
                      {!! Form::input('number', 'num_parcelas', null, ['class' => 'form-control', '']) !!}<br />
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Valor das Parcelas</label>
                      {!! Form::input('double', 'valor_parcelas', null, ['class' => 'form-control', '', 'placeholder' => 'Digite...']) !!}<br />
                    </div>
                    <!-- text input -->
                    <div class="form-group">
                      <label class="col-form-label">Vendedor</label>
                      {!! Form::input('text', 'vendedor', null, ['class' => 'form-control', '', 'placeholder' => 'Digite...']) !!}<br />
                    </div>
                      <!-- text input -->
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
@endsection
