</div><!-- End Property Search Section -->
<!-- ======= Header/Navbar ======= -->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false"
            aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a class="navbar-brand text-brand" href="">Ali-<span class="color-b">Imobiliária</span></a>

        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link active" href="">Página Inicial</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="">Sobre Nós</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="">Imóveis</a>
                </li>


                @guest
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('login') }}">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{route('register')}}">Cadastrar</a>
                </li>
                @endguest
            </ul>


        </div>
