{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Produtos</h3>
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
                  <th>Custo</th>
                  <th>Valor</th>
                  <th>Especificação</th>
                  <th> </th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($produtos as $produtos)
                  <tr>
                      <td>{{$produtos->nome}}</td>
                      <td>{{$produtos->custo}}</td>
                      <td>{{$produtos->valor}}</td>
                      <td>{{$produtos->especificacao}}</td>
                      <td>
                        <a href="produtos/{{$produtos->id}}/editar" class="btn btn-primary"><i class="far fa-edit"></i></a>
                        {!!Form::open(['method' => 'DELETE', 'url' => '/produtos/'.$produtos->id, 'style' => 'display:inline']) !!}
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
