<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&family=MuseoModerno:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-light">
    <div class="container" style="margin-top: 80px;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-3">
        <a class="navbar-brand @yield('menuHome')" href="/" id="hai1"><b>VHDrone</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link @yield('menuHome')" href="/home" id="hai">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link @yield('menuProduct')" href="/product" id="hai">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @yield('menuAbout')" href="/about" id="hai">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link @yield('menuContact')" href="/contact" id="hai">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    @yield('content')

    <footer class="bg-success py-5 text-white mt-3 text-center">
        <div class="container">
            VHDrone 2020
        </div>
    </footer>

<script src={{ asset('/js/jquery-3.5.1.min.js') }}></script>    
<script src={{ asset('/js/bootstrap.min.js') }}></script>
<script src={{ asset('/js/script.js') }}></script>
</body>
</html>