@extends('dashboard.layout')
@section('title','Daftar Mobil')
@section('content')
<div class="row">
    <div class="col-md-12 mx-auto">
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
                                    <th>BIAYA</th>
                                </tr>
                            <tbody>
                            @foreach($mobil as $m)
                                    <tr>
                                        <td>{{$m->nama_mobil}}</td>
                                        <td>{{$m->merk}}</td>
                                        <td>{{$m->jenis}}</td>
                                        <td>{{$m->biaya}}</td>
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