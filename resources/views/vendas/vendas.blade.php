{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Vendas</h3>
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
                  <th>Código do Produto</th>
                  <th>Quantidade</th>
                  <th>Valor Total</th>
                  <th>Forma de Pagamento</th>
                  <th>Número de parcelas</th>
                  <th>Modo de Entrega</th>
                  <th> </th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($vendas as $vendas)
                  <tr>
                      <td>{{$vendas->cod_produto}}</td>
                      <td>{{$vendas->quantidade}}</td>
                      <td>{{$vendas->valor_venda}}</td>
                      <td>{{$vendas->pagamento}}</td>
                      <td>{{$vendas->parcelas}}</td>
                      <td>{{$vendas->entrega}}</td>
                      <td>
                        <a href="vendas/{{$vendas->id}}/editar" class="btn btn-primary"><i class="far fa-edit"></i></a>
                        {!!Form::open(['method' => 'DELETE', 'url' => '/vendas/'.$vendas->id, 'style' => 'display:inline']) !!}
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
