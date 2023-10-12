{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
@extends('pages.layouts.layout')
@section('title', 'Registrar')
@section('content')

    @guest


        @include('admin.layouts.css')

        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-center auth">
                    <div class="row flex-grow">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-left p-5">
                                <h4>Novo aqui?</h4>
                                <h6 class="font-weight-light">Faça o seu cadastro e conheça os nossos serviços!</h6>
<<<<<<< HEAD
                                <form class="pt-3" method="POST" action="{{route('register') }}">
=======
                                <form class="pt-3" method="POST" action="{{route('cliente.registro') }}">
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085

                                    @csrf

                                    <div class="form-group">
                                        <input type="text"
                                        name="name"
                                         class="form-control form-control-lg"
<<<<<<< HEAD
                                        id="name"                                        placeholder="Nome"
                                        required autofocus autocomplete="name">
                                    </div>

=======
                                        id="name"
                                        placeholder="Seu nome"
                                        required="">
                                    </div>

                                    <div class="form-group">
                                        <input type="text"
                                        name="nif"
                                         class="form-control form-control-lg"
                                        id="nif"
                                        placeholder="NIF"
                                        required ="">
                                    </div>

                                    <div class="form-group">
                                        <input type="text"
                                        name="telefone"
                                         class="form-control form-control-lg"
                                        id="telefone"
                                        placeholder="Telefone"
                                        required ="">
                                    </div>
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085

                                    <div class="form-group">

                                        <input type="email" name="email" class="form-control form-control-lg"
<<<<<<< HEAD
                                            id="email" required autocomplete="Seu Email"
=======
                                            id="email" required=""
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
                                            placeholder="Email">

                                    </div>

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
                                            id="password" placeholder="Digite a sua Palavra-Passe" required="">

                                    </div>


                                    <div class="form-group">

                                        <input type="password" name="password_confirmation" class="form-control form-control-lg"
<<<<<<< HEAD
                                            id="password" required autocomplete="new-password"
=======
                                            id="password" required =""
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
                                            placeholder="Confirme a sua palavra-passe">

                                    </div>


                                    <div class="mt-3">
                                        <button class="btn btn-block btn-warning btn-lg font-weight-medium auth-form-btn"
                                            type="submit" name="register">Cadastrar</button>
                                    </div>
                                    <div class="text-center mt-4 font-weight-light"> Já possui uma conta?<a
                                            href="{{ route('cliente.login') }}" class="text-warning">Login</a>


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
        @include('admin.layouts.js')



    @endguest
@endsection


