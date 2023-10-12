@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Estado de Arrendamento para: {{ $imovel->titulo }}</h2>
    <form method="POST" action="{{ route('imoveis.update', ['id' => $imovel->id]) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="data_inicio">Data de Início</label>
            <input type="date" class="form-control" id="data_inicio" name="data_inicio" required>
        </div>

        <div class="form-group">
            <label for="data_fim">Data de Término</label>
            <input type="date" class="form-control" id="data_fim" name="data_fim" required>
        </div>

        <button type="submit" class="btn btn-warning">Atualizar Datas</button>
    </form>
</div>
@endsection
