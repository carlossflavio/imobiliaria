<!DOCTYPE html>
<html lang="pt-pt">

<head>
    @include('utilizador.layouts.css')
    
</head>

<body>
    @include('utilizador.layouts.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

        @include('utilizador.layouts.sidebar')


        <div class="main-panel">
            <div class="content-wrapper">

                <div class="page-header">
                    <h3 class="page-title"> Gestão do Sistema Imobiliário </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Painel Principal</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ali-Imobiliária</li>
                        </ol>
                    </nav>
                </div>

                @yield('content')


            </div>
            <!-- fim de conteúdo da pagina -->

            @include('utilizador.layouts.footer')


        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>

    @include('utilizador.layouts.js')
</body>

</html>
