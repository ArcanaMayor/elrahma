@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
    <h2 class="mb-4"><i data-feather="home" class="me-2"></i> Dashboard Admin</h2>

    <div class="alert alert-info">
        Selamat datang di halaman admin! Gunakan menu di sidebar untuk mengelola sistem.
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Statistik Pengunjung</h6>
                </div>
                <div class="card-body">
                    <p>Total Pengunjung: <strong>{{ $totalVisitors }}</strong></p>
                    <p>Pengunjung Hari Ini: <strong>{{ $todayVisitors }}</strong></p>
                    <p>Pengunjung Bulan Ini: <strong>{{ $monthlyVisitors }}</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

