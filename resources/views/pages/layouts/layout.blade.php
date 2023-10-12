<!DOCTYPE html>
<html lang="pt-ao">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


   @include('pages.layouts.css')

</head>

<body>


    @include('pages.layouts.navbar')


    @yield('content')

    @include('pages.layouts.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('pages.layouts.js')

</body>

</html>
