<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="/css/main.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="script" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js">
  <title>Aktuelnosti</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light nav-bg">
    <div class="container">
      <a class="navbar-brand navbar-logo pl-5" href="index.html"><img src="img/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      @include('front.partials.navigation')
    </div>
  </nav>

  <main>

    <div class="container">
        @yield('content')
    </div>
        @yield('container')
  </main>

  <footer>
    <div class="container">
      <div class="row pt-5 px-5">
        <div class="logo col-lg-6 col-md-6 col-sm-12">
          <a href="index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="social col-lg-6 col-md-6 col-sm-12">
          <a href="https://www.facebook.com/Lacko-Colors-Molerski-radovi-1476137796048524/timeline/" target="_blank"><i
              class="mr-3 fab fa-facebook-square"></i></a>
          <a href="mailto:lackonadezdajan@gmail.com"><i class="mr-3 fas fa-envelope" target="_blank"></i></a>
          <a href="https://plus.google.com/112752112665938542292/posts?hl=sr" target="_blank"><i
              class="fab fa-google-plus-g"></i></a>
        </div>
      </div>
      <div class="copyright d-flex justify-content-center mt-5">
        Copyright © STUDIO El Shaddai 2015. All Rights Reserved
      </div>
    </div>
  </footer>

</body>

</html>