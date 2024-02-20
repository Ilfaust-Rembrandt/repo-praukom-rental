@extends('selection.layout')
@section('content')
    <div class="card container" style="width:700px">
        <div class="card-header container">
            @foreach($mobil as $m)
            <h2>{{$m->id_mobil = $m->nama}}</h2>
            <div class="card-body">
                <img src="http://localhost:8000/img/{{$m->foto}}" 
                class="d-block mt-auto my-auto mx-auto rounded" alt="..." style="height:300px; width:600px;">
            </div>
            @endforeach
        </div>
    </div>
@endsection