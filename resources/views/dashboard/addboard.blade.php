@extends('dashboard.layout')
@section('title', 'Admin Board')
@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-auto">
        <div class="card">
            <div class="card-header">
                <span class="h1">
                    Tambah data Mobil
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
                                <label>Nama Mobil</label>
                                <input type="text" class="form-control" name="nama" />
                            </div>
                            <div class="form-group">
                                <label>Merk Mobil</label>
                                <input type="text" class="form-control" name="merk" />
                            </div>
                            <div class="form-group">
                                <label>Jenis Mobil</label>
                                <input type="text" class="form-control" name="jenis" />
                            </div>
                            <div class="form-group form-control">
                                <label>Id Kondisi</label>
                                <select name="jenis_kondisi" id="jenis_kondisi">
                                    <option value="Rusak">Rusak</option>
                                    <option value="Aman">Aman</option>
                                    <option value="Bengkel">Bengkel</option>
                                </select>
                                <input type="text" class="form-control" name="jenis" />
                            </div>
                            <div class="form-group">
                                <label>Biaya</label>
                                <input type="int" class="form-control" name="biaya" />
                                @csrf
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