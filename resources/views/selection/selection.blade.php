@extends('selection.layout')
@section('title', 'Selection')
@section('content')
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-inner">
    @foreach ($mobil as $m)
    <div class="carousel-item {{ $m->id_mobil == 1 ? 'active' : '' }}">
      <a href="{{route('selection.info')}}">
      <img src="http://localhost:8000/img/{{$m->foto}}" class="d-block mt-auto my-auto mx-auto rounded" alt="..." style="height:391.5px; width:600px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{ $m->nama }}</h5>
        <p>Rp {{ $m->biaya }}</p>
      </div>
      </a>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev mt-auto my-20 mx-auto mb-auto h-10 w-10" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection