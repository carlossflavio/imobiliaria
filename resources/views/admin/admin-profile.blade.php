@extends('admin.layouts.app')
@section('title', 'Editar Perfil')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    {{-- <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form elements</h4>
        <p class="card-description"> Basic form elements </p>
        <form class="forms-sample">
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Gender</label>
            <select class="form-control" id="exampleSelectGender">
              <option>Male</option>
              <option>Female</option>
            </select>
          </div>
          <div class="form-group">
            <label>File upload</label>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-warning" type="button">Upload</button>
              </span>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">City</label>
            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Textarea</label>
            <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
          </div>
          <button type="submit" class="btn btn-warning mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div> --}}

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

                </div>
            </div>
        </div>
        <!-- Fim do Parte da Primeira Parte-->

        <!-- Incio do Formulário de Edição -->
        <div class="col-md-8 col-xl-8 maddle-wraper">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Editar Perfil</h6>

                    <form method="POST" action="{{route('admin.perfil.store')}}"  class="forms-sample" enctype="multipart/form-data">
                   @csrf
  <div class="mb-3">
      <label for="exampleInputUsername1" class="form-label">Nome</label>
      <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off"
      name="name" placeholder="Digite seu nome">
  </div>

  <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email"  class="form-control" id="exampleInputEmail1"
      name="email" placeholder="Digite seu Email">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Telefone</label>
    <input type="text"  class="form-control" id="exampleInputEmail1"
    name="telefone" placeholder="Seu número">
  </div>

  <div class="mb-3">
      <label class="form-label" for="formFile">Carregar Imagem</label>
      <input class="form-control" type="file" name="imagem" id="imagens">
  </div>

  <div class="mb-3">
    <label class="form-label" for="formFile"> </label>
    <img id="mostrarImagem" class="wd-70 rounded-circle"
    src="{{ !empty($profileData->imagem) ? url('upload/admin-imagem/' . $profileData->imagem) : url('upload/no_image.jpg') }}"
    alt="profile">
</div>


                        <button type="submit" class="btn btn-warning me-2">Guardar Alterações</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


<script type="text/javascript">

$(document).ready(function () {
    $('#imagens').change(function(e) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#mostrarImagem').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    });
});

</script>


@endsection
