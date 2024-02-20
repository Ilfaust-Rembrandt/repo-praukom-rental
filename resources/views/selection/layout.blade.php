<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/js/app', 'resources/css/app.css'])
</head>
<body class="bg-dark" style="display:grid; grid-template-rows:auto 1fr auto;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <img src="{{ asset('img/Vector.png') }}" alt="logo">
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('selection.page')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    @yield('content')
    <div style="width: auto; height: 117%; position: relative" class="bg-light">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center container">
                <span style="font-size: 200%">Pesan Sekarang dengan Menghubungi kami</span>
            </div>
            <div class="col-md-4 d-flex align-items-center container" style="height: 137px">
                <img src="{{asset('img/orange2.png')}}" alt="" >
            </div>
        </footer>
    </div>
</body>
</html>