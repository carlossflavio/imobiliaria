@extends('admin.layouts.app')
@section('title', 'Registrar - Funcionário')


@section('content')

    <div class="row profile-body">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Registro de funcionário</h6>

<form method="POST" action="{{ route('user.register.create') }}" class="forms-sample"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nome</label>
                                            <input type="text" class="form-control" id="name" autocomplete="off"
                                                name="name" placeholder="Digite seu nome" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Sobrenome</label>
                                            <input type="text" class="form-control" id="name" autocomplete="off"
                                                name="sobrenome" placeholder="Digite seu sobrenome" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">NIF</label>
                                            <input type="text" class="form-control" id="name" autocomplete="off"
                                                name="nif" placeholder="Digite seu nif" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Digite seu Email" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Palavra-passe</label>
                                            <input type="password" class="form-control" id="password" autocomplete="off"
                                                name="password" placeholder="Digite sua Palavra-passe" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="password_confirmation" class="form-label">Confirmar
                                                Palavra-passe</label>
                                            <input type="password" class="form-control" id="password_confirmation"
                                                autocomplete="off" name="password_confirmation"
                                                placeholder="Confirme sua Palavra-passe" required>
                                        </div>


                                    </div>
                                    <div class="col-md-6">

                                        <div class="mb-3">
                                            <label for="morada" class="form-label">Morada</label>
                                            <input type="text" class="form-control" id="morada" autocomplete="off"
                                                name="morada" placeholder="Digite sua morada">
                                        </div>

                                        <div class="mb-3">
                                            <label for="telefone" class="form-label">Telefone</label>
                                            <input type="text" class="form-control" id="telefone" name="telefone"
                                                placeholder="Seu número de telefone">
                                        </div>

                                        <div class="mb-3">
                                            <label for="role" class="form-label">Cargo</label>
                                            <select class="form-control" name="role">
                                                <option selected="" disabled="">Selecione</option>
                                                <option value="secretaria">Secretaria</option>
                                                <option value="agente">Agente</option>
                                            </select>
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
