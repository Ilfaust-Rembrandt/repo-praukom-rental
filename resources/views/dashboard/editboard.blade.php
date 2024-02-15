@extends('dashboard.layout')
@section('title', 'Admin Board')
@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-auto">
        <div class="card">
            <div class="card-header">
                <span class="h1">
                    Edit data Mobil
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
                                <input type="text" class="form-control" name="nama" value="{{ $mobil->nama }}" />
                            </div>
                            <div class="form-group">
                                <label>Foto Mobil</label>
                                <input type="file" class="form-control" name="foto" value="{{$mobil->foto}}" />
                            </div>
                            <div class="form-group">
                                <label>Merk Mobil</label>
                                <input type="text" class="form-control" name="merk"  value="{{ $mobil->merk }}" />
                            </div>
                            <div class="form-group">
                                <label>Jenis Mobil</label>
                                <input type="text" class="form-control" name="jenis"  value="{{ $mobil->jenis }}" />
                            </div>
                            <div class="form-group form-control">
                                <label>Kondisi</label>
                                <select name="id_kondisi" id="id_kondisi">
                                    @foreach ($kondisi as $k)
                                        <option value="{{ $k->id_kondisi }}" {{ $k->id_kondisi==$mobil->id_kondisi ? 'selected' : '' }}>{{ $k->jenis_kondisi }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Biaya</label>
                                <input type="number" class="form-control" name="biaya"  value="{{ $mobil->biaya }}" />
                                <input type="hidden" class="form-control" name="id_mobil"  value="{{ $mobil->id_mobil }}" />
                                @csrf
                            </div>                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection