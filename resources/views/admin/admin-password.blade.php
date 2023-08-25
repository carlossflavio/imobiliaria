@extends('admin.layouts.app')
@section('title', 'Editar Perfil')
@section('content')

    <div class="row profile-body">
        <!-- left wrapper start -->
        <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
            <div class="card rounded">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div>
                            <img class="wd-100 rounded-circle"
                                src="{{ !empty($profileData->imagem) ? url('upload/admin-imagem/' . $profileData->imagem) : url('upload/no_image.jpg') }}"
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
                    <div class="mt-3">
                        <label class="tx-11 fw-bolder mb-0 text-uppercase">Morada:</label>
                        <p class="text-muted">{{ $profileData->morada }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fim do Parte da Primeira Parte-->

        <!-- Incio do Formulário de Edição -->
        <div class="col-md-8 col-xl-8 maddle-wraper">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Alterar a Palavra-Passe</h6>

                    <form method="POST" action="{{route('admin.alterar.password')}}" class="forms-sample" enctype="multipart/form-data">
                        @csrf




<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Palavra-Passe Antiga</label>
    <input type="password" class="form-control @error('old_password') is-invalid
    @enderror" id="old_password" autocomplete="off"
    name="old_password" placeholder="Digite a palavra-passe antiga">
    @error('old_password')
      <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nova Palavra-Passe</label>
    <input type="password" class="form-control @error('new_password') is-invalid
    @enderror" id="new_password" autocomplete="off"
    name="new_password" placeholder="Digite a nova palavra-passe">
    @error('new_password')
      <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="mb-3">
  <label for="password" class="form-label"> Confirmar a Palavra-Passe</label>
  <input type="password" name="new_password_confirmation"
  class="form-control" id="new_password_confirmation"
  autocomplete="off"
  placeholder="Degite novamente a palavra-passe">
</div>



                        <button type="submit" class="btn btn-warning me-2">Guardar Alterações</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
