@extends('layouts.app') @section('content')
    <meta http-equiv="refresh" content="60" />
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
            </div>
        </div>
    </div>

    @if (auth()->user()->level == 'STAFF')
        <div class="col-md">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-bullhorn"></i>
                        <b>CARA MENGGUNAKAN APLIKASI HELPDESK TICKETING</b>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="callout callout-success">
                        <h5>1. Tekan menu pengaduan</h5>

                        <p><img src="{{ url('/1.png') }}" class="img-fluid"></p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="callout callout-success">
                        <h5>2. Tekan tombol tambah</h5>

                        <p><img src="{{ url('/2.png') }}" class="img-fluid" /></p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="callout callout-success">
                        <h5>3. Isi data sesuai dengan keluhan anda, jika data sudah diisi kemudian tekan tombol simpan</h5>

                        <p><img src="{{ url('/3.png') }}" class="img-fluid" /></p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="callout callout-success">
                        <h5>4. Keluhan akan di record dan dikirimkan kepada teknisi untuk di proses</h5>

                        <p><img src="{{ url('/4.png') }}" class="img-fluid" /></p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="callout callout-success">
                        <h5>5. Jika keluhan sudah selesai di proses, maka status akan berubah menjadi close</h5>

                        <p><img src="{{ url('/5.png') }}" class="img-fluid" /></p>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
    @endif

    @if (auth()->user()->level != 'STAFF')
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">@include('includes.error-card')</div>

                <!-- row 1 -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $total_open }}</h3>

                                <p>Pengaduan Open</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-android-open"></i>
                            </div>
                            <a href="/pengaduan?status=open" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $total_onprogress }}</h3>

                                <p>On Progress</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-android-time"></i>
                            </div>
                            <a href="/pengaduan?status=on progress" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $total_close }}</h3>

                                <p>Pengaduan Close</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-android-done"></i>
                            </div>
                            <a href="/pengaduan?status=close" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $total_open + $total_onprogress + $total_close }}</h3>

                                <p>Total Pengaduan</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-android-list"></i>
                            </div>
                            <a href="/pengaduan" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Summary Kinerja Tim Helpdesk</h3>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <canvas id="lineChart"
                                        style="
                                    min-height: 300px;
                                    height: 300px;
                                    max-height: 300px;
                                    max-width: 100%;
                                "></canvas>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.col (RIGHT) -->
                </div>
            </div>
        </section>
    @endif
@endsection
