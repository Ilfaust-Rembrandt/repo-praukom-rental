@extends('dashboard.layout')
@section('title','Logs')
@section('content')
<div class="row">
    <div class="col-md-auto mx-auto">
        <div class="card">
            <div class="card-header">
                <span class="h1">
                   LOGS
                </span>
            </div>
            <div class="card-body">
                <div class="row">
                    <p>
                        <hr>
                        <table class="table table-hover table-bordered DataTable">
                                <tr>
                                    <th>ID LOG</th>
                                    <th>TABEL</th>
                                    <th>AKTOR</th>
                                    <th>TANGGAL</th>
                                    <th>JAM</th>
                                    <th>AKSI</th>
                                    <th>RECORD</th>
                                    <th>LOGS</th>
                                    <th>STATUS</th>
                                </tr>
                            <tbody>
                            @foreach($logs as $l)
                                    <tr>
                                        <td>{{$l->id_log}}</td>
                                        <td>{{$l->tabel}}</td>
                                        <td>{{$l->aktor}}</td>
                                        <td>{{$l->tanggal}}</td>
                                        <td>{{$l->aktor}}</td>
                                        <td>{{$l->jam}}</td>
                                        <td>{{$l->aksi}}</td>
                                        <td>{{$l->record}}</td>
                                        <td>{{$l->status}}</td>
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