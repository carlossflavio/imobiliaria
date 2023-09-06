@extends('admin.layouts.app')
@section('title', 'Add Empresa')

@section('content')


<div class="row">


    <!-- Incio do Formulário de Edição -->
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Adicionar Dados da empresa!</h6>

                <form method="POST" action="{{route('store.empresa')}}" class="forms-sample" >
                    @csrf




<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Nif</label>
<input type="text" name="nif" placeholder="Digite o nif da empresa" class="form-control
@error('nif') is-invalid @enderror">
@error('nif')
  <span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nome</label>
    <input type="text" name="nome_empresa" placeholder="Digite o nome da empresa" class="form-control
    @error('nome_empresa') is-invalid @enderror">
    @error('nome_empresa')
      <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" name="email_empresa" placeholder="Digite o email da empresa" class="form-control
    @error('email_empresa') is-invalid @enderror">
    @error('email_empresa')
      <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Telefone</label>
    <input type="text" name="telefone" placeholder="Digite o telefone da empresa" class="form-control
    @error('telefone') is-invalid @enderror">
    @error('telefone')
      <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Localização</label>
    <input type="text" name="localizacao" placeholder="Digite o nome do Imóvel" class="form-control
    @error('localizacao') is-invalid @enderror">
    @error('localizacao')
      <span class="text-danger">{{$message}}</span>
    @enderror
</div>


<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Sobre Nós</label>
    <textarea type="text" name="sobre_nos" class="form-control @error('sobre_nos') is-invalid @enderror" rows="5"></textarea>
    @error('sobre_nos')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>




                    <button type="submit" class="btn btn-warning me-2">Guardar</button>

                </form>
            </div>
        </div>
    </div>
</div>


@endsection
