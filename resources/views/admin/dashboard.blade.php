@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content">
        <div class="container-fluid">
            <br>
            <h2>Dashboard Admin</h2>
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $dokters }}</h3>
                            <p>Dokter</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-medkit"></i>
                        </div>
                        <a href="{{ route('dokter') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $pasiens }}</h3>
                            <p>Pasien</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-person"></i>
                        </div>
                        <a href="{{ route('pasien') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>

            <!-- Baris kedua -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $polis }}</h3>
                            <p>Poli</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-heart"></i>
                        </div>
                        <a href="{{ route('poli') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-md-6 col-12">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $obats }}</h3>
                            <p>Obat</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-nuclear"></i>
                        </div>
                        <a href="{{ route('obat') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div>
    </section>
@endsection
