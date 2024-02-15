@extends('dashboard.layout')
@section('title', 'Admin Board')
@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-auto">
        <div class="card">
            <div class="card-header">
                <span class="h1">
                    Tambah data Servis
                </span>
            </div>
            <div class="card-body">
            <div class="row"> 
                <form method="POST" action="save">
                    <div class="row">
                    <div class="col-md-4">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                            <p>
                            <hr>
                    </div> 
                        <div class="col-md-5">
                        <div class="form-group">
                                <label>Tanggal Servis</label>
                                <input type="text" class="form-control" name="tanggal" />
                            </div>
                            <div class="form-group">
                                <label>Nama Parts</label>
                                <input type="text" class="form-control" name="nama" />
                            </div>
                            <div class="form-group form-control">
                                <label>Kondisi</label>
                                <select name="id_kondisi" id="id_kondisi">
                                    @foreach ($kondisi as $k)
                                        <option value="{{ $k->id_kondisi }}">{{ $k->jenis_kondisi }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>No Parts Ganti</label>
                                <input type="text" class="form-control" name="ganti" />
                            </div>
                            <div class="form-group form-control">
                                <label>Id Parts</label>
                                <input type="text" class="form-control" name="parts">
                            </div>
                            
                        </div><strong>DATABASE CONNECTED: </strong>
<?php
    use Illuminate\Support\Facades\DB;
    try {
        DB::connection()->getPDO();
        echo DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        echo 'none';
    }
    ?>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection