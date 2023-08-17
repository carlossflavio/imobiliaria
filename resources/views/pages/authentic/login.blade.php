@extends('pages.layouts.layout')
@section('content')
    @guest


        @include('admin.layouts.css')


        <div class="intro intro-carousel swiper position-relative">


            <div class="container-scroller">
                <div class="container-fluid page-body-wrapper full-page-wrapper">
                    <div class="content-wrapper d-flex align-items-center auth">
                        <div class="row flex-grow">
                            <div class="col-lg-4 mx-auto">
                                <div class="auth-form-light text-left p-5">
                                    <div class="brand-logo">
                                        <img src="{{ asset('assetes/images/logo.jpg') }}">
                                    </div>
                                    <h4>Preparado para adquirir o seu imóvel?</h4>
                                    <h6 class="font-weight-light">Inicie a sessão para continuar!</h6>

                                    <form class="pt-3" method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="form-group">
                                            <input type="email"
                                            name="email"
                                            class="form-control form-control-lg" id="exampleInputEmail1" :value="old('email')"
                                            required autofocus autocomplete="username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password"
                                            name="name"
                                            class="form-control form-control-lg"
                                            id="exampleInputPassword1"
                                            required autocomplete="current-password"
                                            placeholder="Password">
                                        </div>
                                        <div class="mt-3">
                                            <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                                href="{{__('Log in')}}">Entrar</a>
                                        </div>
                                        <div class="my-2 d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <label class="form-check-label text-muted">
                                                    <input type="checkbox" name="remember" class="form-check-input"> Keep me signed in
                                                </label>
                                            </div>
                                            <a href="{{route ('password.request')}}" class="auth-link text-black">Esqueceu a password?</a>
                                        </div>
                                        <div class="text-center mt-4 font-weight-light"> Não possui uma conta? <a
                                                href="{{ route('register') }}" class="text-primary">Criar</a>
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


        @include('admin.layouts.js')

    @endguest
@endsection
