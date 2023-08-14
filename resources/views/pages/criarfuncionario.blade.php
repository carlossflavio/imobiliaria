@extends('layout')
@section('content')
    <section class="intro-single">
        <div class="container ">
            <div class="row ">
                <div class="col-6">
                    <form action="{{ route('site.funcionario') }}" method="Post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nome:</label>
                            <input type="text" class="form-control" name="Nome" placeholder="Digite o nome">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Sobrenome:</label>
                            <input type="text" class="form-control" name="Sobrenome"
                                placeholder="Digite o seu sobrenome">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" name="Data" aria-describedby="DataHelp">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Email:</label>
                            <input type="email" class="form-control" name="Email" aria-describedby="emailHelp"
                                placeholder="Digite o email">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Password:</label>
                            <input type="password" class="form-control" name="Password" placeholder="Digite sua senha">
                        </div>

                        <button type="submit" class="btn btn-primary">Cadastrar</button>

                    </form>


                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome:</th>
                                <th scope="col">Sobrenome:</th>
                                <th scope="col">Email</th>
                                <th scope="col">Data Nascimento</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($dados as $informa)
                                <tr>
                                    <th scope="row">{{ $informa->id }}</th>
                                    <td>{{ $informa->nome }}</td>
                                    <td>{{ $informa->sobrenome }}</td>
                                    <td>{{ $informa->email }}</td>
                                    <td>{{ $informa->data }}</td>
                                </tr>
                            @endforeach
                                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
