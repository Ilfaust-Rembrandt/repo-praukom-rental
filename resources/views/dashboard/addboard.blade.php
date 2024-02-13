@extends('dashboard.layout')
@section('title', 'Admin Board')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <span class="h1">
                    Tambah data Mobil
                </span>
            </div>
            <div class="card-body">
                <form method="POST" action="simpan">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Nama Mobil</label>
                                <input type="text" class="form-control" name="nama_mobil" />
                            </div>
                            <div class="form-group">
                                <label>Merk Mobil</label>
                                <input type="text" class="form-control" name="merk_mobil" />
                            </div>
                            <div class="form-group">
                                <label>Jenis Mobil</label>
                                <input type="text" class="form-control" name="jenis_mobil" />
                            </div>
                            <div class="form-group">
                                <label>Biaya</label>
                                <input type="int" class="form-control" name="biaya" />
                            </div>
                            <div class="form-group">
                                <label>Penanggung Jawab</label>
                                <input type="text" class="form-control" name="kontak" />
                                @csrf
                            </div>
                        </div>
                        
                    </div>
                </form>
                <div class="row">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-success">SIMPAN</button>
                        </div>
                        <p>
                            <hr>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection