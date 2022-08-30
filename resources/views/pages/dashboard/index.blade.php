@extends('layouts.app') @section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
        </div>
    </div>
</div>
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

                        <p>Open</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-open"></i>
                    </div>
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
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $total_close }}</h3>

                        <p>Close</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-done"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Summary SLA</h3>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas
                                id="lineChart"
                                style="
                                    min-height: 300px;
                                    height: 300px;
                                    max-height: 300px;
                                    max-width: 100%;
                                "
                            ></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.col (RIGHT) -->
        </div>
    </div>
</section>
@endsection
