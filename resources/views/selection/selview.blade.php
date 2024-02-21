@extends('selection.layout')
@section('content')
    <div class="card container" style="width:700px">
        <div class="card-header mt-100">
            @foreach($mobil as $m)
            <h2>{{$m->id_mobil = $m->nama}}</h2>
            <div class="card-body text-center">
                <img src="http://localhost:8000/img/{{$m->foto}}" 
                class="d-block mt-auto my-auto mx-auto rounded" alt="..." style="height:400px; width:600px;">
                <tr>Merk: {{$m->merk}}</tr>
                  <br>  
                <tr>Jenis: {{$m->jenis}}</tr>
                    <br>
                <tr>Harga: Rp {{$m->biaya}}</tr>
                <div class="card-footer">
                @foreach ($kondisi as $k)
                    @if ($k->id_kondisi == $m->id_kondisi)                                                                                        
                    Kondisi: {{$k->jenis_kondisi}}
                    @endif
                @endforeach    
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection