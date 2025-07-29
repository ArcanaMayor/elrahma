@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
<script>
    function updateClock() {
        const now = new Date();

        const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        const months = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];

        const dayName = days[now.getDay()];
        const day = now.getDate().toString().padStart(2, '0');
        const month = months[now.getMonth()];
        const year = now.getFullYear();

        const hour = now.getHours().toString().padStart(2, '0');
        const minute = now.getMinutes().toString().padStart(2, '0');
        const second = now.getSeconds().toString().padStart(2, '0');

        const dateFormatted = `📅 ${dayName}, ${day} ${month} ${year}`;
        const timeFormatted = `🕒 ${hour}:${minute}:${second}`;

        document.getElementById('calendar').innerText = dateFormatted;
        document.getElementById('digital-clock').innerText = timeFormatted;
    }

    setInterval(updateClock, 1000);
    updateClock(); // initial call

    const motivasiList = [
        "Setiap langkah kecil membawa kita lebih dekat ke tujuan besar.",
        "Kesuksesan adalah hasil dari persiapan, kerja keras, dan belajar dari kegagalan.",
        "Jangan pernah menyerah, karena kegagalan hanyalah kesempatan untuk memulai lagi dengan lebih baik.",
        "Percayalah pada dirimu sendiri, kamu lebih kuat dari yang kamu kira.",
        "Setiap hari adalah kesempatan baru untuk menjadi lebih baik."
    ];
    function updateMotivasi() {
        const motivasiText = document.getElementById('motivasi-text');
        const motivasiBox = document.getElementById('motivasi-box');

        // Random motivasi
        const randomMotivasi = motivasiList[Math.floor(Math.random() * motivasiList.length)];

        // Animasi fade out, lalu ubah teks dan fade in
        motivasiBox.classList.add('fade-out');
        setTimeout(() => {
            motivasiText.innerText = randomMotivasi;
            motivasiBox.classList.remove('fade-out');
        }, 500);
    }

    // Update setiap 60 detik
    setInterval(updateMotivasi, 60000);
    updateMotivasi(); // awal
</script>



<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i data-feather="home" class="me-2"></i> Dashboard Admin</h2>
    <div class="text-end">
        <div>
            <span id="calendar" class="badge mb-1">📅 Memuat tanggal...</span>
        </div>
        <div>
            <span id="digital-clock" class="badge bg-dark text-white shadow-sm">🕒 Memuat jam...</span>
        </div>
    </div>


</div>


    <div class="alert alert-info">
        Selamat datang di halaman admin! Gunakan menu di sidebar untuk mengelola sistem.
    </div>

    {{-- Statistik Pengunjung --}}
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card border-start border-4 border-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <i data-feather="users" class="text-primary" style="width: 32px; height: 32px;"></i>
                        </div>
                        <div>
                            <div class="text-xs text-muted text-uppercase mb-1">Total Pengunjung</div>
                            <div class="h5 mb-0 font-weight-bold text-dark">{{ $totalVisitors }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-start border-4 border-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <i data-feather="calendar" class="text-success" style="width: 32px; height: 32px;"></i>
                        </div>
                        <div>
                            <div class="text-xs text-muted text-uppercase mb-1">Pengunjung Hari Ini</div>
                            <div class="h5 mb-0 font-weight-bold text-dark">{{ $todayVisitors }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-start border-4 border-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <i data-feather="bar-chart-2" class="text-warning" style="width: 32px; height: 32px;"></i>
                        </div>
                        <div>
                            <div class="text-xs text-muted text-uppercase mb-1">Pengunjung Bulan Ini</div>
                            <div class="h5 mb-0 font-weight-bold text-dark">{{ $monthlyVisitors }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Daftar Pengunjung Terbaru --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center">
                    <h6 class="m-0"><i data-feather="users" class="me-2"></i>Daftar Pengunjung Terbaru</h6>
                    @isset($recentVisitors)
                        <span class="badge bg-light text-dark">{{ $recentVisitors->count() }} Pengunjung</span>
                    @endisset
                </div>
                <div class="card-body bg-white">
                    @isset($recentVisitors)
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover align-middle text-center mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width: 5%;">#</th>
                                        <th>IP Address</th>
                                        <th>Waktu Kunjungan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($recentVisitors as $index => $visitor)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td><span class="badge bg-secondary">{{ $visitor->ip }}</span></td>
                                            <td>{{ \Carbon\Carbon::parse($visitor->visited_at)->translatedFormat('d F Y, H:i') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-muted">Belum ada data pengunjung.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-secondary mb-0">Data pengunjung belum tersedia.</div>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    #calendar, #digital-clock {
        font-family: 'Courir New', monospace;
        font-size: 1.1rem;
        padding: 0.6rem 1rem;
        letter-spacing: 0.5px;
    }

    #calendar {
        background-color: #f8f9fa;
        color: #212529;
        margin-bottom: 4px;
    }

    #digital-clock {
        background-color: #313533;
        color: #fff;
    }
</style>



</style>
@endsection
