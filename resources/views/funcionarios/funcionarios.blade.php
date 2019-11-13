{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">funcionarios</h3>
            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input id="busca" type="text" name="table_search" class="form-control float-right" placeholder="Buscar">
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
              
            <table class="table table-hover" id="tabela">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Gênero</th>
                  <th>Data de Nascimento</th>
                  <th>Endereço</th>
                  <th>Telefone</th>
                  <th>Salário</th>
                  <th>Data de Admissão</th>
                  <th>Data de Demissão</th>
                  <th>Estado</th>
                  <th> </th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($funcionarios as $funcionarios)
                  <tr>
                      <td>{{$funcionarios->nome}}</td>
                      <td>{{$funcionarios->genero}}</td>
                      <td>{{$funcionarios->data_nascimento}}</td>
                      <td>{{$funcionarios->endereco}}</td>
                      <td>{{$funcionarios->telefone}}</td>
                      <td>{{$funcionarios->salario}}</td>
                      <td>{{$funcionarios->data_admissao}}</td>
                      <td>{{$funcionarios->data_demissao}}</td>
                      <td>{{$funcionarios->estado}}</td>
                      <td>
                        <a href="funcionarios/{{$funcionarios->id}}/editar" class="btn btn-primary"><i class="far fa-edit"></i></a>
                        {!!Form::open(['method' => 'DELETE', 'url' => '/funcionarios/'.$funcionarios->id, 'style' => 'display:inline']) !!}
                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        {!!Form::close() !!}
                      </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      @if(Session::has('mensagem_sucesso'))
              <div class="alert alert-success col-3">{{ Session::get('mensagem_sucesso')}} </div>
      @endif
    </div>

</div>

<script>
    $(document).ready(function(){
      $("#busca").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#tabela tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script> 


@endsection
