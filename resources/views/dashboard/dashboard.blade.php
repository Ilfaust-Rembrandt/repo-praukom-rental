@extends('layout.layout')
@section('title','Daftar Cabang')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <span class="h1">
                    Data Mobil
                </span>
            </div>
            <div class="cad-body">
                <div class="row">
                    <div class="col-md-4">
                        <a href="cabang/tambah">
                            <btn class="btn btn-success">Tambah Data Mobil</btn>
                        </a>

                    </div>
                    <p>
                        <hr>
                        <table class="table table-hover table-bordered DataTable">
                            <thead>
                                <tr>
                                    <th>NAMA MOBIL</th>
                                    <th>MERK MOBIL</th>
                                    <th>JENIS MOBIL</th>
                                    <th>BIAYA</th>
                                    <th>PENANGGUNG JAWAB</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mobil as $m)
                                    <tr>
                                        <td>{{$m->nama_mobil}}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>
@endsection