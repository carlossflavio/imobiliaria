@extends('pages.layouts.layout')
@section ('content')
<!-- ======= Intro Single ======= -->
<h1>Ali-Imobiliária</h1>
<form action="">
    <!-- Headings for the form -->
    <div class="headingsContainer">
        <h3>Entrar</h3>
        <p>Entrar com email ou palavra-passe</p>
    </div>

    <!-- Main container for all inputs -->
    <div class="mainContainer">
        <!-- Username -->
        <label for="username">Nom de Utilizador</label>
        <input type="text" placeholder="Digite o username ou email" name="username" required>

        <br><br>

        <!-- Password -->
        <label for="pswrd">Palavra-passe</label>
        <input type="password" placeholder="Digite sua Palavra-passe" name="pswrd" required>

        <!-- sub container for the checkbox and forgot password link -->
        <div class="subcontainer">
            <label>
              <input type="checkbox" checked="checked" name="remember"> Relembrar-me
            </label>
            <p class="forgotpsd"> <a href="#">Esqueceu a Palavra-passe?</a></p>
        </div>


        <!-- Submit button -->
        <button type="submit">Login</button>

        <!-- Sign up link -->
        <p class="register">Não possui uma conta?  <a href="#">Cadastrar-se Aqui!</a></p>

    </div>

</form>




@endsection
