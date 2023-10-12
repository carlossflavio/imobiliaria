<!DOCTYPE html>
<html lang="pt-ao">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login-Proprietário</title>

    @include('admin.layouts.css')

</head>
<body>


    @guest
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
          <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
              <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left p-5">

                    <h4>Login para Proprietários autorizados!</h4>
                    <h6 class="font-weight-light">Inicie a sessão para continuar.</h6>

<form action="{{route ('proprietario.login') }}" class="pt-3" method="POST" >
    @csrf

                    <div class="form-group">
                      <input type="email"
                      name="email"
                       class="form-control form-control-lg" id="exampleInputEmail1" placeholder="E-mail">
                    </div>

                    <div class="form-group">
                      <input type="password"
                      name="password"
                      class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Palavra-passe">
                    </div>

                    <div class="mt-3">
                        <button class="btn btn-block btn-warning btn-lg font-weight-medium auth-form-btn" type="submit"
                         >Entrar</button>
                    </div>
                    <div class="my-2 d-flex justify-content-between align-items-center">
                      <div class="form-check">
                        <label class="form-check-label text-muted">
                          <input type="checkbox" class="form-check-input">Lembrar-me </label>
                      </div>

                      <a href="#" class="auth-link text-black">Esqueceu a palavra-passe?</a>
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

    @include('admin.layouts.js')


</body>
</html>

