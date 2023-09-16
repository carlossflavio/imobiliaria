@extends('admin.layouts.app')
@section('title', 'Add Tipos de Imóveis')

@section('content')


<div class="row">


    <!-- Incio do Formulário de Edição -->
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Adicionar Tipo de Imóvel!</h6>

                <form method="POST" action="{{route('store.tipos')}}" class="forms-sample" >
                    @csrf




<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Nome</label>
<input type="text" name="nome_tipo" placeholder="Digite o nome do Imóvel" class="form-control
@error('nome_tipo') is-invalid @enderror">
@error('nome_tipo')
  <span class="text-danger">{{$message}}</span>
@enderror
</div>



                    <button type="submit" class="btn btn-warning me-2">Guardar</button>

                </form>
            </div>
        </div>
    </div>
</div>


@endsection
