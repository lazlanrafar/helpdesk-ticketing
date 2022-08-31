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
                            <form action="/laporan" method="POST" class="mb-5">
                                @csrf
                                <div class="row align-items-end justify-content-center justify-content-md-start mb-md-3">
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="form-group mb-md-0">
                                            <label for="">Dari Tanggal</label>
                                            <input type="date" class="form-control" name="from_date" required
                                                id="dari_tanggal" value="{{ $from_date }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="form-group mb-md-0">
                                            <label for="">Sampai Tanggal</label>
                                            <input type="date" class="form-control" name="end_date" required
                                                id="sampai_tanggal" value="{{ $end_date }}">
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2 col-lg-1 mb-3 mb-md-0">
                                        <button type="submit" class="btn btn-primary w-100">Filter</button>
                                    </div>
                                    <div class="col-6 col-md-2 col-lg-1 mb-3 mb-md-0">
                                        <a href="/laporan" class="btn btn-danger w-100">reset</a>
                                    </div>
                                </div>
                            </form>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="vertical-align: middle-center; text-align: center;">
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
                                            <td style="vertical-align: middle-center; text-align: center;">{{ $i }}</td>
                                            <td>{{ $item->pelapor->karyawan->nama }}</td>
                                            <td>{{ $item->subkategori->nama_kategori }}</td>
                                            <td>
                                                {{ $item->lokasi->nama_lokasi }},
                                                {{ $item->lokasi->departemen }},
                                                {{ $item->lokasi->sub_departemen }}
                                            </td>
                                            <td>{{ $item->jenis_pengaduan }}</td>
                                            <td style="vertical-align: middle-center; text-align: center;">{{ $item->tanggal_pengaduan }}</td>
                                            <td style="vertical-align: middle-center; text-align: center;">{{ $item->tanggal_proses }}</td>
                                            <td style="vertical-align: middle-center; text-align: center;">{{ $item->tanggal_selesai }}</td>
                                            <td style="vertical-align: middle-center; text-align: center;">{{ $item->status }}</td>
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
