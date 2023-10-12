@extends('admin.layouts.app')
@section('title', 'Registrar - Proprietário')

@section('content')

<div class="row profile-body">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Registro de proprietário</h6>

                        <form method="POST" action="{{ route('propri.register.create') }}" class="forms-sample" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" autocomplete="off"
                                    name="name" placeholder="Digite o nome do proprietário" required>
                            </div>

                            <div class="mb-3">
                                <label for="sobrenome" class="form-label">Sobrenome</label>
                                <input type="text" class="form-control" id="sobrenome" autocomplete="off"
                                    name="sobrenome" placeholder="Digite o sobrenome do proprietário">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Digite o email do proprietário" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Palavra-passe</label>
                                <input type="password" class="form-control" id="password" autocomplete="off"
                                    name="password" placeholder="Digite a palavra-passe" required>
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirmar Palavra-passe</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    autocomplete="off" name="password_confirmation" placeholder="Confirme a palavra-passe" required>
                            </div>

                            <div class="mb-3">
                                <label for="nif" class="form-label">NIF</label>
                                <input type="text" class="form-control" id="nif" autocomplete="off"
                                    name="nif" placeholder="Digite o NIF do proprietário">
                            </div>

                            <div class="mb-3">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="text" class="form-control" id="telefone" name="telefone"
                                    placeholder="Digite o telefone do proprietário">
                            </div>

                            <div class="mb-3">
                                <label for="nacionalidade" class="form-label">Nacionalidade</label>
                                <input type="text" class="form-control" id="nacionalidade" autocomplete="off"
                                    name="nacionalidade" placeholder="Digite a nacionalidade do proprietário">
                            </div>

                            <div class="mb-3">
                                <label for="profissao" class="form-label">Profissão</label>
                                <input type="text" class="form-control" id="profissao" autocomplete="off"
                                    name="profissao" placeholder="Digite a profissão do proprietário">
                            </div>

                            <div class="mb-3">
                                <label for="morada" class="form-label">Morada</label>
                                <input type="text" class="form-control" id="morada" autocomplete="off"
                                    name="morada" placeholder="Digite a morada do proprietário">
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option selected="" disabled="">Selecione</option>
                                    <option value="activo">Activo</option>
                                    <option value="inactivo">Inactivo</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="imagem" class="form-label">Carregar Imagem</label>
                                <input type="file" class="form-control" id="imagem" name="imagem">
                            </div>

                            <button type="submit" class="btn btn-warning me-2">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
