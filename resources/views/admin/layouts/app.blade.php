<!DOCTYPE html>
<html lang="pt-pt">
<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <title>@yield('title')</title>

    @include('admin.layouts.css')
<<<<<<< HEAD
    
=======

>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
</head>

<body>
    @include('admin.layouts.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

        @include('admin.layouts.sidebar')


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

            @include('admin.layouts.footer')


        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>

    @include('admin.layouts.js')
</body>

</html>
