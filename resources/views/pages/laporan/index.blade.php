@extends('layouts.app') @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Laporan</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pelapor</th>
                                        <th>Kategori</th>
                                        <th>Lokasi</th>
                                        <th>Jenis Pengaduan</th>
                                        <th>Tanggal Pengaduan</th>
                                        <th>Tanggal Proses</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $item->pelapor->karyawan->nama }}</td>
                                            <td>{{ $item->subkategori->nama_kategori }}</td>
                                            <td>
                                                {{ $item->lokasi->nama_lokasi }},
                                                {{ $item->lokasi->departemen }},
                                                {{ $item->lokasi->sub_departemen }}
                                            </td>
                                            <td>{{ $item->jenis_pengaduan }}</td>
                                            <td>{{ $item->tanggal_pengaduan }}</td>
                                            <td>{{ $item->tanggal_proses }}</td>
                                            <td>{{ $item->tanggal_selesai }}</td>
                                            <td>{{ $item->status }}</td>
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
