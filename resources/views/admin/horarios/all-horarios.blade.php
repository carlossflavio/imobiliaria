@extends('admin.layouts.app')
@section('title', 'Listagem de Horários')

@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a class="btn btn-inverse-warning" href="{{ route('horario.register') }}">Adicionar Horários</a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Horários Disponíveis</h6>
                        <div class="table-responsive">


                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Data Disponível</th>
                                        <th>Horário de Início</th>
                                        <th>Horário de Término</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($horario as $horarios)
                                        <tr>
                                            <td>{{ $horarios->data_disponivel }}</td>
                                            <td>{{ $horarios->horario_inicio }}</td>
                                            <td>{{ $horarios->horario_fim }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
