<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lacko.rs - @yield('title')</title>
        <meta name="description" content="Preko 20 godina ulepšavamo vaše domove! Naša želja je da sa lepim i usklađenim bojama stvorimo udoban i moderan prostor u vašim domovima.">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/fontawesome/all.css">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/main.css">

        @yield('css')

        <script src="https://kit.fontawesome.com/84c500e8b9.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="wrapper">
            <nav class="navbar navbar-expand-lg navbar-light nav-bg">
                <div class="container">
                    <a class="navbar-brand navbar-logo pl-5" href="{{route('index')}}"><img src="/img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    @include('front.partials.navigation')
                </div>
            </nav>

            <main>
                @yield('content')
            </main>
        </div>

        <footer>
            <div class="container">
                <div class="row pt-5 px-5">
                    <div class="logo col-lg-6 col-md-6 col-sm-12">
                        <a href="{{route('index')}}"><img src="/img/logo.png" alt="Lacko.rs"></a>
                    </div>
                    <div class="social col-lg-6 col-md-6 col-sm-12">
                        <a href="https://www.facebook.com/Lacko-Colors-Molerski-radovi-1476137796048524/timeline/" target="_blank"><i class="mr-3 fab fa-facebook-square"></i></a>
                        <a href="mailto:lackonadezdajan@gmail.com"><i class="mr-3 fas fa-envelope" target="_blank"></i></a>
                    </div>
                </div>
                <div class="copyright d-flex justify-content-center mt-5">
                    Copyright © STUDIO El Shaddai 2015. All Rights Reserved
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>

        @yield('script')

    </body>
</html>
