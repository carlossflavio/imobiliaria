@extends('pages.layouts.layout')
@section('title','Login')
@section ('content')


<<<<<<< HEAD
@include('admin.layouts.css')

@guest
<br> <br>
<div class="intro intro-carousel swiper position-relative">
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}
</div>
@endif
=======
@include('pages.authentic.asset.css-auth')
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085

@guest
<div class="intro intro-carousel swiper position-relative">
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">

<<<<<<< HEAD

=======
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
                            <h4>Preparado para adquirir o seu imóvel?</h4>
                            <h6 class="font-weight-light">Inicie a sessão para continuar!</h6>

                            <form class="pt-3" method="POST" action="{{ route('cliente.login') }}">
                                @csrf

<<<<<<< HEAD
 <form class="pt-3" method="POST" action="{{ route('cliente.login') }}">

                                @csrf

                                <div class="form-group">
                                    <input type="email"
                                    name="email"
                                    class="form-control form-control-lg"
                                    placeholder="E-mail"  value="{{old ('email')}}" required>
                                </div>

=======
                                <div class="form-group">
                                    <input type="email"
                                    name="email"
                                    class="form-control form-control-lg" id="exampleInputEmail1" :value="old('email')"
                                    required autofocus autocomplete="username"
                                    placeholder="E-mail">
                                </div>
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
                                <div class="form-group">
                                    <input type="password"
                                    name="password"
                                    class="form-control form-control-lg"
<<<<<<< HEAD
                                    placeholder="Palavra-passe" required>
                                </div>


=======
                                    id="exampleInputPassword1"
                                    :value="('Password')"
                                    required autocomplete="current-password"
                                    placeholder="Palavra-passe">
                                </div>
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
                                <div class="mt-3">
                                    <button class="btn btn-block btn-warning btn-lg font-weight-medium auth-form-btn" type="submit"
                                        name="login">Entrar</button>
                                </div>
<<<<<<< HEAD

=======
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" name="remember" class="form-check-input"> Lembrar-me
                                        </label>
                                    </div>
<<<<<<< HEAD
                                    <a href="{{route ('password.request')}}" class="auth-link text-black">Esqueceu a palavra-passe?</a>
                                </div>
                                <div style="color: black" class="text-center mt-4 font-weight-light"> Não possui uma conta? <a
                                        href="{{ route('cliente.register') }}" class="text-warning">Cadastrar-se</a>
=======
                                    <a href="" class="auth-link text-black">Esqueceu a palavra-passe?</a>
                                </div>
                                <div style="color: black" class="text-center mt-4 font-weight-light"> Não possui uma conta? <a
                                        href="{{ route('cliente.add') }}" class="text-primary">Cadastrar-se</a>
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-carousel-pagination carousel-pagination"></div>
        </div>
    </div>
    <!-- content-wrapper ends -->
</div>
@endguest

@include('admin.layouts.js')


@endsection

