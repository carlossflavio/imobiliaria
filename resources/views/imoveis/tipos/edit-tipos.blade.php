@extends('admin.layouts.app')
@section('title', 'Tipos-Imóveis')

@section('content')

    <!-- Incio do Formulário de Edição -->
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                {{-- <h6 class="card-title">Editar Tipo de Imóvel!</h6>

                <form method="POST" action="{{ route('update.tipos') }}" class="forms-sample">
                    @csrf



<input type="hidden" name="id" value="{{$tipos->id}}">
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Nome Tipo de Imóvel</label>
<input type="text" name="nome_tipo" placeholder="Digite o nome do Imóvel"
class="form-control
@error('nome_tipo') is-invalid @enderror" value="{{ $tipos->nome_tipo }}">
@error('nome_tipo')
<span class="text-danger">{{ $message }}</span>
@enderror
</div> --}}

            <h6 class="card-title">Editar Tipo de Imóvel</h6>
            <form method="POST" action="{{ route('update.tipos') }}">
             @csrf
             
    <input type="hidden" name="id" value="{{ $tipo->id }}">
    <div class="form-group">
        <label for="nome_tipo">Nome do Tipo de Imóvel</label>
        <input type="text" class="form-control" id="nome_tipo" name="nome_tipo" value="{{ $tipo->nome_tipo }}">
    </div>
    <div class="form-group">
        <label for="id_tipologia">Tipologia</label>
        <select class="form-control" id="id_tipologia" name="id_tipologia">
            @foreach ($tipologias as $tipologia)
                <option value="{{ $tipologia->id }}">{{ $tipologia->nome_tipologia }}</option>
            @endforeach
        </select>
    </div>



                    <button type="submit" class="btn btn-warning me-2">Guardar Alterações</button>

                </form>
            </div>
        </div>
    </div>


@endsection
