@extends('admin.layouts.app')
@section('title', 'Imoveis - Imobiliária')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@section('content')

<style>
    /* CSS para ajustar o tamanho das imagens */
    .img-preview {
        max-width: 50%;
        max-height: 80px; /* Tamanho da imagem */
        display: inline-block;
        margin-top: 10px; /* Margem superior para separar as imagens */
    }
</style>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Adicionar Imóvel</h6>

                    <form method="POST" action="{{ route('imoveis.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Título -->
                                <div class="form-group">
                                    <label for="titulo">Título</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                                </div>

                                <!-- Tipo de Negociação -->
                                <div class="form-group">
                                    <label for="tipo_negociacao">Tipo de Negociação</label>
                                    <select class="form-control" id="tipo_negociacao" name="tipo_negociacao" required>
                                        <option selected disabled>Selecione</option>
                                        <option value="venda">Venda</option>
                                        <option value="arrendamento">Arrendamento</option>
                                    </select>
                                </div>

                                <!-- Preço -->
                                <div class="form-group">
                                    <label for="preco">Preço</label>
                                    <input type="number" class="form-control" id="preco" name="preco" required>
                                </div>

                                <!-- Localização -->
                                <div class="form-group">
                                    <label for="localizacao">Localização</label>
                                    <input type="text" class="form-control" id="localizacao" name="localizacao" required>
                                </div>

                                <!-- Imagem Frontal -->
                                <div class="form-group">
                                    <label for="imagem_frontal">Imagem Frontal</label>
                                    <input type="file" class="form-control-file" id="imagem_frontal" name="imagem_frontal" accept="image/*" required>
                                    <img id="imagem_frontal_preview" class="img-preview" src="#" alt="Imagem Frontal">
                                </div>
                                    <!-- Recursos Opcionais -->
                        <div class="form-group">
                            <label for="recursos_opcionais">Recursos Opcionais (separados por vírgulas)</label>
                            <input type="text" class="form-control" id="recursos_opcionais" name="recursos_opcionais">
                        </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Cidade -->
                                <div class="form-group">
                                    <label for="id_cidade">Cidade</label>
                                    <select class="form-control" id="id_cidade" name="id_cidade" required>
                                        <option selected disabled>Selecione</option>
                                        @foreach ($cidades as $cidade)
                                        <option value="{{ $cidade->id }}">{{ $cidade->nome_cidade }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Distrito -->
                                <div class="form-group">
                                    <label for="id_distrito">Distrito</label>
                                    <select class="form-control" id="id_distrito" name="id_distrito" required>
                                        <option selected disabled>Selecione</option>
                                        @foreach ($distritos as $distrito)
                                        <option value="{{ $distrito->id }}">{{ $distrito->nome_distrito }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Status -->
                                <div class="form-group">
                                    <label for="id_status">Status</label>
                                    <select class="form-control" id="id_status" name="id_status" required>
                                        <option selected disabled>Selecione</option>
                                        @foreach ($status as $stat)
                                        <option value="{{ $stat->id }}">{{ $stat->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Descrição -->
                                <div class="form-group">
                                    <label for="descricao">Descrição</label>
                                    <textarea class="form-control" id="descricao" name="descricao" required></textarea>
                                </div>

                                       <!-- Imagens Extras -->
                                    <div class="form-group">
                                        <label for="imagens">Mutiplas Imagens</label>
                                        <input type="file" class="form-control-file" id="imagens" name="imagens[]" accept="image/*" multiple>
                                        <div id="imagens_preview"></div>
                                    </div>




                        <!-- Tipo de Imóvel -->
                        <div class="form-group">
                            <label for="tipo_imovel">Tipo de Imóvel</label>
                            <select class="form-control" id="tipo_imovel" name="tipo_imovel" required>
                                <option selected disabled>Selecione</option>
                                <option value="casa">Casa</option>
                                <option value="apartamento">Apartamento</option>
                                <option value="terreno">Terreno</option>
                            </select>
                        </div>

                        <!-- Campos específicos para Casa -->
                        <div id="casa-fields" style="display: none;">
                            <div class="form-group">
                                <label for="num_quartos">Número de Quartos</label>
                                <input type="number" class="form-control" id="num_quartos" name="num_quartos">
                            </div>

                            <div class="form-group">
                                <label for="num_banheiros">Número de Banheiros</label>
                                <input type="number" class="form-control" id="num_banheiros" name="num_banheiros">
                            </div>

                            <div class="form-group">
                                <label for="salas">Salas</label>
                                <input type="number" class="form-control" id="salas" name="salas">
                            </div>

                            <div class="form-group">
                                <label for="cozinhas">Cozinhas</label>
                                <input type="number" class="form-control" id="cozinhas" name="cozinhas">
                            </div>

                            <div class="form-group">
                                <label for="garagem">Garagem</label>
                                <input type="checkbox" class="form-check-input" id="garagem" name="garagem">
                            </div>

                            <div class="form-group">
                                <label for="quintal">Quintal</label>
                                <input type="checkbox" class="form-check-input" id="quintal" name="quintal">
                            </div>

                            <!-- Outros campos específicos para Casa -->
                        </div>

                        <!-- Campos específicos para Apartamento -->
                        <div id="apartamento-fields" style="display: none;">
                            <div class="form-group">
                                <label for="num_quartos_ap">Número de Quartos</label>
                                <input type="number" class="form-control" id="num_quartos_ap" name="num_quartos_ap">
                            </div>

                            <div class="form-group">
                                <label for="num_banheiros_ap">Número de Banheiros</label>
                                <input type="number" class="form-control" id="num_banheiros_ap" name="num_banheiros_ap">
                            </div>

                            <div class="form-group">
                                <label for="num_varandas">Número de Varandas</label>
                                <input type="number" class="form-control" id="num_varandas" name="num_varandas">
                            </div>

                            <div class="form-group">
                                <input type="checkbox" class="form-check-input" id="lugar_estacionamento" name="lugar_estacionamento">
                                <label for="lugar_estacionamento" class="form-check-label">Lugar de Estacionamento</label>
                            </div>


                            <!-- Outros campos específicos para Apartamento -->
                        </div>

                        <!-- Campos específicos para Terreno -->
                        <div id="terreno-fields" style="display: none;">
                            <div class="form-group">
                                <label for="latitude">Latitude</label>
                                <input type="text" class="form-control" id="latitude" name="latitude">
                            </div>

                            <div class="form-group">
                                <label for="longitude">Longitude</label>
                                <input type="text" class="form-control" id="longitude" name="longitude">
                            </div>

                            <div class="form-group">
                                <label for="tamanho">Tamanho (m²)</label>
                                <input type="text" class="form-control" id="tamanho" name="tamanho">
                            </div>

                            <div class="form-group">
                                <label for="zoneamento">Zoneamento</label>
                                <input type="text" class="form-control" id="zoneamento" name="zoneamento">
                            </div>

                            <!-- Outros campos específicos para Terreno -->
                        </div>
                    </div>
                </div>



                        <button type="submit" class="btn btn-primary">Salvar Imóvel</button>
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

        // Atualizar a imagem frontal ao selecionar uma imagem
        $('#imagem_frontal').change(function() {
            readURL(this, '#imagem_frontal_preview');
        });


        // Função para ler a URL da imagem e atualizar o preview
        function readURL(input, previewElement, index) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    if (index !== undefined) {
                        // Se index for definido, é uma imagem extra
                        $(previewElement).append('<img class="img-preview" src="' + e.target.result + '" alt="Imagem ' + index + '">');
                    } else {
                        // Se não, é a imagem frontal
                        $(previewElement).attr('src', e.target.result);
                    }
                }

                reader.readAsDataURL(input.files[0]);
            } else {
                // Lidar com o caso em que a imagem está vazia
                $(previewElement).attr('src', ''); // Limpar a imagem atual
            }
        }
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        // Atualizar as imagens extras ao selecionar várias imagens
        $('#imagens').change(function() {
            $('#imagens_preview').empty(); // Limpar previews anteriores

            for (let i = 0; i < this.files.length; i++) {
                readURL(this.files[i], '#imagens_preview', i);
            }
        });

        // Função para ler a URL da imagem e atualizar o preview
        function readURL(input, previewElement, index) {
            if (input) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $(previewElement).append('<img class="img-preview" src="' + e.target.result + '" alt="Imagem ' + index + '">');
                }

                reader.readAsDataURL(input);
            }
        }
    });
</script>



