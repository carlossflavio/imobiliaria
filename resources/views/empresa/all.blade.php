@extends('admin.layouts.app')
@section('title', 'Empresa')

@section('content')

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a class="btn btn-inverse-warning" href="{{route('add.empresa') }}">Adicionar dados da empresa</a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Dados da Empresa</h6>
                        <div class="table-responsive">

                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nif</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Telefone</th>
                                        <th>Localização</th>
                                        <th>Sobre Nós</th>
                                        <th>Acção</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mostrar as $key => $item)

                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->nif }}</td>
                                        <td>{{ $item->nome_empresa }}</td>
                                        <td>{{ $item->email_empresa }}</td>
                                        <td>{{ $item->telefone }}</td>
                                        <td>{{ $item->localizacao }}</td>
                                        <td>{{ $item->sobre_nos }}</td>
                                            <td>
                                                <a class="btn btn-inverse-dark" href="{{ route('editar.empresa', $item->id) }}">Editar</a>
                                                <a class="btn btn-inverse-danger" id="delete" href="{{ route('eliminar.empresa', $item->id) }}">Eliminar</a>
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
