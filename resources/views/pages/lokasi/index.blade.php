@extends('layouts.app') @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Lokasi</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @include('includes.error-card')
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#formCreate"><i
                                    class="fa fa-plus"></i> Tambah</a>
                            @include('pages.lokasi.create')
                            <table id="defaultTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="vertical-align: middle-center; text-align: center;">
                                        <th>No</th>
                                        <th>Nama Lokasi</th>
                                        <th>Departemen</th>
                                        <th>Sub Departemen</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td style="vertical-align: middle-center; text-align: center;">{{ $i }}</td>
                                            <td style="vertical-align: middle-center; text-align: center;">{{ $item->nama_lokasi }}</td>
                                            <td style="vertical-align: middle-center; text-align: center;">{{ $item->departemen }}</td>
                                            <td style="vertical-align: middle-center; text-align: center;">{{ $item->sub_departemen }}</td>
                                            <td style="vertical-align: middle-center; text-align: center;">
                                                <form id="formDelete{{ $item->id }}"
                                                    action="{{ route('lokasi.destroy', $item->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <a type="button" class="btn btn-danger"
                                                        onclick="handleDelete({{ $item->id }})">
                                                        <i class="fa fa-trash" title="Hapus Data Lokasi"></i>
                                                    </a>
                                                </form>

                                                <script>
                                                    function handleDelete(id) {
                                                        Swal.fire({
                                                            title: 'Apakah kamu yakin?',
                                                            text: "kamu akan menghapus data ini!",
                                                            icon: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: 'Ya, hapus!'
                                                        }).then((result) => {
                                                            if (result.isConfirmed) {
                                                                document.getElementById('formDelete' + id).submit();
                                                            }
                                                        })
                                                    }
                                                </script>
                                                <a type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#formUpdate{{ $item->id }}">
                                                    <i class="fa fa-edit" title="Ubah Data Lokasi"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                        @include('pages.lokasi.update')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
