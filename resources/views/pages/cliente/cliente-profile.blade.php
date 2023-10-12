@extends('pages.layouts.layout')
@section('title', 'Editar Perfil')
@section('content')

@include('pages.layouts.css')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<br><br><br><br><br><br>
<div class="row profile-body">
    <!-- left wrapper start -->
    <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
        <div class="card rounded">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">

<div>
<img class="wd-100 rounded-circle"
src="{{ !empty($profileData->imagem) ? url('upload/cliente-imagem/' . $profileData->imagem) : url('upload/no_image.jpg') }}"
                            alt="profile">
<span class="h4 ms-3 text-dark">{{ $profileData->name }}</span>
</div>

                </div>
                <div class="mt-3">
                    <label class="tx-11 fw-bolder mb-0 text-uppercase">Sobrenome</label>
                    <p class="text-muted">{{ $profileData->sobrenome }}</p>
                </div>
                <div class="mt-3">
                    <label class="tx-11 fw-bolder mb-0 text-uppercase">Telefone:</label>
                    <p class="text-muted">{{ $profileData->telefone }}</p>
                </div>
                <div class="mt-3">
                    <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                    <p class="text-muted">{{ $profileData->email }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim do Parte da Primeira Parte-->

    <!-- Incio do Formulário de Edição -->
    <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Editar Perfil</h6>


<form method="POST" action="{{route('cliente.update')}}" class="forms-sample" enctype="multipart/form-data">

    @csrf


                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off"
                            name="name" placeholder="Digite seu nome" value="{{ $profileData->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputSobrenome" class="form-label">Sobrenome</label>
                        <input type="text" class="form-control" id="exampleInputSobrenome" autocomplete="off"
                            name="sobrenome" placeholder="Digite seu sobrenome" value="{{ $profileData->sobrenome }}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputNif" class="form-label">NIF</label>
                        <input type="text" class="form-control" id="exampleInputNif" name="nif"
                            placeholder="Digite seu NIF" value="{{ $profileData->nif }}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputTelefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="exampleInputTelefone" name="telefone"
                            placeholder="Seu número" value="{{ $profileData->telefone }}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputNacionalidade" class="form-label">Nacionalidade</label>
                        <select class="form-control" id="exampleInputNacionalidade" name="nacionalidade">
                            <option selected >Selecione</option>
                            <option value="Angola" {{ $profileData->nacionalidade === 'Angola' ? 'selected' : '' }}>Angola</option>
                            <option value="Portugal" {{ $profileData->nacionalidade === 'Portugal' ? 'selected' : '' }}>Portugal</option>
                            <option value="Inglaterra" {{ $profileData->nacionalidade === 'Inglaterra' ? 'selected' : '' }}>Inglaterra</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputMorada" class="form-label">Morada</label>
                        <input type="text" class="form-control" id="exampleInputMorada" name="morada"
                            placeholder="Digite sua morada" value="{{ $profileData->morada }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="formFile">Carregar Imagem</label>
                        <input class="form-control" type="file" name="imagem" id="imagens">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="formFile"> </label>
                        <img id="mostrarImagem" class="wd-70 rounded-circle"
                            src="{{ !empty($profileData->imagem) ? url('upload/cliente-imagem/' . $profileData->imagem) : url('upload/no_image.jpg') }}"
                            alt="profile">
                    </div>

                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-warning me-2">Guardar Alterações</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#imagens').change(function (e) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#mostrarImagem').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    });
</script>
<br>

@include('pages.layouts.js')

@endsection

