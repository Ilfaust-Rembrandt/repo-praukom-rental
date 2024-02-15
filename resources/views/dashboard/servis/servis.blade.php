@extends('servis.layout')
@section('title','Daftar Servis Mobil')
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
                            <button class="btn btn-success" type="button">Tambah Data Mobil</button>
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
                                        @foreach ($kondisi as $k)
                                            @if ($k->id_kondisi == $m->id_kondisi)                                                                                        
                                                <td>{{$k->jenis_kondisi}}</td>
                                            @endif
                                        @endforeach
                                        <td>{{$m->biaya}}</td>
                                        <td>
                                            <a href="dashboard/edit/{{$m->id_mobil}}">
                                                <button class="btn btn-primary">EDIT</button>
                                            </a>

                                            <button class="btn btn-danger btnHapus" idHapus="{{ $m->id_mobil }}">HAPUS</button>
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

<script type="module">
    $('.btnHapus').click(function(a){
        a.preventDefault();
        let idHapus = $(this).closest('.btnHapus').attr('idHapus');
        swal.fire({
            title: "Apakah anda yakin?",
            text: "Anda tidak dapat mengembalikkan nya lagi!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonColor: "#d33",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'DELETE',
                    url: '/dashboard/hapus',
                    data: {
                        id_mobil: idHapus,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        if (data.success) {
                            swal.fire('Berhasil di hapus!', '', 'success').then(function() {
                                location.reload();
                            });
                        }
                    }
                });
            }
        });
    })
</script>


@endsection