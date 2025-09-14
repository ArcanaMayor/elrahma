<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Selamat datang di Website STMIK EL RAHMA YOGYAKARTA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/themes/Medicio/assets/img/doctors/logo.webp" rel="icon">
  <link href="/themes/Medicio/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


  <!-- Vendor CSS Files -->
  <link href="/themes/Medicio/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="/themes/Medicio/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/themes/Medicio/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/themes/Medicio/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/themes/Medicio/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/themes/Medicio/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/themes/Medicio/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/themes/Medicio/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/themes/Medicio/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Senin - Jum`at, 08.00 WIB - 17.00 WIB
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +62-8112929757
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo me-auto"><img src="/themes/Medicio/assets/img/doctors/logo.webp" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
        @foreach($menus->where('parent_id', null) as $menu)
            @php
                $hasChild = $menus->where('parent_id', $menu->id)->count() > 0;
            @endphp

            @if($hasChild)
                <li class="dropdown">
                    <a href="{{ $menu->url ?? '#' }}">
                        <span>{{ $menu->nama }}</span> <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        @foreach($menus->where('parent_id', $menu->id) as $submenu)
                            <li>
                                <a href="{{ $submenu->url }}">{{ $submenu->nama }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @else
                <li>
                    <a class="nav-link scrollto" href="{{ $menu->url }}">{{ $menu->nama }}</a>
                </li>
            @endif
        @endforeach
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>
<!-- .navbar -->

      <a href="{{ route('login') }}" class="appointment-btn scrollto"><span class="d-none d-md-inline">Get</span> Started</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(/themes/Medicio/assets/img/slide/slide-a.webp)">
          <div class="container">
            <h2>SERTIFIKASI INTERNASIONAL MIKROTIK STMIK EL RAHMA Yogyakarta</h2>
            <p>Alhamdulillah, STMIK EL RAHMA telah sukses menyelenggarakan Pelatihan dan Sertifikasi Mikrotik. Pelatihan dan sertifikasi ini diselenggarakan dalam dua periode.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(/themes/Medicio/assets/img/slide/slide-b.webp)">
          <div class="container">
            <h2>LULUS SARJANA TANPA SKRIPSI</h2>
            <p>Alhamdulillah, STMIK EL RAHMA Yogyakarta telah menerapkan ketentuan dalam Permendikbudristek Nomor 53 Tahun 2023 tentang Penjaminan Mutu Pendidikan Tinggi.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(/themes/Medicio/assets/img/slide/slide-c.png)">
          <div class="container">
            <h2>AUDIT MUTU INTERNAL (AMI) STMIK EL RAHMA YOGYAKARTA</h2>
            <p>Alhamdulillah, Lembaga Penjaminan Mutu STMIK EL RAHMA Yogyakarta sukses menyelenggarakan kegiatan Audit Mutu Internal (AMI) pada tanggal 20 Desember 2024</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <section id="el-rahma-news" class="news-section" style="background-color: #f8f9fa; padding: 60px 0;">
  <div class="container">
    <!-- Section Header -->
    <div class="section-header text-center" style="margin-bottom: 50px;">
      <h2 style="color: #2c3e50; font-weight: 700; position: relative; display: inline-block;">
        EL RAHMA NEWS
        <span style="display: block; width: 80px; height: 3px; background: #e74c3c; margin: 15px auto 0;"></span>
      </h2>
      <p class="section-subtitle" style="color: #7f8c8d; font-size: 18px; margin-top: 15px;">
        Berita terbaru dan kegiatan terkini dari STMIK EL RAHMA
      </p>
    </div>

    <!-- Featured News -->
    @isset($featured)
    <div class="row featured-news" style="margin-bottom: 40px;">
      <div class="col-md-12">
        <div class="featured-card" style="border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
          <div class="row no-gutters">
            <div class="col-md-6">
              <div class="featured-image" style="height: 100%; min-height: 300px; background-image: url('{{ asset('storage/'.$featured->gambar) }}'); background-size: cover; background-position: center;"></div>
            </div>
            <div class="col-md-6">
              <div class="featured-content" style="padding: 30px; background: white; height: 100%;">
                <div class="news-badge" style="background: #e74c3c; color: white; display: inline-block; padding: 5px 15px; border-radius: 20px; font-size: 12px; margin-bottom: 15px;">
                  FEATURED
                </div>
                <h3 style="color: #2c3e50; margin-top: 0; font-weight: 600;">
                  <a href="{{ route('berita.show', $featured->id) }}" style="color: inherit; text-decoration: none;">
                    {{ $featured->judul }}
                  </a>
                </h3>
                <div class="news-meta" style="color: #95a5a6; font-size: 14px; margin-bottom: 15px;">
                  <span>{{ $featured->created_at->diffForHumans() }}</span>
                </div>
                <p style="color: #34495e; line-height: 1.6;">
                  {!! Str::limit($featured->isi, 200) !!}
                </p>
                <a href="{{ route('berita.show', $featured->id) }}" class="read-more" style="color: #e74c3c; font-weight: 600; text-decoration: none; display: inline-block; margin-top: 15px;">
                  Read More <i class="fas fa-arrow-right" style="margin-left: 5px;"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endisset

    <!-- Regular News Grid -->
    <div class="row news-grid">
      @foreach($beritas as $berita)
      <div class="col-lg-4 col-md-6 news-item" style="margin-bottom: 30px;">
        <div class="news-card" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 3px 10px rgba(0,0,0,0.08); height: 100%; transition: transform 0.3s;">
          <a href="{{ route('berita.show', $berita->id) }}" style="display: block;">
            <div class="news-image" style="height: 200px; background-image: url('{{ asset('storage/'.$berita->gambar) }}'); background-size: cover; background-position: center;"></div>
          </a>
          <div class="news-content" style="padding: 20px;">
            <h4 style="color: #2c3e50; margin-top: 0; font-weight: 600; font-size: 18px;">
              <a href="{{ route('berita.show', $berita->id) }}" style="color: inherit; text-decoration: none;">
                {{ $berita->judul }}
              </a>
            </h4>
            <div class="news-meta" style="color: #95a5a6; font-size: 13px; margin-bottom: 10px;">
              <span>{{ $berita->created_at->format('d M Y') }}</span>
            </div>
            <p style="color: #7f8c8d; font-size: 14px; line-height: 1.5;">
              {{ Str::limit($berita->isi, 120) }}
            </p>
            <a href="{{ route('berita.show', $berita->id) }}" class="read-more" style="color: #e74c3c; font-size: 14px; font-weight: 600; text-decoration: none; display: inline-block; margin-top: 10px;">
              Read More <i class="fas fa-arrow-right" style="margin-left: 5px; font-size: 12px;"></i>
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <!-- See More Button -->
    <div class="row">
      <div class="col-12 text-center" style="margin-top: 30px;">
        <a href="{{ route('berita.index') }}" class="see-more-btn" style="display: inline-block; padding: 12px 30px; background: #e74c3c; color: white; text-decoration: none; border-radius: 30px; font-weight: 600; transition: all 0.3s;">
          Lihat Berita Lainnya
        </a>
      </div>
    </div>
  </div>
</section>

  <main id="main">
    <!-- ======= About Us Section ======= -->
    <br>
    <div class="section-title">
          <h2>INFO PMB</h2>
        </div>
    @php
    $about = \App\Models\About::first();
    @endphp

@if($about)
<section id="about" class="about py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text -->
            <div class="col-md-7">
                <h2 class="fw-bold mb-3">{{ $about->title }}</h2>
                <p class="text-muted" style="text-align: justify;">
                {!! $about->description !!}
                </p>

            </div>
            <!-- Image -->
            <div class="col-md-5 text-center">
                @if($about->image)
                    <img src="{{ asset('storage/' . $about->image) }}" 
                         alt="About Image" 
                         class="img-fluid rounded shadow">
                @endif
            </div>
        </div>
    </div>
</section>
@endif


<!-- End About Us Section -->

    <!-- Berita Section -->

<!-- End Berita Section -->







    <!-- ======= Counts Section ======= -->
    {{-- <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>

              <p><strong>Doctors</strong> consequuntur quae qui deca rode</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="26" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Departments</strong> adipisci atque cum quia aut numquam delectus</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Research Lab</strong> aut commodi quaerat. Aliquam ratione</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Awards</strong> rerum asperiores dolor molestiae doloribu</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section --> --}}

    <!-- ======= Features Section ======= -->
    {{-- <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-receipt"></i>
              <h4>Est labore ad</h4>
              <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-cube-alt"></i>
              <h4>Harum esse qui</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-images"></i>
              <h4>Aut occaecati</h4>
              <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-shield"></i>
              <h4>Beatae veritatis</h4>
              <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("/themes/Medicio/assets/img/features.jpg");' data-aos="zoom-in"></div>
        </div>

      </div>
    </section><!-- End Features Section --> --}}

    <!-- ======= Informatika Prodi Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>INFO DAFTAR & BIAYA STUDI</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fa-regular fa-calendar"></i></div>
            <h4 class="title"><strong><a href="">Periode & Waktu Pendaftaran</a></strong></h4>
            <p class="description"><strong> PERIODE PENDAFTARAN : </strong>
                                  <br>Periode 1 : 1 Des 2022 - 31 Mar 2024
                                  <br>Periode 2 : 1 April - 30 Juni 2024
                                  <br>Periode 3 : 1 Juli - 21 Sep 2024
                                    <br>Tiap hari kerja (Senin - Jum'at) pkl. 08.00 - 20.30 WIB.
                                    Pendaftaran langsung hari Sabtu &amp; Ahad, silahkan WA dulu ke  "0811 2929 757"</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fa-regular fa-id-card"></i></div>
            <h4 class="title"><strong><a href="">Jalur Pendaftaran</a></strong></h4>
            <p class="description"><strong>Pendaftaran Mahasiswa Baru diperuntukkan bagi lulusan SMA/SMK dan MA semua jurusan dg beberapa jalur pendaftaran :</strong> 
            <br>1. JR (Jalur Reguler)
            <br>2. JP (Jalur Prestasi) : Pendaftar yang memiliki prestasi Akademik & Non akademik, Lulusan Pesantren (Seleksi Rapor)
            <br>3. JSB (Jalur Subsidi Biaya) : Pemegang KIP/KIS/PKH/KKS/SKTM/Anak Yatim
            <br>4. JRPL (Jalur Rekognisi Pembelajaran Lampau) : Bagi yang mau transfer dari DIploma ke S1 (khusus program studi Informatika)
            <br>6. JPIN (Jalur Pindahan) : Bagi calon mahasiswa pindahan dari kampus lain
            <br>4. KIP-KUL (Jalur KIP-Kuliah) : Pemegang KIP/KIS/PKH/KKS/SKTM/Anak Yatim
            <br><br><br>
            <a href="#" class="servcies-more-link btn btn-primary s123-fast-page-load" aria-label="Info selengkpnya" data-pjax-state="">Info selengkapnya</a>
</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fa-solid fa-id-card"></i></div>
            <h4 class="title"><strong><a href="">Cara Pendaftaran</a></strong></h4>
            <p class="description"><strong>Pendaftaran Mahasiswa baru dapat dilakukan secara LANGSUNG atau ONLINE, semua TANPA TEST  MASUK, cukup dg seleksi berkas-berkas yg disampaikan langsung atau diupload ke sistem PMB. Pendaftaran online dg cara klik tombol DAFTAR di Home/dibagian bawah hal ini</strong></p>
            <br><br><br>
            <a href="#" class="servcies-more-link btn btn-primary s123-fast-page-load" aria-label="Info selengkpnya" data-pjax-state="">Info selengkapnya</a>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-money-bill-wave"></i></div>
            <h4 class="title"><strong><a href="">Biaya Pendidikan</a></strong></h4>
            <p class="description">Biaya pendidikan di STMIK EL RAHMA Yogyakarta sangat ringan dan terjangkau. Biaya pendidikan dapat berbeda jumlahnya sesuai dengan jalur dan periode penerimaan mahasiswa baru. <strong>SEMAKIN CEPAT DAFTAR, BIAYA MAKIN RINGAN.</strong></p><br><br><br>
            <a href="#" class="servcies-more-link btn btn-primary s123-fast-page-load" aria-label="Info selengkpnya" data-pjax-state="">Info selengkapnya</a>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-newspaper"></i></div>
            <h4 class="title"><a href="">Brosur Digital</a></h4>
            <p class="description"><strong>Brosur digital STMIK EL RAHMA Yogyakarta antara lain : </strong>
            <br>1. Brosur PMB STMIK EL RAHMA Yogyakarta
            <br>2. Brosur Program Kelas Malam
            <br>3. Brosur Program Studi Sistem Informasi (Konsentrasi SIMRS)
            </p>
            <br><br><br>
            <a href="#" class="servcies-more-link btn btn-primary s123-fast-page-load" aria-label="Info selengkpnya" data-pjax-state="">Info selengkapnya</a>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Informatika Section ======= -->
    <style>
.table-mk {
    border-collapse: collapse;
    width: 100%;
    max-width: 900px;
    margin: 0 auto; /* agar tabel di tengah */
    font-size: 0.95rem;
    text-align: center; /* semua teks rata tengah */
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
}

.table-mk th, 
.table-mk td {
    border: 1px solid #e9ecef;
    padding: 10px 12px;
    vertical-align: middle;
}

.table-mk th {
    background-color: #f8f9fa;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 0.85rem;
    letter-spacing: 0.5px;
}

.table-mk tbody tr:hover {
    background-color: #fdfdfd;
}

.table-mk .fw-bold {
    background: #fafafa;
    font-weight: 700;
}

/* Judul Semester */
.table-container h6 {
    text-align: center;
    margin-bottom: 1rem;
    font-size: 1rem;
    color: #2c3e50;
    font-weight: 600;
    letter-spacing: 0.5px;
}
</style>

<h2 class="mb-5 text-center fw-bold">PROGRAM STUDI</h2>

@foreach($prodis as $prodi)
    {{-- Nama Prodi --}}
    <h3 class="text-center text-uppercase mb-4">
        {{ $prodi->nama }} (Akreditasi {{ $prodi->akreditasi }})
    </h3>

    {{-- Informasi Prodi --}}
    <div class="text-center mb-5">
        @foreach($prodi->infos as $info)
            <div class="mb-4">
                <h5 class="fw-bold text-uppercase">{{ $info->judul }} :</h5>
                <p class="mb-0">{!! nl2br(e($info->deskripsi)) !!}</p>
            </div>
        @endforeach
    </div>

    {{-- Mata Kuliah --}}
    <h5 class="fw-bold mt-5 mb-3 text-center">MATA KULIAH :</h5>

    @php
        $grouped = $prodi->mataKuliahs->groupBy('semester');
    @endphp

    <div class="d-flex flex-column align-items-center">
        @forelse($grouped as $semester => $mks)
            <div class="mb-4 table-container text-center" style="width: 100%; max-width: 900px;">
                <h6 class="fw-bold text-uppercase mb-3">Semester {{ $semester }}</h6>
                <table class="table-mk mx-auto">
                    <thead>
                        <tr>
                            <th style="width: 50px">No</th>
                            <th style="width: 120px">Kode</th>
                            <th>Mata Kuliah</th>
                            <th style="width: 80px">SKS</th>
                            <th style="width: 150px">Prasyarat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total = 0; @endphp
                        @foreach($mks as $i => $mk)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $mk->kode }}</td>
                                <td>{{ $mk->nama }}</td>
                                <td>{{ $mk->sks }}</td>
                                <td>{{ $mk->prasyarat ?? '-' }}</td>
                            </tr>
                            @php $total += $mk->sks; @endphp
                        @endforeach
                        <tr class="fw-bold">
                            <td colspan="3" class="text-end">TOTAL SKS Semester {{ $semester }}</td>
                            <td>{{ $total }}</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @empty
            <p class="text-center">Belum ada data mata kuliah</p>
        @endforelse
    </div>
@endforeach




<!-- End Informatika Section -->

{{-- <!-- Sistem Informasi Section -->
<section id="prodi-informasi" class="s123-module s123-module-about layout-4 layout-4" style="background-color: #f8f9fa;" data-module-id="6401d76890839" data-module-type-num="16">
  <div data-aos="fade-up" class="container-fluid page_header_style noBackground aos-init aos-animate">
    <div class="row">
      <div class="container moduleTitleContainer">
        <div class="row modulesTitle text-center">
          <div class="col-xs-12">
            <div class="page-header-wrap">
              <h2 id="section-6401d76890839-title" class="s123-page-header">PRODI SISTEM INFORMASI (AKREDITASI BAIK SEKALI)</h2>
              <br><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container preview-highlighter aos-init aos-animate" data-aos="fade-up">
    <div class="row">
      <div class="col-xs-12">
        <div class="responsive-handler fr-view breakable">
          <!-- Images and Text Content in Two Columns -->
          <div class="row">
            <!-- Images on the Left -->
            <div class="col-md-4">
              <div class="images">
                <div class="separateImages text-center">
                  <img class="img-rounded img-responsive" src="https://images.cdn-files-a.com/uploads/3881771/400_6576d70eeef4c.png" alt="PRODI SISTEM INFORMASI (AKREDITASI BAIK SEKALI) image" style="margin-bottom: 15px;">
                  <img class="img-rounded img-responsive" src="https://images.cdn-files-a.com/uploads/3881771/400_662768b195e05.png" alt="PRODI SISTEM INFORMASI (AKREDITASI BAIK SEKALI) image">
                </div>
              </div>
            </div>
            
            <!-- Text Content on the Right -->
            <div class="col-md-8">
              <strong>VISI :</strong><br>
              <strong>Menjadi Program Studi Sistem Informasi yang Unggul di Bidang Analisis, Desain, dan Inovasi Sistem Informasi Tingkat Nasional dan Bereputasi Internasional, Memiliki Jiwa Enterpreneur dan Beretika Qurani pada Tahun 2040.</strong><br><br>
              
              <strong>MISI :</strong>
              <ul style="list-style-type: square;">
                <li>Menyelenggarakan pendidikan berkualitas untuk menghasilkan tenaga ahli yang unggul, kompeten, dan professional dalam bidang analisis, desain, dan inovasi Sistem Informasi.</li>
                <li>Mengembangkan sikap mental wirausaha dan melaksanakan etika qurani dalam kehidupan civitas akademika.</li>
              </ul>
              
              <strong>TUJUAN :</strong>
              <ul>
                <li>Menghasilkan lulusan yang kompeten sebagai analis sistem, desain, dan inovasi Sistem Informasi khususnya Sistem Informasi Manajemen Rumah Sakit (SIMRS) Khanza</li>
                <li>Menghasilkan lulusan sebagai technopreneur yang beretika qurani.</li>
              </ul>
              
              <strong>PROFIL LULUSAN :</strong>
              <ul>
                <li><strong>Database Analyst</strong> : Ahli dalam menganalisis data yang ada di perusahaan dalam rangka keberlangsungan perusahaan tersebut.</li>
                <li><strong>System Analyst</strong>: Ahli menganalisa, menyusun, dan menerapkan sistem. Mengurus aplikasi, sistem, dan penyimpanan data, serta meningkatkan kinerja sistem yang ada.</li>
                <li><strong>IT Auditor</strong> : Profesi yang tugasnya melakukan evaluasi, pengawasan dan pengendalian infrastruktur IT secara menyeluruh.</li>
                <li><strong>Digital Business Developer</strong> : Ahli dalam meningkatkan kemampuan digital organisasi dan menyelaraskan aktivitas strategis, pemasaran, dan penjualan untuk mendekati pasar dan pelanggan, serta memungkinkan pertumbuhan yang menciptakan nilai.</li>
              </ul>
            </div>
          </div>
          
          <!-- Mata Kuliah Table -->
          <strong><h5>MATA KULIAH :</h5></strong>
          <div class="s123-responsive-table">
            <table border="1" cellpadding="0" cellspacing="0" style="width: 100%;">
              <tbody>
                <tr>
                  <td valign="top">No</td>
                  <td valign="top">KODE</td>
                  <td valign="top">MATA KULIAH</td>
                  <td valign="top">SKS</td>
                  <td valign="top">PRASYARAT</td>
                </tr>
                
                <!-- Semester 1 -->
                <tr>
                  <td colspan="5" valign="top"><strong>SEMESTER 1</strong></td>
                </tr>
                <tr>
                  <td valign="top">1</td>
                  <td valign="top">SI23201</td>
                  <td valign="top">Tahsin Al Quran</td>
                  <td style="text-align: center;" valign="top">0</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">2</td>
                  <td valign="top">SI23109</td>
                  <td valign="top">Bahasa Inggris 1</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">3</td>
                  <td valign="top">SI23112</td>
                  <td valign="top">Technopreneurship 1</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">4</td>
                  <td valign="top">SI23115</td>
                  <td valign="top">Konsep sistem informasi</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">5</td>
                  <td valign="top">SI23120</td>
                  <td valign="top">Pengantar Tekn Informasi</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">6</td>
                  <td valign="top">SI23227</td>
                  <td valign="top">Algoritma Dan Pemrograman</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">7</td>
                  <td valign="top">SI23143</td>
                  <td valign="top">Logika informatika</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">8</td>
                  <td valign="top">SI23253</td>
                  <td valign="top">Web statis</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td colspan="3" style="text-align: right;" valign="top">TOTAL SKS Semester 1</td>
                  <td style="text-align: center;" valign="top">19</td>
                  <td valign="top"><br></td>
                </tr>
                
                <!-- Semester 2 -->
                <tr>
                  <td colspan="5" valign="top"><strong>SEMESTER 2</strong></td>
                </tr>
                <tr>
                  <td valign="top">1</td>
                  <td valign="top">SI23102</td>
                  <td valign="top">Agama 1</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top">SI23201</td>
                </tr>
                <tr>
                  <td valign="top">2</td>
                  <td valign="top">SI23110</td>
                  <td valign="top">Bahasa Inggris 2</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top">SI23109</td>
                </tr>
                <tr>
                  <td valign="top">3</td>
                  <td valign="top">SI23113</td>
                  <td valign="top">Technopreneurship 2</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top">SI23112</td>
                </tr>
                <tr>
                  <td valign="top">4</td>
                  <td valign="top">SI23116</td>
                  <td valign="top">Sistem Informasi manajemen</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top">SI23115</td>
                </tr>
                <tr>
                  <td valign="top">5</td>
                  <td valign="top">SI23217</td>
                  <td valign="top">Sistem Basis Data</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">6</td>
                  <td valign="top">SI23218</td>
                  <td valign="top">Sistem Operasi</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top">SI23120</td>
                </tr>
                <tr>
                  <td valign="top">7</td>
                  <td valign="top">SI23137</td>
                  <td valign="top">Business digital</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">8</td>
                  <td valign="top">SI23251</td>
                  <td valign="top">Pemrog Terstruk dan Struk Data</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top">SI23227</td>
                </tr>
                <tr>
                  <td colspan="3" style="text-align: right;" valign="top">TOTAL SKS Semester 2</td>
                  <td style="text-align: center;" valign="top">20</td>
                  <td valign="top"><br></td>
                </tr>
                
                <!-- Semester 3 -->
                <tr>
                  <td colspan="5" valign="top"><strong>SEMESTER 3</strong></td>
                </tr>
                <tr>
                  <td valign="top">1</td>
                  <td valign="top">SI23103</td>
                  <td valign="top">Agama 2</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top">SI23102</td>
                </tr>
                <tr>
                  <td valign="top">2</td>
                  <td valign="top">SI23111</td>
                  <td valign="top">Pendidikan Anti Korupsi</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">3</td>
                  <td valign="top">SI23219</td>
                  <td valign="top">Jaringan Komputer</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">4</td>
                  <td valign="top">SI23123</td>
                  <td valign="top">Analisis dan Peranc Sist inform</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">5</td>
                  <td valign="top">SI23228</td>
                  <td valign="top">Pemrog Berorientasi Objek</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top">SI23251</td>
                </tr>
                <tr>
                  <td valign="top">6</td>
                  <td valign="top">SI23132</td>
                  <td valign="top">Statistika dan Probabilitas</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">7</td>
                  <td valign="top">SI23241</td>
                  <td valign="top">UI-UX Design</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">8</td>
                  <td valign="top">SI23145</td>
                  <td valign="top">Matematika Diskret</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td colspan="3" style="text-align: right;" valign="top">TOTAL SKS Semester 3</td>
                  <td style="text-align: center;" valign="top">21</td>
                  <td valign="top"><br></td>
                </tr>
                
                <!-- Semester 4 -->
                <tr>
                  <td colspan="5" valign="top"><strong>SEMESTER 4</strong></td>
                </tr>
                <tr>
                  <td valign="top">1</td>
                  <td valign="top">SI23104</td>
                  <td valign="top">Agama 3</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top">SI23103</td>
                </tr>
                <tr>
                  <td valign="top">2</td>
                  <td valign="top">SI23108</td>
                  <td valign="top">Bahasa Indonesia</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">3</td>
                  <td valign="top">SI23224</td>
                  <td valign="top">Software Testing Quality Assurance</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">4</td>
                  <td valign="top">SI23125</td>
                  <td valign="top">Tata Kelola Teknologi Informasi</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">5</td>
                  <td valign="top">SI23229</td>
                  <td valign="top">Pemrograman Berbasis Web</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top">SI23241</td>
                </tr>
                <tr>
                  <td valign="top">6</td>
                  <td valign="top">SI23130</td>
                  <td valign="top">Keamanan Sistem Informasi</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">7</td>
                  <td valign="top">SI23136</td>
                  <td valign="top">Business Process Management</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">8</td>
                  <td valign="top">SI23248</td>
                  <td valign="top">e-Commerce</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">9</td>
                  <td valign="top">SI23152</td>
                  <td valign="top">Riset Operasi</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td colspan="3" style="text-align: right;" valign="top">TOTAL SKS Semester 4</td>
                  <td style="text-align: center;" valign="top">22</td>
                  <td valign="top"><br></td>
                </tr>
                
                <!-- Semester 5 -->
                <tr>
                  <td colspan="5" valign="top"><strong>SEMESTER 5</strong></td>
                </tr>
                <tr>
                  <td valign="top">1</td>
                  <td valign="top">SI23105</td>
                  <td valign="top">Agama 4</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top">SI23104</td>
                </tr>
                <tr>
                  <td valign="top">2</td>
                  <td valign="top">SI23106</td>
                  <td valign="top">Pancasila</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">3</td>
                  <td valign="top">SI23114</td>
                  <td valign="top">Etika Profesi</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">4</td>
                  <td valign="top">SI23121</td>
                  <td valign="top">Manaj Proyek Sistem Informasi</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">5</td>
                  <td valign="top">SI23222</td>
                  <td valign="top">Proyek Perangkat Lunak</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">6</td>
                  <td valign="top">SI23235</td>
                  <td valign="top">Visualisasi Data</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">7</td>
                  <td valign="top">SI23146</td>
                  <td valign="top">Business Analyst</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">8</td>
                  <td valign="top">SI23147</td>
                  <td valign="top">Evaluasi Sistem Informasi</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top">SI23125</td>
                </tr>
                <tr>
                  <td colspan="3" style="text-align: right;" valign="top">TOTAL SKS Semester 5</td>
                  <td style="text-align: center;" valign="top">19</td>
                  <td valign="top"><br></td>
                </tr>
                
                <!-- Semester 6 -->
                <tr>
                  <td colspan="5" valign="top"><strong>SEMESTER 6</strong></td>
                </tr>
                <tr>
                  <td valign="top">1</td>
                  <td valign="top">SI23107</td>
                  <td valign="top">Kewarganegaraan</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">2</td>
                  <td valign="top">SI23126</td>
                  <td valign="top">Audit Sistem Informasi</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">3</td>
                  <td valign="top">SI23231</td>
                  <td valign="top">Metodologi Penelitian</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">4</td>
                  <td valign="top">SI23233</td>
                  <td valign="top">Datamining</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top">SI23217</td>
                </tr>
                <tr>
                  <td valign="top">5</td>
                  <td valign="top">SI23234</td>
                  <td valign="top">Sistem Informasi Rumah Sakit</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top">SI23136</td>
                </tr>
                <tr>
                  <td valign="top">6</td>
                  <td valign="top">SI23240</td>
                  <td valign="top">Mobile Programming 1</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">7</td>
                  <td valign="top">SI23250</td>
                  <td valign="top">Web Service</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top">SI23229</td>
                </tr>
                <tr>
                  <td colspan="3" style="text-align: right;" valign="top">TOTAL SKS Semester 6</td>
                  <td style="text-align: center;" valign="top">19</td>
                  <td valign="top"><br></td>
                </tr>
                
                <!-- Semester 7 -->
                <tr>
                  <td colspan="5" valign="top"><strong>SEMESTER 7</strong></td>
                </tr>
                <tr>
                  <td valign="top">1</td>
                  <td valign="top">SI23238</td>
                  <td valign="top">Sistem Pendukung Kep</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">2</td>
                  <td valign="top">SI23239</td>
                  <td valign="top">Data Analyst</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top">SI23233</td>
                </tr>
                <tr>
                  <td valign="top">3</td>
                  <td valign="top">SI23142</td>
                  <td valign="top">Enterprise System</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">4</td>
                  <td valign="top">SI23244</td>
                  <td valign="top">Information Retrieval</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top">SI23233</td>
                </tr>
                <tr>
                  <td valign="top">5</td>
                  <td valign="top">SI23249</td>
                  <td valign="top">Mobile Programming 2</td>
                  <td style="text-align: center;" valign="top">4</td>
                  <td valign="top">SI23240</td>
                </tr>
                <tr>
                  <td valign="top">6</td>
                  <td valign="top">SI23255</td>
                  <td valign="top">Kerja Praktek</td>
                  <td style="text-align: center;" valign="top">3</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td colspan="3" style="text-align: right;" valign="top">TOTAL SKS Semester 7</td>
                  <td style="text-align: center;" valign="top">18</td>
                  <td valign="top"><br></td>
                </tr>
                
                <!-- Semester 8 -->
                <tr>
                  <td colspan="5" valign="top"><strong>SEMESTER 8</strong></td>
                </tr>
                <tr>
                  <td valign="top">1</td>
                  <td valign="top">SI23254</td>
                  <td valign="top">Kuliah Kerja Lapangan</td>
                  <td style="text-align: center;" valign="top">2</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td valign="top">2</td>
                  <td valign="top">SI23256</td>
                  <td valign="top">Tugas Akhir</td>
                  <td style="text-align: center;" valign="top">6</td>
                  <td valign="top"><br></td>
                </tr>
                <tr>
                  <td colspan="3" style="text-align: right;" valign="top">TOTAL SKS Semester 8</td>
                  <td style="text-align: center;" valign="top">8</td>
                  <td valign="top"><br></td>
                </tr>
                
                <!-- Total SKS -->
                <tr>
                  <td colspan="3" style="text-align: right;" valign="top"><strong>TOTAL SKS yang ditempuh</strong></td>
                  <td style="text-align: center;" valign="top">146</td>
                  <td valign="top"><br></td>
                </tr>
              </tbody>
            </table>
          </div>
          <br><br>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Sistem Informasi Section --> --}}



<section id="section-5f06db20ab42b" class="s123-module s123-module-services layout-1" style="padding: 40px 0;">
  <div class="container">
    <div class="row text-center">
      <div class="col-xs-12">
        <h2 class="s123-page-header" style="margin-bottom: 30px;">BEASISWA PEDULI PANDEMI</h2> <br><br>
      </div>
    </div>
    
    <div class="row" style="display: flex; flex-wrap: nowrap; justify-content: center; gap: 30px;">
      <!-- Beasiswa 1 -->
      <div class="col-md-4 col-sm-6" style="flex: 1; min-width: 300px; max-width: 400px;">
        <div class="service-item" style="height: 100%; display: flex; flex-direction: column; align-items: center;">
          <div style="width: 150px; height: 150px; border-radius: 50%; overflow: hidden; margin-bottom: 20px;">
            <img src="https://images.cdn-files-a.com/uploads/3881771/400_5f0d31d6e2cd5.jpg" 
                 alt="BEASISWA PROGRAM REGULER PEDULI PANDEMI (JR-PP)" 
                 style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <h4 style="margin-top: 0; margin-bottom: 15px;"><strong>BEASISWA PROGRAM REGULER PEDULI PANDEMI (JR-PP)</strong></h4>
          <p style="flex-grow: 1; margin-bottom: 20px;">Beasiswa bagi calon mahasiswa yang orang tua/walinya terdampak covid 19. Beasiswa program reguler peduli pandemi tersedia untuk 15 mahasiswa baru prodi INFORMATIKA dan 15 mahasiswa baru prodi SISTEM INFORMASI.</p>
          <a href="/beasiswa-peduli-pandemi/beasiswa-program-reguler-peduli-pandemi-jr-pp" 
             class="btn btn-primary" 
             style="margin-top: auto;">Info lengkap, silahkan klik..</a>
        </div>
      </div>
      
      <!-- Beasiswa 2 -->
      <div class="col-md-4 col-sm-6" style="flex: 1; min-width: 300px; max-width: 400px;">
        <div class="service-item" style="height: 100%; display: flex; flex-direction: column; align-items: center;">
          <div style="width: 150px; height: 150px; border-radius: 50%; overflow: hidden; margin-bottom: 20px;">
            <img src="https://images.cdn-files-a.com/uploads/3881771/400_5f0d321b3cbe5.png" 
                 alt="BEASISWA PROGRAM SUBSIDI BIAYA PEDULI PANDEMI (JSB-PP)" 
                 style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <h4 style="margin-top: 0; margin-bottom: 15px;"><strong>BEASISWA PROGRAM SUBSIDI BIAYA PEDULI PANDEMI (JSB-PP)</strong></h4>
          <p style="flex-grow: 1; margin-bottom: 20px;">Beasiswa Subsidi Biaya Peduli Pandemi dengan kuota 5 mahasiswa baru prodi INFORMATIKA dan 10 mahasiswa baru prodi SISTEM INFORMASI. Dipertuntukkan bagi mahasiswa yang berasal dari keluarga kurang mampu pemegang KIP/KIS/PKH/KKS/SKTM/ANAK YATIM.</p>
          <a href="/beasiswa-peduli-pandemi/beasiswa-program-subsidi-biaya-peduli-pandemi-jsb-pp" 
             class="btn btn-primary" 
             style="margin-top: auto;">Info lengkap, silahkan klik..</a>
        </div>
      </div>
    </div>
  </div>
</section>

    <section id="section-60c9fdd09d27f" class="s123-module s123-module-about layout-4 layout-5" data-module-id="60c9fdd09d27f" data-module-type-num="16" style="background-color: #f8f9fa; color: #333;">
  <div data-aos="fade-up" class="container-fluid page_header_style noBackground aos-init aos-animate">
    <div class="row">
      <div class="container moduleTitleContainer">
        <div class="row modulesTitle text-center">
          <div class="col-xs-12">
            <div class="page-header-wrap">
              <h2 id="section-60c9fdd09d27f-title" class="s123-page-header" style="color: #2c3e50;">BEASISWA KIP KULIAH 2024</h2>
              <hr class="small" style="border-color: #ddd;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container preview-highlighter aos-init aos-animate" data-aos="fade-up" style="padding: 30px 0;">
    <div class="row">
      <!-- Kolom Gambar -->
      <div class="col-md-4 col-sm-12" style="margin-bottom: 20px;">
        <div class="card" style="border: none; background: transparent;">
          <img class="img-fluid rounded" src="https://images.cdn-files-a.com/uploads/3881771/400_60cc5b990a61f.jpg" alt="BEASISWA KIP KULIAH 2024" style="width: 100%; height: auto; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
          <div class="card-body text-center" style="padding: 15px 0;">
            <h5 style="color: #2c3e50; font-weight: bold;">Beasiswa KIP-K 2024</h5>
            <p style="color: #7f8c8d;">Untuk Mahasiswa Baru STMIK EL Rahma</p>
          </div>
        </div>
      </div>
      
      <!-- Kolom Konten -->
      <div class="col-md-8 col-sm-12">
        <div class="responsive-handler fr-view breakable" style="background-color: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
          <p style="font-size: 16px; line-height: 1.6;">Beasiswa KIP-KULIAH tahun 2024 diperuntukkan untuk siswa lulusan SMU/SMK/MA tahun 2024, 2023, dan 2022.</p>
          
          <h4 style="color: #2c3e50; margin-top: 25px; border-bottom: 1px solid #eee; padding-bottom: 8px;">A. PERSYARATAN</h4>
          <ol style="padding-left: 20px;">
            <li style="margin-bottom: 10px;">Mahasiswa baru pemegang atau pemilik KIP atau mahasiswa baru dari keluarga miskin/rentan miskin sebagai berikut:
              <ul style="padding-left: 20px; list-style-type: disc;">
                <li>Mahasiswa dari keluarga peserta Program Keluarga Harapan (PKH) atau dari keluarga pemegang Kartu Keluarga Sejahtera (KKS);</li>
                <li>Mahasiswa dari keluarga yang masuk dalam desil kurang atau sama dengan kategori 4 (empat) pada Data Terpadu Kesejahteraan Sosial;</li>
                <li>Mahasiswa dari panti sosial/panti asuhan;</li>
                <li>Mahasiswa dari anggota keluarga dengan pendapatan ≤ Rp4.000.000/bulan atau ≤Rp750.000/keluarga/bulan.</li>
              </ul>
            </li>
            <li style="margin-bottom: 10px;">Mahasiswa baru yang telah mendaftar di SIM KIP Kuliah dan memenuhi syarat berdasarkan usulan Perguruan Tinggi.</li>
            <li>Data mahasiswa penerima KIP Kuliah merupakan data keluarga miskin/rentan miskin yang ditetapkan Kemensos.</li>
          </ol>

          <h4 style="color: #2c3e50; margin-top: 25px; border-bottom: 1px solid #eee; padding-bottom: 8px;">B. KOMPONEN BEASISWA</h4>
          <h5 style="color: #3498db; margin-top: 15px;">a. BANTUAN BIAYA PENDIDIKAN</h5>
          <ol style="padding-left: 20px;">
            <li>Biaya operasional pendidikan per semester sesuai ketentuan Kemendikbud</li>
            <li>Untuk program D1-D4/Sarjana</li>
            <li>Dibayarkan langsung ke rekening perguruan tinggi</li>
          </ol>
          
          <h5 style="color: #3498db; margin-top: 15px;">b. BANTUAN BIAYA HIDUP</h5>
          <ol style="padding-left: 20px;">
            <li>Diberikan per semester</li>
            <li>Besaran menunggu ketentuan kementerian</li>
            <li>Dibayarkan ke rekening mahasiswa</li>
          </ol>

          <h4 style="color: #2c3e50; margin-top: 25px; border-bottom: 1px solid #eee; padding-bottom: 8px;">C. JANGKA WAKTU</h4>
          <p>Maksimal 8 semester untuk program Sarjana/D4.</p>

          <h4 style="color: #2c3e50; margin-top: 25px; border-bottom: 1px solid #eee; padding-bottom: 8px;">D. CARA MENDAFTAR</h4>
          <ol style="padding-left: 20px;">
            <li>Daftar di <a href="https://kip-kuliah.kemdikbud.go.id" style="color: #2980b9; text-decoration: underline;">https://kip-kuliah.kemdikbud.go.id</a></li>
            <li>Daftar di STMIK EL Rahma melalui <a href="http://pmb.stmikelrahma.ac.id" style="color: #2980b9; text-decoration: underline;">pmb.stmikelrahma.ac.id</a> (pilih jalur KIP-KUL)</li>
          </ol>

          <h4 style="color: #2c3e50; margin-top: 25px; border-bottom: 1px solid #eee; padding-bottom: 8px;">E. BERKAS YANG DIBUTUHKAN</h4>
          <div style="background-color: #f8f9fa; padding: 15px; border-radius: 5px; margin-top: 15px;">
            <ul style="columns: 2; -webkit-columns: 2; -moz-columns: 2; list-style-type: none; padding-left: 0;">
              <li style="margin-bottom: 8px;"><span style="color: #e74c3c;">•</span> Kartu Peserta KIP Kuliah</li>
              <li style="margin-bottom: 8px;"><span style="color: #e74c3c;">•</span> Formulir Peserta</li>
              <li style="margin-bottom: 8px;"><span style="color: #e74c3c;">•</span> Rapor semester 1-6</li>
              <li style="margin-bottom: 8px;"><span style="color: #e74c3c;">•</span> Ijazah/SKL</li>
              <li style="margin-bottom: 8px;"><span style="color: #e74c3c;">•</span> Kartu Keluarga</li>
              <li style="margin-bottom: 8px;"><span style="color: #e74c3c;">•</span> Foto Rumah</li>
              <li style="margin-bottom: 8px;"><span style="color: #e74c3c;">•</span> Rekening Listrik</li>
              <li style="margin-bottom: 8px;"><span style="color: #e74c3c;">•</span> Tagihan PBB</li>
            </ul>
          </div>

          <div style="margin-top: 25px; padding: 15px; background-color: #fff8e1; border-left: 4px solid #ffc107; border-radius: 0 4px 4px 0;">
            <strong style="color: #e67e22;">CATATAN:</strong>
            <ul style="padding-left: 20px; margin-bottom: 0;">
              <li>Scan semua berkas dalam 1 file PDF</li>
              <li>Template surat keterangan tersedia (Hubungi 0811 2929 757)</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    {{-- <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-select">
                <option value="">Select Department</option>
                <option value="Department 1">Department 1</option>
                <option value="Department 2">Department 2</option>
                <option value="Department 3">Department 3</option>
              </select>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="doctor" id="doctor" class="form-select">
                <option value="">Select Doctor</option>
                <option value="Doctor 1">Doctor 1</option>
                <option value="Doctor 2">Doctor 2</option>
                <option value="Doctor 3">Doctor 3</option>
              </select>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Make an Appointment</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section --> --}}

    {{-- <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Departments</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                  <h4>Cardiology</h4>
                  <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                  <h4>Neurology</h4>
                  <p>Voluptas vel esse repudiandae quo excepturi.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                  <h4>Hepatology</h4>
                  <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                  <h4>Pediatrics</h4>
                  <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-8">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <h3>Cardiology</h3>
                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <img src="/themes/Medicio/assets/img/departments-1.jpg" alt="" class="img-fluid">
                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
              </div>
              <div class="tab-pane" id="tab-2">
                <h3>Neurology</h3>
                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <img src="/themes/Medicio/assets/img/departments-2.jpg" alt="" class="img-fluid">
                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
              </div>
              <div class="tab-pane" id="tab-3">
                <h3>Hepatology</h3>
                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <img src="/themes/Medicio/assets/img/departments-3.jpg" alt="" class="img-fluid">
                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
              </div>
              <div class="tab-pane" id="tab-4">
                <h3>Pediatrics</h3>
                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <img src="/themes/Medicio/assets/img/departments-4.jpg" alt="" class="img-fluid">
                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section --> --}}

    {{-- <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="/themes/Medicio/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="/themes/Medicio/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="/themes/Medicio/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="/themes/Medicio/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="/themes/Medicio/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section --> --}}

    {{-- <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Doctors</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="/themes/Medicio/assets/img/doctors/doctors-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Medical Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="/themes/Medicio/assets/img/doctors/doctors-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Anesthesiologist</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="/themes/Medicio/assets/img/doctors/doctors-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cardiology</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="/themes/Medicio/assets/img/doctors/doctors-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Neurosurgeon</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section --> --}}

    <!-- Tentang Section -->
<section id="section-5f0491fdca748" class="s123-module s123-module-blogs layout-1" data-module-id="5f0491fdca748" data-module-type-num="52" data-overlay-opacity="true">
  <div data-aos="fade-up" class="container-fluid page_header_style noBackground aos-init aos-animate">
    <div class="row">
      <div class="container moduleTitleContainer">
        <div class="row modulesTitle text-center">
          <div class="col-xs-12">
            <div class="page-header-wrap">
              <h2 id="section-5f0491fdca748-title" class="s123-page-header">TENTANG EL RAHMA</h2>
              <br><br>
            </div>
            <div class="page-slogan-wrap">
              <h4 id="section-5f0491fdca748-slogan" class="s123-page-slogan">JAGO IT - QUR'ANI - JUTAWAN</h4><br><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container aos-init aos-animate" data-aos="fade-up">
    <div class="row">
      <!-- Row 1 -->
      <div class="col-md-6 col-sm-12 mb-4">
        <div class="card h-100">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="https://images.cdn-files-a.com/uploads/3881771/400_5fe74a653e786.jpg" class="img-fluid rounded-start" alt="PROFIL STMIK EL RAHMA">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">PROFIL STMIK EL RAHMA</h5>
                <p class="card-text">STMIK El Rahma Yogyakarta adalah Perguruan Tinggi Swasta di bawah naungan Yayasan El Rahma Yogyakarta dalam pembinaan Kementerian Pendidikan dan Kebudayaan Republik Indonesia.</p>
                <a href="/tentang-el-rahma/profil-stmik-el-rahma" class="btn btn-link">Selanjutnya &raquo;</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-6 col-sm-12 mb-4">
        <div class="card h-100">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="https://images.cdn-files-a.com/uploads/3881771/400_66277e37850fe.png" class="img-fluid rounded-start" alt="PRODI & PROFIL LULUSAN">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">PRODI & PROFIL LULUSAN</h5>
                <p class="card-text">Seluruh program studi di STMIK EL RAHMA adalah program studi favorit dan memiliki prospek cerah dimasa depan.</p>
                <a href="/tentang-el-rahma/prodi-profil-lulusan" class="btn btn-link">Selanjutnya &raquo;</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Row 2 -->
      <div class="col-md-6 col-sm-12 mb-4">
        <div class="card h-100">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="https://images.cdn-files-a.com/uploads/3881771/400_5fe74a848960d.jpg" class="img-fluid rounded-start" alt="BADAN PENYELENGGARA">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">BADAN PENYELENGGARA</h5>
                <p class="card-text">STMIK EL RAHMA diselenggarakan oleh Badan Penyelenggara Yayasan El Rahma Yogyakarta di bawah pembinaan Kementerian Pendidikan dan Kebudayaan Republik Indonesia.</p>
                <a href="/tentang-el-rahma/badan-penyelenggara" class="btn btn-link">Selanjutnya &raquo;</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-6 col-sm-12 mb-4">
        <div class="card h-100">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="https://images.cdn-files-a.com/uploads/3881771/400_5fe74aa26abbe.jpg" class="img-fluid rounded-start" alt="KOMPETENSI LULUSAN & BIDANG KERJA">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">KOMPETENSI LULUSAN & BIDANG KERJA</h5>
                <p class="card-text">Lulusan STMIK El Rahma memiliki kompetensi bidang IT sesuai dengan minatnya, bermental wirausaha dan berakhlaq qur'ani.</p>
                <a href="/tentang-el-rahma/kompetensi-lulusan-bidang-kerja" class="btn btn-link">Selanjutnya &raquo;</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Row 3 -->
      <div class="col-md-6 col-sm-12 mb-4">
        <div class="card h-100">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="https://images.cdn-files-a.com/uploads/3881771/400_5fe74a93ecf4b.jpg" class="img-fluid rounded-start" alt="DOSEN MUDA PROFESIONAL">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">DOSEN MUDA PROFESIONAL</h5>
                <p class="card-text">Dosen-dosen muda yang profesional, lulusan dari berbagai perguruan tinggi ternama.</p>
                <a href="/tentang-el-rahma/dosen-dosen-muda-profesional" class="btn btn-link">Selanjutnya &raquo;</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-6 col-sm-12 mb-4">
        <div class="card h-100">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="https://images.cdn-files-a.com/uploads/3881771/400_5fe74ac1cb8b4.jpg" class="img-fluid rounded-start" alt="PRESTASI EL RAHMA">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">PRESTASI EL RAHMA</h5>
                <p class="card-text">EL Rahma berhasil memenangkan berbagai hibah dan kompetisi, baik tingkat lokal, regional maupun nasional.</p>
                <a href="/tentang-el-rahma/prestasi-el-rahma" class="btn btn-link">Selanjutnya &raquo;</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Row 4 -->
      <div class="col-md-6 col-sm-12 mb-4">
        <div class="card h-100">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="https://images.cdn-files-a.com/uploads/3881771/400_5fe74acf6a2ef.jpg" class="img-fluid rounded-start" alt="UNTUNG BESAR KULIAH">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">UNTUNG BESAR KULIAH</h5>
                <p class="card-text">Lulus cepat dan tepat waktu, Biaya paling ringan, Beasiswa ratusan juta dari Yayasan dan Pemerintah.</p>
                <a href="/tentang-el-rahma/untung-besar-kuliah-di-el-rahma" class="btn btn-link">Selanjutnya &raquo;</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-6 col-sm-12 mb-4">
        <div class="card h-100">
          <div class="row g-0">
            <div class="col-md-6">
              <img src="https://images.cdn-files-a.com/uploads/3881771/400_crop_60129bcecc600_60129bb41092a.jpg" class="img-fluid rounded-start" alt="JUTAWAN SEBELUM WISUDA">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">JUTAWAN SEBELUM WISUDA</h5>
                <p class="card-text">Lulusan cepat terserap ke pasar kerja, baik sebagai PNS maupun perusahaan swasta.</p>
                <a href="/tentang-el-rahma/jutawan-sebelum-wisuda" class="btn btn-link">Selanjutnya &raquo;</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Tentang Section -->
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Kegiatan Akademik & Pembinaan Plus</h2>
        </div>

        <div class="gallery-slider swiper">
            <div class="swiper-wrapper align-items-center">
                @foreach($galeri as $item)
                    <div class="swiper-slide gallery-item text-center">
                        <a class="gallery-lightbox d-block" href="{{ asset('storage/' . $item->gambar) }}">
                            <div class="gallery-image-wrapper">
                                <img src="{{ asset('storage/' . $item->gambar) }}" 
                                     class="gallery-image" 
                                     alt="{{ $item->judul }}">
                            </div>
                        </a>
                        <div class="gallery-caption">
                            <small>{{ $item->judul }}</small>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>
<!-- End Gallery Section -->

    {{-- <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="box" data-aos="fade-up" data-aos-delay="100">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="fade-up" data-aos-delay="200">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="300">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400">
              <span class="advanced">Advanced</span>
              <h3>Ultimate</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section --> --}}

    {{-- <!-- ======= Frequently Asked Questioins Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questioins</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questioins Section --> --}}

{{-- Header Section --}}
    <section class="page-header bg-light py-5">
        <div class="container">
            <div class="page-header-wrap text-center">
                <h2 class="fw-bold">DOWNLOAD</h2>
                <hr class="small mx-auto" style="width:100px;border:2px solid #0d6efd;">
            </div>
        </div>
    </section>

    {{-- Download Section --}}
    <section class="download-section py-5">
        <div class="container">
            <div class="row">
                @forelse($downloads as $download)
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $download->title }}</h5>
                                <p class="card-text flex-grow-1">
                                    {{ Str::limit($download->description, 100) }}
                                </p>
                                <a href="{{ asset('storage/' . $download->file) }}" 
                                   class="btn btn-primary mt-auto" 
                                   download>
                                    <i class="bi bi-download"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="text-muted">Belum ada file yang bisa diunduh.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Kontak</h2>
        </div>

      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4863.65702890828!2d110.37039767588675!3d-7.822984677697599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f131!3m3!1m2!1s0x2e7a57a69855edb3%3A0x41eb9794274b2092!2sSTMIK%20EL%20RAHMA!5e1!3m2!1sid!2sid!4v1754291119121!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Alamat Kami</h3>
                  <p>Jalan Sisingamangaraja No.76, Brontokusuman, Yogyakarta City, Special Region of Yogyakarta, Indonesia Kodepos 55153</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>pmb@stmikelrahma.ac.ch</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+62-8112929757</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="{{ route('kontak.kirim') }}" method="post" role="form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
              </div>
              <br>
              <div class="text-center"><button type="submit" class="btn btn-primary">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>ELRAHMA</span></strong>. All Rights Reserved
      </div> 
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">Admin#123</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/themes/Medicio/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/themes/Medicio/assets/vendor/aos/aos.js"></script>
  <script src="/themes/Medicio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/themes/Medicio/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/themes/Medicio/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/themes/Medicio/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/themes/Medicio/assets/js/main.js"></script>

</body>

<style>
.card {
  border: none;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
  border-radius: 10px;
  overflow: hidden;
}

.card:hover {
  transform: translateY(-5px);
}

.card-title {
  color: #2c3e50;
  font-weight: 600;
  margin-bottom: 15px;
}

.card-text {
  color: #555;
  font-size: 0.95rem;
  margin-bottom: 20px;
}

.btn-link {
  color: #3498db;
  text-decoration: none;
  padding: 0;
  font-weight: 500;
}

.btn-link:hover {
  color: #2980b9;
  text-decoration: underline;
}

.img-fluid {
  height: 100%;
  object-fit: cover;
}

.mb-4 {
  margin-bottom: 1.5rem !important;
}
.highlight-box {
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  }
  .btn-primary:hover {
    transform: translateY(-2px);
  }
  .btn-secondary:hover {
    background-color: #e67e22 !important;
    transform: translateY(-2px);
  }
  ul {
    list-style-type: disc;
    padding-left: 20px;
  }
  li {
    margin-bottom: 8px;
    line-height: 1.5;
  }
    .news-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
  }
  
  .read-more:hover {
    color: #c0392b !important;
  }
  
  .see-more-btn:hover {
    background: #c0392b;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(231, 76, 60, 0.3);
  }
  
  .news-image {
    transition: transform 0.3s;
  }
  
  .news-card:hover .news-image {
    transform: scale(1.03);
  }
  .gallery-item {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.gallery-image-wrapper {
    width: 100%;
    height: 200px; 
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    margin-bottom: 8px;
}

.gallery-image {
    width: 100%;
    height: 100%;
    object-fit: cover; 
    transition: transform 0.3s ease;
}

.gallery-image:hover {
    transform: scale(1.05); 
}

.gallery-caption {
    font-size: 14px;
    color: #444;
    font-weight: 500;
}

* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .text-center {
            text-align: center;
        }
        
        .page-header-wrap {
            margin: 40px 0;
        }
        
        .page-header-wrap h2 {
            font-size: 1.9rem;
            color: #2c3e50;
            margin-bottom: 15px;
            font-weight: 700;
            text-align: center;
        }
        
        .page-header-wrap hr.small {
            width: 80px;
            height: 3px;
            background-color: #3498db;
            margin: 0 auto;
            border: none;
        }
        
        .download-section {
            padding: 40px 0;
        }
        
        .download-items {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }
        
        .download-item {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            max-width: 540px;
            display: flex;
            flex-direction: column;
        }
        
        .download-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .item-image {
            width: 100%;
            height: 250px;
            overflow: hidden;
        }
        
        .item-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .download-item:hover .item-image img {
            transform: scale(1.05);
        }
        
        .item-details {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .item-title h3 {
            font-size: 1.5rem;
            color: #2c3e50;
            margin-bottom: 15px;
        }
        
        .item-title a {
            color: inherit;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .item-title a:hover {
            color: #3498db;
        }
        
        .item-content {
            margin-bottom: 20px;
            flex-grow: 1;
        }
        
        .item-content p {
            margin-bottom: 15px;
            color: #555;
        }
        
        .btn-primary {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s ease;
            border: none;
            cursor: pointer;
            margin-bottom: 10px;
        }
        
        .btn-primary:hover {
            background-color: #2980b9;
        }
        
        .reading-time {
            font-size: 0.85rem;
            color: #777;
        }
        
        /* Responsiveness */
        @media (max-width: 768px) {
            .download-item {
                flex-direction: column;
            }
            
            .item-image {
                height: 200px;
            }
            
            .page-header-wrap h2 {
                font-size: 2rem;
            }
        }
</style>
</html>