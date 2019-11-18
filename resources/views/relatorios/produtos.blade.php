@extends('adminlte::page')


@section('content')

<div class="container spark-screen">
    <div class="row">
        <div class="col-md-12     col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Insira as Datas:
                </div>

                <form method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <table class="table table-striped" border="2">
                        <td>
                            <label for="DataInicial" class="col-md-4 control-label">Data Inicial</label>
                            <div class="col-md-6">
                                <input id="dataInicio" type="date" class="form-control" name="dataInicio">
                            </div>
                        </td>
                        <td>
                            <label for="DataFinal" class="col-md-4 control-label">Data Final</label>
                            <div class="col-md-6">
                                <input id="dataFim" type="date" class="form-control" name="dataFim">
                            </div>
                        </td>
                        <td>
                            <label for="codProduto" class="col-md-6 control-label">Codigo do Produto</label>
                            <div class="col-md-6">
                                <input id="codProduto" type="text" class="form-control" name="codProduto">
                            </div>
                        </td>
                    </table>
                    <div align="center">
                        <button type="submit" class="btn btn-default btn-sm" align="center"> Pesquisar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
