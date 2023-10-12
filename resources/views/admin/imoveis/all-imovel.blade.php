@extends('admin.layouts.app')
@section('title', 'Listagem de Imóveis')

@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a class="btn btn-inverse-warning" href="{{route('imoveis.add') }}">Adicionar Imóvel</a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Imóveis</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Imagem Frontal</th>
                                        <th>Título</th>
                                        <th>Tipo de Negociação</th>
                                        <th>Cidade</th>
                                        <th>Tipo de Imóvel</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($imoveis as $key => $imovel)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            <div class="rounded-circle" style="width: 70px; height: 50px;">
                                               <img src="{{ asset($imovel->imagem_frontal) }}" alt="{{ $imovel->titulo }}">
                                            </div>
                                        </td>
                                        <td>{{ $imovel->titulo }}</td>
                                        <td>{{ $imovel->tipo_negociacao }}</td>
                                        <td>{{ $imovel->cidade->nome_cidade }}</td>
                                        <td>
                                            @if ($imovel->informacoes_casa)
                                                Casa
                                            @elseif ($imovel->informacoes_apartamento)
                                                Apartamento
                                            @elseif ($imovel->informacoes_terreno)
                                                Terreno
                                            @endif
                                        </td>
                                        <td>
                                           <a class="btn btn-inverse-dark btn-sm" href="{{ route('imoveis.edit', $imovel->id) }}">Editar</a>
                                            <a class="btn btn-inverse-danger btn-sm" id="delete" href="{{route('imoveis.delete', $imovel->id)}}">Eliminar</a>
                                        </td>
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
