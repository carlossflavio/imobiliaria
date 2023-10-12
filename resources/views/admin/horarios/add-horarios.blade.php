@extends('admin.layouts.app')
@section('title', 'Horários - Imobiliária')


@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Adicionar Hórarios </h6>

    <form method="POST" action="{{ route('horario.create') }}">
                        @csrf
                        <div class="form-group">
                            <label for="data_disponivel">Data Disponível:</label>
                            <input type="date" class="form-control" id="data_disponivel" name="data_disponivel" required>
                        </div>

                        <div class="form-group">
                            <label for="horario_inicio">Horário de Início:</label>
                            <input type="time" class="form-control" id="horario_inicio" name="horario_inicio" required>
                        </div>

                        <div class="form-group">
                            <label for="horario_fim">Horário de Término:</label>
                            <input type="time" class="form-control" id="horario_fim" name="horario_fim" required>
                        </div>


                        <button type="submit" class="btn btn-warning me-2">Guardar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
