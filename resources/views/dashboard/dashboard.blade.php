@extends('dashboard.layout')
@section('title','Daftar Mobil')
@section('content')
<div class="row">
    <div class="col-md-auto mx-auto">
        <div class="card">
            <div class="card-header">
                <span class="h1">
                    Data Mobil
                </span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-auto">
                        <a href="dashboard/addboard">
                            <br>
                            <btn class="btn btn-success">Tambah Data Mobil</btn>
                        </a>

                    </div>
                    <p>
                        <hr>
                        <table class="table table-hover table-bordered DataTable">
                                <tr>
                                    <th>NAMA MOBIL</th>
                                    <th>MERK MOBIL</th>
                                    <th>JENIS MOBIL</th>
                                    <th>KONDISI</th>
                                    <th>BIAYA</th>
                                    <th>AKSI</th>
                                </tr>
                            <tbody>
                            @foreach($mobil as $m)
                                    <tr>
                                        <td>{{$m->nama}}</td>
                                        <td>{{$m->merk}}</td>
                                        <td>{{$m->jenis}}</td>
                                        <td>{{$m->id_kondisi}}</td>
                                        <td>{{$m->biaya}}</td>
                                        <td>
                                            <a href="dashboard/edit/{{$m->id_mobil}}">
                                                <button class="btn btn-primary">EDIT</button>
                                            </a>
                                            <a href="dashboard/hapus/{{$m->id_mobil}}">
                                                <button class="btn btn-danger">HAPUS</button>
                                            </a>
                                        </td>
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