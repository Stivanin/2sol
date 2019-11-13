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
                  {!!Form::model($fornecedores, ['method' => 'PATCH', 'url' => 'fornecedores/'.$fornecedores->id]) !!}
              @else
                  {!!Form::open(['url' => 'fornecedores/salvar']) !!}
              @endif

              <!-- form start -->
              {!!Form::open(['url' => 'fornecedores/salvar', 'method' => 'post']) !!}
              <div class="card-body">
                  <div class="form-group">
                    <div class="input-group">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                      <label class="col-form-label">Denominação Social</label>
                      {!! Form::input('text', 'denominacao_social', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Digite...']) !!} <br />
                    </div>
            
                      <!-- text input -->
                      <div class="form-group">
                      <label class="col-form-label">Endereço</label>
                      {!! Form::input('text', 'endereco', null, ['class' => 'form-control', '']) !!}<br />
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">CNPJ</label>
                      {!! Form::input('text', 'cnpj', null, ['class' => 'form-control', '', 'placeholder' => 'Digite...']) !!}<br />
                    </div>
                    <!-- text input -->
                    <div class="form-group">
                      <label class="col-form-label">Email</label>
                      {!! Form::input('text', 'email', null, ['class' => 'form-control', '', 'placeholder' => 'Digite...']) !!}<br />
                    </div>
                      <!-- text input -->
                    <div class="form-group">
                        <label class="col-form-label">Telefone</label>
                        {!! Form::input('text', 'telefone', null, ['class' => 'form-control', '', 'placeholder' => 'Digite...']) !!}<br />
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
@endsection
