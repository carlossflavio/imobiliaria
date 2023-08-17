

@extends('pages.layouts.layout')
@section('title','Página Home')
@section ('content')

@guest


@include('admin.layouts.css')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="{{asset('assetes/images/logo.svg')}}">
              </div>
              <h4>Novo aqui?</h4>
              <h6 class="font-weight-light">Faça o seu cadastro e conheça os nossos serviços!</h6>
              <form class="pt-3">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username">
                </div>
                <div class="form-group">

                  <input type="email"
                  name="email"
                  class="form-control form-control-lg"
                  id="exampleInputEmail1"
                  :value="old('email')"
                  placeholder="Email"
                  required autocomplete="username">

                </div>

                <div class="form-group">

                  <input type="password"
                  name="password"
                  class="form-control form-control-lg"
                  id="exampleInputPassword1"
                  placeholder="Password"
                  required autocomplete="new-password">

                </div>

                <div class="form-group">

                    <input type="password"
                    type="password"
                    name="password_confirmation"
                    id="exampleInputPassword1"
                    required autocomplete="new-password"
                    placeholder="Confirmar a Password">

                </div>

                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                  type="submit" name="register">SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="{{route('login')}}" class="text-primary">Login</a>
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
