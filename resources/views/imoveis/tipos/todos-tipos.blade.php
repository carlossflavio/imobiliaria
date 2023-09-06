@extends('admin.layouts.app')
@section('title', 'Tipos-Imóveis')

@section('content')

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a class="btn btn-inverse-warning" href="{{route('add.tipos') }}">Adicionar tipo de Imóvel</a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Tipo de Imóveis</h6>
                        <div class="table-responsive">
                            {{-- <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>S1</th>
                                        <th>Nome do Tipo-Imóvel</th>
                                        <th>Acção</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($tipos as $key => $item)

                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->nome_tipo }}</td>
                                        <td>{{ $item->tipologia->nome_tipologia }}</td>
                                        <td>
                                            <a class="btn btn-inverse-dark" href="{{ route('editar.tipo', $item->id) }}">Editar</a>
                                            <a class="btn btn-inverse-danger" id="delete" href="{{ route('eliminar.tipo', $item->id) }}">Eliminar</a>
                                        </td>
                                    </tr>

                                     @endforeach


                                </tbody>
                            </table> --}}

                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome do Tipo de Imóvel</th>
                                        <th>Tipologia</th>
                                        <th>Acção</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tipos as $key => $item)

                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->nome_tipo }}</td>
                                        <td>{{ $item->tipologia->nome_tipologia }}</td>
                                            <td>
                                                <a class="btn btn-inverse-dark" href="{{ route('editar.tipo', $item->id) }}">Editar</a>
                                                <a class="btn btn-inverse-danger" id="delete" href="{{ route('eliminar.tipo', $item->id) }}">Eliminar</a>
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
