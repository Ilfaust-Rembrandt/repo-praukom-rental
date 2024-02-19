@extends('selection.layout')
@section('title', 'Selection')
@section('header')
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
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@endsection
@section('content')
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-inner">
    @foreach ($mobil as $m)
    <div class="carousel-item {{ $m->id_mobil == 1 ? 'active' : '' }}">
      <a href="#">
      <img src="http://localhost:8000/img/{{$m->foto}}" class="d-block w-50 h-50 mt-auto my-auto mx-auto rounded" alt="..." style="max-height: 20%">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{ $m->nama }}</h5>
        <p>Rp {{ $m->biaya }}</p>
      </div>
      </a>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev mt-auto my-20 mx-auto mb-auto bg-primary h-10 w-10" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next bg-primary" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection
@section('footer')
<div style="width: 150%; height: 100%; position: relative">
    <div style="width: 100%; height: 200px; left: 0px; position: fixed; background: #EEF214; top:auto; bottom:0;"></div>
    <img style="width: auto; height: auto; left: 62%; position: fixed; top:72%;" src="{{ asset('img/orange2.png') }}" />
    <div style="width: 488px; height: 18%; left: 15%; position: fixed; top:auto; bottom:0;color: black; font-size: 36px; font-family: Sans-serif; font-weight: 500; word-wrap: break-word">Hubungi sekarang dan pesan mobil yang ingin anda sewa</div>
</div>
@endsection