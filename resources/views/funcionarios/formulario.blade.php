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
                  {!!Form::model($funcionarios, ['method' => 'PATCH', 'url' => 'funcionarios/'.$funcionarios->id]) !!}
              @else
                  {!!Form::open(['url' => 'funcionarios/salvar']) !!}
              @endif

              <!-- form start -->
              {!!Form::open(['url' => 'funcionarios/salvar', 'method' => 'post']) !!}
              <div class="card-body">
                  <div class="form-group">
                    <div class="input-group">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                      <label class="col-form-label">Nome</label>
                      {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Digite...']) !!} <br />
                    </div>
                      <div class="form-group">
                        <div class="col-12">
                            <label>Gênero</label>
                        </div>
                        {!! Form::select('genero', array('masculino' => 'Masculino',
                                                        'feminino' =>  'Feminino'), 
                                                        ['class' => 'form-control']) !!}
                      </div>
                      <!-- text input -->
                      <div class="form-group">
                      <label class="col-form-label">Data de Nascimento</label>
                      {!! Form::input('date', 'data_nascimento', null, ['class' => 'form-control', '']) !!}<br />
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Endereço</label>
                      {!! Form::input('text', 'endereco', null, ['class' => 'form-control', '', 'placeholder' => 'Digite...']) !!}<br />
                    </div>
                    <!-- text input -->
                    <div class="form-group">
                      <label class="col-form-label">CPF</label>
                      {!! Form::input('text', 'cpf', null, ['class' => 'form-control', '', 'placeholder' => 'Digite...']) !!}<br />
                    </div>
                      <!-- text input -->
                    
                    <div class="form-group">
                        <label class="col-form-label">Telefone</label>
                        {!! Form::input('text', 'telefone', null, ['class' => 'form-control', '', 'placeholder' => 'Digite...']) !!}<br />
                      </div>
                      <div class="form-group">
                        <label class="col-form-label">Salário</label>
                        {!! Form::input('text', 'salario', null, ['class' => 'form-control', '', 'placeholder' => 'Digite...']) !!}<br />
                      </div>
                      <div class="form-group">
                        <label class="col-form-label">Data de Admissão</label>
                        {!! Form::input('date', 'data_admissao', null, ['class' => 'form-control', '', 'placeholder' => 'Digite...']) !!}<br />
                      </div>
                      <div class="form-group">
                        <label class="col-form-label">Data de Demissão</label>
                        {!! Form::input('date', 'data_demissao', null, ['class' => 'form-control', '', 'placeholder' => 'Digite...']) !!}<br />
                      </div>
                      <div class="form-group">
                        <label class="col-form-label">Estado</label>
                        {!! Form::input('text', 'estado', null, ['class' => 'form-control', '', 'placeholder' => 'Digite...']) !!}<br />
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
