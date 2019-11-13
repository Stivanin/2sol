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
                            <label for="email" class="col-md-4 control-label">Data Inicial</label>
                            <div class="col-md-6">
                                <input id="dataInicio" type="date" class="form-control" name="dataInicio">
                            </div>
                        </td>
                        <td>
                            <label for="password" class="col-md-4 control-label">Data Final</label>
                            <div class="col-md-6">
                                <input id="dataFim" type="date" class="form-control" name="dataFim">
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
