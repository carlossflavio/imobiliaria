@extends('admin.layouts.app')
@section('title', 'Lista de Imóveis')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Lista de Imóveis</h6>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Tipo de Negociação</th>
                                <th>Preço</th>
                                <th>Localização</th>
                                <th>Cidade</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($imoveis as $imovel)
                            <tr>
                                <td>{{ $imovel->titulo }}</td>
                                <td>{{ $imovel->tipo_negociacao }}</td>
                                <td>R$ {{ number_format($imovel->preco, 2) }}</td>
                                <td>{{ $imovel->localizacao }}</td>
                                <td>{{ $imovel->cidade->nome_cidade }}</td>
                                <td>{{ $imovel->statusImovel->status }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Editar</a>
                                        <a href="#" class="btn btn-danger btn-sm delete-imovel" data-id="{{ $imovel->id }}"><i class="fa fa-trash"></i> Eliminar</a>
                                    </div>
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
@endsection

@section('scripts')
<script>
    // Script para confirmar a exclusão do imóvel
    $(document).ready(function () {
        $(".delete-imovel").click(function () {
            var id = $(this).data('id');
            if (confirm("Tem certeza que deseja excluir este imóvel?")) {
                window.location.href = "/delete-imovel/" + id;
            }
        });
    });
</script> 
@endsection
