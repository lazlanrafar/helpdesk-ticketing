@extends('layouts.app') @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pengaduan</h1>
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
                            <ul class="nav nav-tabs mb-3">
                                <li class="nav-item">
                                    <a class="nav-link {{ $status == 'all' ? 'active font-weight-bold' : '' }}"
                                        href="/pengaduan">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ $status == 'open' ? 'active font-weight-bold' : '' }}"
                                        href="/pengaduan?status=open">Open</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ $status == 'on progress' ? 'active font-weight-bold' : '' }}"
                                        href="/pengaduan?status=on progress">On Progress</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ $status == 'close' ? 'active font-weight-bold' : '' }}"
                                        href="/pengaduan?status=close">Close</a>
                                </li>
                            </ul>
                            @if (auth()->user()->level != 'TEKNISI')
                                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#formCreate"><i
                                        class="fa fa-plus"></i> Tambah</a>
                                @include('pages.pengaduan.create')
                            @endif
                            <table id="defaultTable" class="table table-bordered table-striped">
                                <thead style="vertical-align: middle-center; text-align: center;">
                                    <tr>
                                        <th>No</th>
                                        <th>Teknisi</th>
                                        <th>Pelapor</th>
                                        <th>Kategori</th>
                                        <th>Lokasi</th>
                                        <th>Jenis Pengaduan</th>
                                        <th>Keterangan</th>
                                        <th>Tanggal Pengaduan</th>
                                        <th>Tanggal Proses</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Troubleshooting</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td style="vertical-align: middle-center; text-align: center;">
                                                {{ $i }}</td>
                                            <td>
                                                @if ($item->teknisi)
                                                    {{ $item->teknisi->karyawan->nama }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>{{ $item->pelapor->karyawan->nama }}</td>
                                            <td>{{ $item->subkategori->nama_kategori }}</td>
                                            <td>
                                                {{ $item->lokasi->nama_lokasi }},
                                                {{ $item->lokasi->departemen }},
                                                {{ $item->lokasi->sub_departemen }}
                                            </td>
                                            <td>{{ $item->jenis_pengaduan }}</td>
                                            <td>{{ $item->keterangan }}</td>
                                            <td style="vertical-align: middle-center; text-align: center;">
                                                {{ $item->tanggal_pengaduan }}</td>
                                            <td style="vertical-align: middle-center; text-align: center;">
                                                {{ $item->tanggal_proses }}</td>
                                            <td style="vertical-align: middle-center; text-align: center;">
                                                {{ $item->tanggal_selesai }}</td>
                                            <td>{{ $item->troubleshooting }}</td>
                                            <td style="vertical-align: middle-center; text-align: center;">
                                                @if ($item->status == 'open')
                                                    <span class="badge badge-warning">{{ $item->status }}</span>
                                                @elseif ($item->status == 'on progress')
                                                    <span class="badge badge-info">{{ $item->status }}</span>
                                                @elseif ($item->status == 'close')
                                                    <span class="badge badge-success">{{ $item->status }}</span>
                                                @endif
                                            </td>
                                            <td style="vertical-align: middle-center; text-align: center;">
                                                <form id="formDelete{{ $item->id }}"
                                                    action="{{ route('pengaduan.destroy', $item->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <!-- <a type="button" class="btn btn-danger"
                                                                                                                                                                                                onclick="handleDelete({{ $item->id }})">
                                                                                                                                                                                                <i class="fa fa-trash"></i>
                                                                                                                                                                                            </a> -->
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

                                                @if (auth()->user()->level == 'TEKNISI')
                                                    @if ($item->status == 'open')
                                                        <a href="/pengaduan/onprogress/{{ $item->id }}"
                                                            class="btn btn-primary" title="Proses Tiket Ini"><i
                                                                class="fa fa-check"></i></a>
                                                    @endif
                                                    @if ($item->status == 'on progress')
                                                        <a type="button" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#formConfirm{{ $item->id }}"
                                                            title="Close Tiket Ini">
                                                            <i class="fa fa-check"></i></a>
                                                        @include('pages.pengaduan.confirm')
                                                    @endif
                                                @endif
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
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
