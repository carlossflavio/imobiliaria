@extends('admin.layouts.app')
@section('title', 'Adicionar Imóvel')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Adicionar Imóvel</h6>

                <form method="POST" action="{{ route('store.imoveis') }}" class="forms-simple" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-4">
                            <!-- Coluna 1 -->
                            <div class="form-group">
                                <label for="titulo">Título</label>
                                <input type="text" name="titulo" id="titulo" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="tipo_negociacao">Tipo de Negociação</label>
                                <select name="tipo_negociacao" id="tipo_negociacao" class="form-control" required>
                                    <option selected="" disabled="">Selecionar Negociação</option>
                                    <option value="arrendar">Arrendar</option>
                                    <option value="vender">Vender</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="qtd_cozinha">Quantidade de Cozinhas</label>
                                <input type="number" name="qtd_cozinha" id="qtd_cozinha" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="qtd_sala">Quantidade de Salas</label>
                                <input type="number" name="qtd_sala" id="qtd_sala" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="qtd_quartos">Quantidade de Quartos</label>
                                <input type="number" name="qtd_quartos" id="qtd_quartos" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="qtd_suite">Quantidade de Suítes</label>
                                <input type="number" name="qtd_suite" id="qtd_suite" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="qtd_wc">Quantidade de Banheiros</label>
                                <input type="number" name="qtd_wc" id="qtd_wc" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Coluna 2 -->
                            <div class="form-group">
                                <label for="quintal">Quintal</label>
                                <input type="text" name="quintal" id="quintal" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="varanda">Varanda</label>
                                <input type="text" name="varanda" id="varanda" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="dispensa">Dispensa</label>
                                <input type="text" name="dispensa" id="dispensa" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="area_servico">Área de Serviço</label>
                                <input type="text" name="area_servico" id="area_servico" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <textarea name="descricao" id="descricao" class="form-control" rows="4"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="imagens">Imagens</label>
                                <input type="file" name="imagens[]" id="imagens" class="form-control-file" multiple>
                            </div>
                        
                        </div>

                        <div class="col-md-4">
                            <!-- Coluna 3 -->
                            <div class="form-group">
                                <label for="dimensao">Dimensão</label>
                                <input type="text" name="dimensao" id="dimensao" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="localizacao">Localização</label>
                                <input type="text" name="localizacao" id="localizacao" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="latitude">Latitude</label>
                                <input type="text" name="latitude" id="latitude" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="longitude">Longitude</label>
                                <input type="text" name="longitude" id="longitude" class="form-control">
                            </div>


                            <div class="form-group">
                                <label for="preco">Preço</label>
                                <input type="text" name="preco" id="preco" class="form-control">
                            </div>
                            
                    </div>
                    </div>

                    <!-- Outros campos comuns entre as colunas -->
                    <div class="form-group">
                        <label for="id_cidade">Cidade</label>
                        <select name="id_cidade" id="id_cidade" class="form-control" required>
                            <option selected="" disabled="">Selecionar cidade</option>
                            @foreach($cidades as $cidade)
                            <option value="{{ $cidade->id }}">{{ $cidade->nome_cidade }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="id_distrito">Distrito</label>
                        <select name="id_distrito" id="id_distrito" class="form-control" required>
                            <option selected="" disabled="">Selecionar distrito</option>
                            @foreach($distritos as $distrito)
                            <option value="{{ $distrito->id }}">{{ $distrito->nome_distrito }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="id_distrito">Tipo de Imovel</label>
                        <select name="id_tipo_imovel" id="id_distrito" class="form-control" required>
                            <option selected="" disabled="">Selecionar Tipo</option>
                            @foreach($tiposImovel as $tipos)
                            <option value="{{ $tipos->id }}">{{ $tipos->nome_tipo }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="id_status_imovel">Status do Imóvel</label>
                        <select name="id_status_imovel" id="id_status_imovel" class="form-control" required>
                            <option selected="" disabled="">Selecionar status</option>
                            @foreach ($statusImoveis as $item)
                            <option value="{{ $item->id }}">{{ $item->status }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Botão de envio -->
                    <button type="submit" class="btn btn-warning me-2">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
