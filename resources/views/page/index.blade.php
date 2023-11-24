@extends('include/dashboard')
@section('header')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img src="{{ asset('img/Vector.png') }}" alt="logo">
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@endsection
@section('konten')
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators mt-auto my-auto mx-auto mb-auto">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('img/red.png') }}" class="d-block w-50 mt-auto my-auto mx-auto rounded" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Lamborghini</h5>
        <p>$1.500.000</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/orange.png') }}" class="d-block w-50 mt-auto my-auto mx-auto rounded" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Mclaren</h5>
        <p>$1.000.000</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/green.png') }}" class="d-block w-50 mt-auto my-auto mx-auto rounded" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Ferrari</h5>
        <p>$1.700.000</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev mt-auto my-auto mx-auto mb-auto" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection
@section('footer')
<div style="width: 100%; height: 100%; position: relative">
    <div style="width: 1495px; height: 200px; left: 0px; position: fixed; background: #EEF214; top:auto; bottom:0;"></div>
    <img style="width: 342px; height: 218px; left: 868px; position: fixed; top:500px;" src="{{ asset('img/orange2.png') }}" />
    <div style="width: 488px; height: 140px; left: 270px; position: fixed; top:auto; bottom:0;color: black; font-size: 36px; font-family: Sans-serif; font-weight: 500; word-wrap: break-word">Hubungi sekarang dan pesan mobil yang ingin anda sewa</div>
</div>
@endsection