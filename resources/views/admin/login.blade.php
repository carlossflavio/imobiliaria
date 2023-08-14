<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('theme-assets/css/styles.css')}}">
    <link rel="apple-touch-icon" href="theme-assets/images/ico/logo.jpg">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset ('theme-assets/images/ico/logo.jpg')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CPoppins:300,400,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/css/vendors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/vendors/css/charts/chartist.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/css/app-lite.css') }}">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('theme-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/css/pages/dashboard-ecommerce.css') }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->

    <title>Login Ali-Imobiliária</title>
</head>
<body>
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
</body>
</html>
