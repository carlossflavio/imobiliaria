@extends('admin.layouts.app')
@section('title', 'Editar Imóvel - Imobiliária')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Editar Imóvel</h6>

                    {{-- <form method="POST" action="{{ route('imoveis.update') }}" enctype="multipart/form-data"> --}}


                    <form method="POST" action="{{ route('imoveis.update', $imovel->id) }}" enctype="multipart/form-data">
                        @csrf


                        <div class="row">
                            <div class="col-md-6">

                        <!-- Título -->
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" class="form-control" id="titulo" name="titulo"
                                value="{{ $imovel->titulo }}" required>
                        </div>

                        <!-- Tipo de Negociação -->
                        <div class="form-group">
                            <label for="tipo_negociacao">Tipo de Negociação</label>
                            <select class="form-control" id="tipo_negociacao" name="tipo_negociacao" required>
                                <option selected disabled>Selecione</option>
                                <option value="venda" {{ $imovel->tipo_negociacao === 'venda' ? 'selected' : '' }}>Venda
                                </option>
                                <option value="arrendamento"
                                    {{ $imovel->tipo_negociacao === 'arrendamento' ? 'selected' : '' }}>Arrendamento
                                </option>
                            </select>
                        </div>

                        <!-- Preço -->
                        <div class="form-group">
                            <label for="preco">Preço</label>
                            <input type="number" class="form-control" id="preco" name="preco"
                                value="{{ $imovel->preco }}" required>
                        </div>

                        <!-- Localização -->
                        <div class="form-group">
                            <label for="localizacao">Localização</label>
                            <input type="text" class="form-control" id="localizacao" name="localizacao"
                                value="{{ $imovel->localizacao }}" required>
                        </div>

                        <!-- Cidade -->
                        <div class="form-group">
                            <label for="id_cidade">Cidade</label>
                            <select class="form-control" id="id_cidade" name="id_cidade" required>
                                <option selected disabled>Selecione</option>
                                @foreach ($cidades as $cidade)
                                    <option value="{{ $cidade->id }}"
                                        {{ $imovel->id_cidade === $cidade->id ? 'selected' : '' }}>
                                        {{ $cidade->nome_cidade }}</option>
                                @endforeach
                            </select>
                        </div>

                            </div>


                                <div class="col-md-6">

                        <!-- Distrito -->
                        <div class="form-group">
                            <label for="id_distrito">Distrito</label>
                            <select class="form-control" id="id_distrito" name="id_distrito" required>
                                <option selected disabled>Selecione</option>
                                @foreach ($distritos as $distrito)
                                    <option value="{{ $distrito->id }}"
                                        {{ $imovel->id_distrito === $distrito->id ? 'selected' : '' }}>
                                        {{ $distrito->nome_distrito }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Status -->
                        <div class="form-group">
                            <label for="id_status">Status</label>
                            <select class="form-control" id="id_status" name="id_status" required>
                                <option selected disabled>Selecione</option>
                                @foreach ($status as $stat)
                                    <option value="{{ $stat->id }}"
                                        {{ $imovel->id_status === $stat->id ? 'selected' : '' }}>{{ $stat->nome }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Descrição -->
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea class="form-control" id="descricao" name="descricao" required>{{ $imovel->descricao }}</textarea>
                        </div>

                        <!-- Tipo de Imóvel -->
                        <div class="form-group">
                            <label for="tipo_imovel">Tipo de Imóvel</label>
                            <select class="form-control" id="tipo_imovel" name="tipo_imovel" required>
                                <option selected disabled>Selecione</option>
                                <option value="casa" {{ $imovel->tipo_imovel === 'casa' ? 'selected' : '' }}>Casa
                                </option>
                                <option value="apartamento" {{ $imovel->tipo_imovel === 'apartamento' ? 'selected' : '' }}>
                                    Apartamento</option>
                                <option value="terreno" {{ $imovel->tipo_imovel === 'terreno' ? 'selected' : '' }}>Terreno
                                </option>
                            </select>
                        </div>


                        <!-- Campos específicos para Casa -->
                        <div id="casa-fields" style="display: {{ $imovel->tipo_imovel === 'casa' ? 'block' : 'none' }}">
                            <!-- Número de Quartos -->
                            <div class="form-group">
                                <label for="num_quartos">Número de Quartos</label>
                                <input type="number" class="form-control" id="num_quartos" name="num_quartos"
                                    value="{{ $imovel->informacoes_casa['num_quartos'] ?? '' }}">
                            </div>

                            <!-- Número de Banheiros -->
                            <div class="form-group">
                                <label for="num_banheiros">Número de Banheiros</label>
                                <input type="number" class="form-control" id="num_banheiros" name="num_banheiros"
                                    value="{{ $imovel->informacoes_casa['num_banheiros'] ?? '' }}">
                            </div>

                            <!-- Número de Suítes -->
                            <div class="form-group">
                                <label for="num_suites">Número de Suítes</label>
                                <input type="number" class="form-control" id="num_suites" name="num_suites"
                                    value="{{ $imovel->informacoes_casa['num_suites'] ?? '' }}">
                            </div>

                            <!-- Salas -->
                            <div class="form-group">
                                <label for="salas">Salas</label>
                                <input type="number" class="form-control" id="salas" name="salas"
                                    value="{{ $imovel->informacoes_casa['salas'] ?? '' }}">
                            </div>

                            <!-- Cozinhas -->
                            <div class="form-group">
                                <label for="cozinhas">Cozinhas</label>
                                <input type="number" class="form-control" id="cozinhas" name="cozinhas"
                                    value="{{ $imovel->informacoes_casa['cozinhas'] ?? '' }}">
                            </div>

                            <!-- Garagem -->
                            <div class="form-group">
                                <input type="checkbox" class="form-check-input" id="garagem" name="garagem"
                                    value=" {{ isset($imovel->informacoes_casa['garagem']) && $imovel->informacoes_casa['garagem'] ? 'checked' : '' }}">
                                <label for="garagem" class="form-check-label">Garagem</label>
                            </div>

                            <!-- Quintal -->
                            <div class="form-group">
                                <input type="checkbox" class="form-check-input" id="quintal" name="quintal"
                                    value=" {{ isset($imovel->informacoes_casa['quintal']) && $imovel->informacoes_casa['quintal'] ? 'checked' : '' }}">
                                <label for="quintal" class="form-check-label">Quintal</label>
                            </div>
                        </div>

                        <!-- Campos específicos para Apartamento -->
                        <div id="apartamento-fields"
                            style="display: {{ $imovel->tipo_imovel === 'apartamento' ? 'block' : 'none' }};">
                            <div class="form-group">
                                <label for="num_quartos_ap">Número de Quartos</label>
                                <input type="number" class="form-control" id="num_quartos_ap" name="num_quartos_ap"
                                    value="{{ isset($imovel->informacoes_apartamento['num_quartos']) ? $imovel->informacoes_apartamento['num_quartos'] : '' }}">
                            </div>

                            <div class="form-group">
                                <label for="num_banheiros_ap">Número de Banheiros</label>
                                <input type="number" class="form-control" id="num_banheiros_ap" name="num_banheiros_ap"
                                    value="{{ isset($imovel->informacoes_apartamento['num_banheiros']) ? $imovel->informacoes_apartamento['num_banheiros'] : '' }}">
                            </div>

                            <div class="form-group">
                                <label for="num_suites_ap">Número de Suítes</label>
                                <input type="number" class="form-control" id="num_suites_ap" name="num_suites_ap"
                                    value="{{ isset($imovel->informacoes_apartamento['num_suites']) ? $imovel->informacoes_apartamento['num_suites'] : '' }}">
                            </div>

                            <div class="form-group">
                                <label for="salas_ap">Salas</label>
                                <input type="number" class="form-control" id="salas_ap" name="salas_ap"
                                    value="{{ isset($imovel->informacoes_apartamento['salas']) ? $imovel->informacoes_apartamento['salas'] : '' }}">
                            </div>

                            <div class="form-group">
                                <label for="num_varandas">Número de Varandas</label>
                                <input type="number" class="form-control" id="num_varandas" name="num_varandas"
                                    value="{{ isset($imovel->informacoes_apartamento['num_varandas']) ? $imovel->informacoes_apartamento['num_varandas'] : '' }}">
                            </div>

                            <div class="form-group">
                                <input type="checkbox" class="form-check-input" id="lugar_estacionamento"
                                    name="lugar_estacionamento"
                                    {{ isset($imovel->informacoes_apartamento['lugar_estacionamento']) && $imovel->informacoes_apartamento['lugar_estacionamento'] ? 'checked' : '' }}>
                                <label for="lugar_estacionamento" class="form-check-label">Lugar de Estacionamento</label>
                            </div>
                        </div>

                        <!-- Campos específicos para Terreno -->
                        <div id="terreno-fields"
                            style="display: {{ $imovel->tipo_imovel === 'terreno' ? 'block' : 'none' }};">
                            <!-- Latitude -->
                            <div class="form-group">
                                <label for="latitude">Latitude</label>
                                <input type="text" class="form-control" id="latitude" name="latitude"
                                    value="{{ $imovel->informacoes_terreno['latitude'] ?? '' }}">
                            </div>

                            <!-- Longitude -->
                            <div class="form-group">
                                <label for="longitude">Longitude</label>
                                <input type="text" class="form-control" id="longitude" name="longitude"
                                    value="{{ $imovel->informacoes_terreno['longitude'] ?? '' }}">
                            </div>

                            <!-- Tamanho -->
                            <div class="form-group">
                                <label for="tamanho">Tamanho</label>
                                <input type="number" class="form-control" id="tamanho" name="tamanho"
                                    value="{{ $imovel->informacoes_terreno['tamanho'] ?? '' }}">
                            </div>

                            <!-- Zoneamento -->
                            <div class="form-group">
                                <label for="zoneamento">Zoneamento</label>
                                <input type="text" class="form-control" id="zoneamento" name="zoneamento"
                                    value="{{ $imovel->informacoes_terreno['zoneamento'] ?? '' }}">
                            </div>
                        </div>
                                </div>



                                <div class="mt-4">
                                    <button class="btn btn-block btn-warning btn-lg font-weight-medium auth-form-btn" type="submit">Atualizar</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
<script type="text/javascript">
    $(document).ready(function() {
        // Mostrar campos específicos com base no tipo de imóvel selecionado
        $('#tipo_imovel').change(function() {
            var selected = $(this).val();
            $('#casa-fields, #apartamento-fields, #terreno-fields').hide();

            if (selected === 'casa') {
                $('#casa-fields').show();
            } else if (selected === 'apartamento') {
                $('#apartamento-fields').show();
            } else if (selected === 'terreno') {
                $('#terreno-fields').show();
            }
        });


    });
</script>
