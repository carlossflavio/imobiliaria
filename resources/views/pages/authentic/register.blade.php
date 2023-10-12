@extends('pages.layouts.layout')
@section('title', 'Registrar')
@section('content')



@include('admin.layouts.css')

    @guest

<br>


        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-center auth">
                    <div class="row flex-grow">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-left p-5">
                                <h4>Novo aqui?</h4>
                                <h6 class="font-weight-light">Faça o seu cadastro e conheça os nossos serviços!</h6>
<<<<<<< HEAD
                                <form class="pt-3" method="POST" action="{{route('cliente.create')}}">
=======
                                <form class="pt-3" method="POST" action="{{route('cliente.registro') }}">
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085

                                    @csrf

                                    <div class="form-group">
                                        <input type="text"
                                        name="name"
                                         class="form-control form-control-lg"
<<<<<<< HEAD
                                        id="name" placeholder="Nome Completo"
                                        value="{{old('name')}}"
                                      >
                                    </div>

=======
                                        id="name"                                        placeholder="Nome"
                                        required autofocus autocomplete="name">
                                    </div>


>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
                                    <div class="form-group">

                                        <input type="email" name="email" class="form-control form-control-lg"
                                            id="email" required autocomplete="Seu Email"
<<<<<<< HEAD
                                            placeholder="Email" value="{{old('email')}}">
=======
                                            placeholder="Email">
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085

                                    </div>

@error('email')
<div class="alert alert-danger" role="alert">
  {{ $message }}
</div>
@enderror


                                    <div class="form-group">
                                        <input type="text"
                                        name="nif"
                                         class="form-control form-control-lg"
                                        id="nif"
                                        placeholder="NIF"
                                        required autofocus autocomplete="nif">
                                    </div>

                                    <div class="form-group">
                                        <input type="text"
                                        name="telefone"
                                         class="form-control form-control-lg"
                                        id="telefone"
                                        placeholder="Telefone">
                                    </div>


                                    <div class="form-group">

                                        <input type="password" name="password" class="form-control form-control-lg"
                                            id="password" placeholder="Password" required
                                            autocomplete="new-password">

                                    </div>

                                    <div class="form-group">

                                        <input type="password" name="password_confirmation" class="form-control form-control-lg"
                                            id="password" required autocomplete="new-password"
                                            placeholder="Confirme a sua palavra-passe">


                                   </div>

                                   @error('password')
                                   <div class="alert alert-danger" role="alert">
                                    <i class="bi bi-exclamation-triangle"></i>
                                       <strong>Erro:</strong> {{ $message }}
                                   </div>
                                   @enderror


                                    <div class="mt-3">
                                        <button class="btn btn-block btn-warning btn-lg font-weight-medium auth-form-btn"
                                            type="submit" name="register">Cadastrar</button>
                                    </div>
                                    <div class="text-center mt-4 font-weight-light"> Já possui uma conta?<a
<<<<<<< HEAD
                                            href="{{ route('cliente.form') }}" class="text-warning">Login</a>
=======
                                            href="{{ route('cliente.login') }}" class="text-warning">Login</a>
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085


                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>

    @endguest

    @include('pages.layouts.js')

@endsection


