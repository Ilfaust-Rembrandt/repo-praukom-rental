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
                            <button class="btn btn-success" type="button">Tambah Data Servis</button>
                        </a>
                    </div>
                    <p>
                        <hr>
                        <table class="table table-hover table-bordered DataTable">
                                <tr>
                                    <th>TANGGAL SERVIS</th>
                                    <th>NO PARTS</th>
                                    <th>NO PARTS GANTI</th>
                                    <th>ID PARTS</th>
                                    <th>AKSI</th>
                                </tr>
                            <tbody>
                            @foreach($servis as $s)
                                    <tr>
                                        <td>{{$s->tgl_servis}}</td>
                                        <td>{{$s->no_parts}}</td>
                                        <td>{{$s->no_parts_ganti}}</td>
                                        <td>{{$s->id_parts}}</td>
                                        <td>
                                            <a href="dashboard/edit/{{$s->id_servis}}">
                                                <button class="btn btn-primary">EDIT</button>
                                            </a>

                                            <button class="btn btn-danger btnHapus" idHapus="{{ $s->id_servis }}">HAPUS</button>
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