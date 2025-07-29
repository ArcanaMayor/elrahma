<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    /**
* Template Name: Medicio
* Updated: Mar 10 2023 with Bootstrap v5.2.3
* Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  font-family: "Open Sans", sans-serif;
  color: #444444;
}

a {
  color: #3fbbc0;
  text-decoration: none;
}

a:hover {
  color: #65c9cd;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Roboto", sans-serif;
}

/*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/
#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  overflow: hidden;
  background: #fff;
}

#preloader:before {
  content: "";
  position: fixed;
  top: calc(50% - 30px);
  left: calc(50% - 30px);
  border: 6px solid #3fbbc0;
  border-top-color: #ecf8f9;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  animation: animate-preloader 1s linear infinite;
}

@keyframes animate-preloader {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/
@media screen and (max-width: 768px) {
  [data-aos-delay] {
    transition-delay: 0 !important;
  }
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  background: #fff;
  transition: all 0.5s;
  z-index: 997;
  padding: 20px 0;
  top: 20px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

@media (max-width: 992px) {
  #header {
    padding: 15px 0;
  }
}

#header .logo {
  font-size: 30px;
  line-height: 1;
  font-weight: 800;
  text-transform: uppercase;
  margin: 0;
  padding: 0;
}

#header .logo a {
  color: #555555;
}

#header .logo img {
  max-height: 40px;
  margin-right: 25px;
}

/**
* Appointment Button
*/
.appointment-btn {
  margin-left: 25px;
  background: #3fbbc0;
  color: #fff;
  border-radius: 4px;
  padding: 8px 25px;
  white-space: nowrap;
  transition: 0.3s;
  font-size: 14px;
  display: inline-block;
}

.appointment-btn:hover {
  background: #65c9cd;
  color: #fff;
}

@media (max-width: 768px) {
  .appointment-btn {
    margin: 0 15px 0 0;
    padding: 6px 15px;
  }
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}

.navbar li {
  position: relative;
}

.navbar a,
.navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 0 10px 30px;
  font-family: "Roboto", sans-serif;
  font-size: 13px;
  color: #626262;
  white-space: nowrap;
  transition: 0.3s;
  text-transform: uppercase;
  font-weight: 500;
}

.navbar a i,
.navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}

.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover>a {
  color: #3fbbc0;
}

.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 14px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
  border-radius: 4px;
}

.navbar .dropdown ul li {
  min-width: 200px;
}

.navbar .dropdown ul a {
  padding: 10px 20px;
  text-transform: none;
}

.navbar .dropdown ul a i {
  font-size: 12px;
}

.navbar .dropdown ul a:hover,
.navbar .dropdown ul .active:hover,
.navbar .dropdown ul li:hover>a {
  color: #3fbbc0;
}

.navbar .dropdown:hover>ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}

.navbar .dropdown .dropdown:hover>ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}

@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }

  .navbar .dropdown .dropdown:hover>ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #555555;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

.mobile-nav-toggle.bi-x {
  color: #fff;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}

.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(60, 60, 60, 0.9);
  transition: 0.3s;
  z-index: 999;
}

.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}

.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  border-radius: 8px;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}

.navbar-mobile a,
.navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 15px;
  color: #555555;
}

.navbar-mobile a:hover,
.navbar-mobile .active,
.navbar-mobile li:hover>a {
  color: #3fbbc0;
}

.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}

.navbar-mobile .dropdown ul li {
  min-width: 200px;
}

.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}

.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover,
.navbar-mobile .dropdown ul .active:hover,
.navbar-mobile .dropdown ul li:hover>a {
  color: #3fbbc0;
}

.navbar-mobile .dropdown>.dropdown-active {
  display: block;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 100vh;
  background-color: rgba(60, 60, 60, 0.8);
  overflow: hidden;
  position: relative;
}

#hero .carousel,
#hero .carousel-inner,
#hero .carousel-item,
#hero .carousel-item::before {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
}

#hero .carousel-item {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  display: flex;
  justify-content: center;
  align-items: flex-end;
}

#hero .container {
  text-align: center;
  background: rgba(255, 255, 255, 0.9);
  padding-top: 30px;
  padding-bottom: 30px;
  margin-bottom: 50px;
  border-top: 4px solid #3fbbc0;
}

@media (max-width: 1200px) {
  #hero .container {
    margin-left: 50px;
    margin-right: 50px;
  }
}

#hero h2 {
  color: #2f2f2f;
  margin-bottom: 20px;
  font-size: 36px;
  font-weight: 700;
}

#hero p {
  margin: 0 auto 30px auto;
  color: #555555;
}

#hero .carousel-inner .carousel-item {
  transition-property: opacity;
  background-position: center top;
}

#hero .carousel-inner .carousel-item,
#hero .carousel-inner .active.carousel-item-start,
#hero .carousel-inner .active.carousel-item-end {
  opacity: 0;
}

#hero .carousel-inner .active,
#hero .carousel-inner .carousel-item-next.carousel-item-start,
#hero .carousel-inner .carousel-item-prev.carousel-item-end {
  opacity: 1;
  transition: 0.5s;
}

#hero .carousel-inner .carousel-item-next,
#hero .carousel-inner .carousel-item-prev,
#hero .carousel-inner .active.carousel-item-start,
#hero .carousel-inner .active.carousel-item-end {
  left: 0;
  transform: translate3d(0, 0, 0);
}

#hero .carousel-control-next-icon,
#hero .carousel-control-prev-icon {
  background: none;
  font-size: 30px;
  line-height: 0;
  width: auto;
  height: auto;
  background: rgba(63, 187, 192, 0.8);
  border-radius: 50px;
  transition: 0.3s;
  color: rgba(255, 255, 255, 0.5);
  width: 54px;
  height: 54px;
  display: flex;
  align-items: center;
  justify-content: center;
}

#hero .carousel-control-next-icon:hover,
#hero .carousel-control-prev-icon:hover {
  background: #3fbbc0;
  color: rgba(255, 255, 255, 0.8);
}

#hero .carousel-indicators li {
  cursor: pointer;
  background: #fff;
  overflow: hidden;
  border: 0;
  width: 12px;
  height: 12px;
  border-radius: 50px;
  opacity: 0.6;
  transition: 0.3s;
}

#hero .carousel-indicators li.active {
  opacity: 1;
  background: #3fbbc0;
}

#hero .btn-get-started {
  font-family: "Roboto", sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 14px 32px;
  border-radius: 4px;
  transition: 0.5s;
  line-height: 1;
  color: #fff;
  background: #3fbbc0;
}

#hero .btn-get-started:hover {
  background: #65c9cd;
}

@media (max-width: 992px) {
  #hero {
    height: 100vh;
  }

  #hero .container {
    margin-top: 100px;
  }
}

@media (max-width: 768px) {
  #hero h2 {
    font-size: 28px;
  }
}

@media (min-width: 1024px) {

  #hero .carousel-control-prev,
  #hero .carousel-control-next {
    width: 5%;
  }
}

@media (max-height: 500px) {
  #hero {
    height: 160vh;
  }
}

    /* Scrollbar for news content */
    .scrollbar-thin::-webkit-scrollbar {
      width: 5px;
      height: 5px;
    }
    .scrollbar-thin::-webkit-scrollbar-track {
      background: #f1f1f1;
    }
    .scrollbar-thin::-webkit-scrollbar-thumb {
      background: #888;
      border-radius: 10px;
    }
    .scrollbar-thin::-webkit-scrollbar-thumb:hover {
      background: #555;
    }

    /* Responsive banner text overlay */
    .banner-text {
      text-shadow: 0 2px 5px rgba(0,0,0,0.7);
    }
    /* Underline on the heading INFO PMB 2025 where PMB is red underlined */
    .highlight-red-underline {
      color: #111;
      font-weight: 700;
      position: relative;
      display: inline-block;
    }
    .highlight-red-underline::after {
      content: "";
      position: absolute;
      width: 100%;
      height: 4px;
      bottom: 2px;
      left: 0;
      background: #dc2626; /* Tailwind red-600 */
      border-radius: 2px;
      z-index: -1;
      opacity: 0.5;
    }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>STMIK EL RAHMA</title>
<!-- Favicons -->
  <link href="/themes/medicio/assets/img/favicon.png" rel="icon">
  <link href="/themes/medicio/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/themes/medicio/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="/themes/medicio/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/themes/medicio/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/themes/medicio/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/themes/medicio/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/themes/medicio/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/themes/medicio/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/themes/medicio/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
   <script src="https://cdn.tailwindcss.com"></script>
  <link href="/themes/medicio/assets/css/style.css" rel="stylesheet">
</head>
<body>
    <header id="header" class=>
    <div class="container d-flex align-items-center">
      <a href="index.html" class="logo me-auto"><img src="/themes/medicio/assets/img/logo.png" alt=""></a>
      <h3 class="logo">STMIK EL RAHMA YOGYAKARTA</h3>

      {{-- <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="#">BERANDA</a></li>
          <li><a class="nav-link scrollto" href="#">INFO PMB 2025</a></li>
          <li><a class="nav-link scrollto" href="#">EL RAHMA NEWS</a></li>
          <li><a class="nav-link scrollto" href="#">PRODI INFORMATIKA</a></li>
          <li><a class="nav-link scrollto" href="#">PRODI SISTEM INFORMASI</a></li>
          <li class="dropdown"><a href="#"><span>MORE</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">TENTANG EL RAHMA</a></li>
              <li><a href="#">INFO AKADEMIK</a></li>
              <li><a href="#">JUTAWAN SEBELUM WISUDA</a></li>
              <li><a href="#">VIDEO PMB</a></li>
              <li><a href="#">BEASISWA PEDULI PANDEMI</a></li>
              <li><a href="#">BEASISWA KIP KULIAH 2024</a></li>
              <li><a href="#">SURVEI KEPUASAN STAKEHOLDERS</a></li>
              <li><a href="#">SEBAGIAN ALUMNI</a></li>
              <li><a href="#">KEGIATAN AKADEMIK DAN PEMBINAAN PLUS</a></li>
              <li><a href="#">DOWNLOAD</a></li>
              <li><a href="#">IKLAN PMR 2024</a></li>
              <li><a href="#">CONTACT</a></li>
              <li><a href="#">NUMBER ENCOUNTER</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav> --}}
      <!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(https://images.cdn-files-a.com/uploads/3881771/2000_637215ea0664f.jpg)">
          <div class="container">
            <h2>Selamat Datang Di <span>El Rahma Yogyakarta</span></h2>
            <p>Info Seputar STMIK EL RAHMA YOGYAKARTA</p>
            <a href="{{ route('login') }}" class="btn-get-started scrollto">LOGIN</a>
          </div>
        </div>
  </section><!-- End Hero -->
  <!-- INFO PMB 2025 -->
    <section id="info-pmb" class="mb-16">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-center text-3xl font-bold text-gray-900 mb-8">
      INFO <span class="highlight-red-underline">PMB</span> 2025
    </h2>

    <div class="md:flex md:items-start md:gap-10">
      <div class="flex-shrink-0 w-80 mx-auto md:mx-0 mb-6 md:mb-0">
        <img 
          src="https://files.cdn-files-a.com/uploads/3881771/400_67412156d0412_filter_6741220f88372.png" 
          alt="Mba mas baju ijo" 
          class="rounded-lg shadow-lg object-cover w-full h-full" 
        />
      </div>

      <article class="prose prose-indigo max-w-full md:max-w-3xl text-justify">
        <p class="font-semibold">KEMANA SETELAH LULUS SMA/SMK/MA ?, KULIAH APA LERJA?</p>
        <p><em>“Mau kuliah sih, tapi takutnya habis lulus nganggur.<br />
          Buktinya banyak sarjana yang nganggur.”</em></p>
        <p><em>“Mau kuliah tapi yang bisa sambil kerja.”</em></p>
        <p><em>“Mau kuliah... tapi apa ada kuliah yang biayanya ringan/terjangkau?, lagian bingung juga mau jurusan apa ?”.</em></p>
        <p class="font-semibold">SEGERA AMBIL KEPUTUSAN</p>
        <p>......</p>
        <p><strong>“KULIAH pada program studi yang memiliki prospek cerah, luas bidang pekerjaan setelah lulus, biaya terjangkau dan cocok dengan minatmu.”</strong></p>
        <p>
          DAFTAR SEKARANG….. KLIK 
          <a href="#daftar" class="text-red-600 font-semibold hover:text-red-800">DAFTAR ONLINE</a> 
          <br />
          BROSUR DIGITAL, JALUR PENDAFTARAN, RINCIAN BIAYA KLIK 
          <a href="https://stmikelrahma.ac.id/info-daftar-biaya-studi/biaya-pendidikan" target="_blank" rel="noopener" class="text-red-600 font-semibold hover:text-red-800">PMB EL RAHMA</a>
        </p>
      </article>
    </div>

    <article class="prose max-w-full md:max-w-5xl mx-auto prose-lg text-justify mt-10">
    </article>
  </div>
  <article class="prose max-w-full md:max-w-5xl mx-auto prose-lg text-justify">
        <p><strong>PRODI APA YANG PUNYA PROSPEK CERAH SAAT INI ??</strong></p>
        <ul>
          <li>
            Menurut <a href="https://www.halomoney.co.id" target="_blank" rel="noopener" class="text-blue-600 underline">www.halomoney.co.id</a>, ada 7 jurusan kuliah yang menjanjikan masa depan cerah yaitu INFORMATIKA diskomvis, desain produk, desain mode, BISNIS DIGITAL, tata boga dan kewirausahaan.
          </li>
          <li>
            Menurut <a href="https://www.indiatimes.com" target="_blank" rel="noopener" class="text-blue-600 underline">www.indiatimes.com</a>, ada 10 pekerjaan dengan gaji paling tinggi di INDONESIA, yaitu : ahli teknik perminyakan, dokter spesialis, ahli konstruksi, AHLI TEKNIK INFORMATIKA dan SISTEM (INFORMASI), pengacara, pilot, marketing, ahli fisika, apoteker dan anggota DPR.
          </li>
          <li>
            Berdasarkan survei pekerjaan masa depan yang dilakukan oleh World Economic Forum, beberapa pekerjaan diproyeksikan tumbuh hingga 33% pada tahun 2022. Pekerjaan tersebut antara lain: Saintis dan Analis Data (Data Analyst and Scientist), Spesialis Kecerdasan Buatan (AI and Machine Learning Specialist), Spesialis Big Data (Big Data Specialist), Pengembang dan Analis Perangkat Lunak dan Aplikasi (Software and Application Developers and Analyst), Analis Informasi Keamanan (Information Security Analyst), Spesialis Teknologi Baru (New Technology Specialist), Spesialis Blockchain (Blockchain Specialist), Perancang Interaksi Mesin-Manusia dan Pengalaman Pengguna (User Experience and Human-Machine Interaction Designers), Profesional Penjual dan Pemasaran (Sales and Marketing Professionals).
          </li>
        </ul>

        <p><strong>TRUS PILIH PRODI APA DONG?</strong></p>
        <blockquote>
          <em>“Pilih aja prodi yang menghasilkan lulusan dengan kemampuan akademik sekaligus keterampilan/skill yang dapat cepat merebut peluang kerja, bisa berwirausaha sekaligus studi lanjut.”</em>        
        </blockquote>

        <p>
          Pertimbangan lainnya adalah aspek legalitas institusi dan prodi, akreditasinya, kurikulumnya, masa studinya, fasilitasnya, dosennya, pembinaan tambahannya, kegiatan kemahasiswaannya dan bagaimana keterserapan lulusannya.
        </p>
        
        <p><strong>MENGAPA KULIAH DI STMIK EL RAHMA?</strong></p>
        <p>
          Revolusi industri 4.0 akan melahirkan perubahan baru yang sangat cepat di bidang teknologi. Beberapa hal yang secara bertahap terjadi adalah berkembangnya kecerdasan buatan (artificial intellegent), internet berkecepatan tinggi, teknologi cloud, Internet of thing dan big data. <strong>Prodi INFORMATIKA dan SISTEM INFORMASI STMIK El Rahma</strong> adalah pilihan yang tepat sebagai tempat kuliah, karena kurikulum dan matakuliah telah disesuaikan dengan kebutuhan lapangan kerja era revolusi industri 4.0.
        </p>

        <p><strong>PROGRAM STUDI DAN PROFIL LULUSAN STMIK EL RAHMA</strong></p>
        <p>
          STMIK EL RAHMA menyelenggarakan program studi favorit dan memiliki prospek yang sangat cerah dimasa depan. Program studi yang diselenggarakan antara lain :
        </p>

        <ol class="list-decimal ml-6 space-y-3">
          <li id="prodi-informatika">
            <strong>INFORMATIKA (Terakreditasi BAIK SEKALI-LAMINFOKOM)</strong>, Program Sarjana, gelar lulusan S.Kom, kelas Reguler Siang dan Kelas Reguler Malam. Kompetensi/Profil Lulusan INFORMATIKA :
            <ul class="list-disc ml-6 space-y-1 mt-2">
              <li><strong>Software Engineer</strong> : Ahli menganalisa, merekayasa, menyusun spesifikasi, mengimplementasikan dan memvalidasi suatu rancangan sistem perangkat lunak untuk menjawab permasalahan</li>
              <li><strong>Web Developer</strong> : Ahli merancang website, melakukan coding dan mengembangkan website yang sudah ada.</li>
              <li><strong>Cloud Computing Developer</strong> : Ahli bidang komputasi awan, merancang infrastruktur cloud dari suatu perusahaan, menjaga keamanan penyimpanan cloud.</li>
              <li><strong>Advance Mobile Computing</strong> : Ahli membangun aplikasi berbasis mobile.</li>
              <li><strong>AI Engineer</strong> : Ahli melakukan pengembangan, pengujian dan penerapan terhadap model AI yang diterapkan. Ahli melakukan analisis statistik untuk pengembangan bisnis perusahaan.</li>
              <li><strong>Helpdesk Analyst</strong> : Ahli perancangan, pembuatan, dukungan dan pengelolaan siklus hidup layanan IT, menjawab berbagai pertanyaan dari pengguna terkait hal teknis.</li>
            </ul>
            <p><strong>Peluang/Lapangan Kerja Prodi Informatika STMIK El Rahma Yogyakarta</strong></p>
            <p>
              Berdasarkan survei pekerjaan masa depan yang dilakukan oleh World Economic Forum, beberapa pekerjaan diproyeksikan tumbuh hingga 33% pada tahun 2022 dan seterusnya, dan pekerjaan ini memerukan peluang besar lulusan INFORMATIKA. Pekerjaan tersebut antara lain:
            </p>
            <ul class="list-disc ml-6 space-y-1">
              <li>Saintis dan Analis Data (Data Analyst and Scientist)</li>
              <li>Spesialis Kecerdasan Buatan (AI and Machine Learning Specialist)</li>
              <li>Spesialis Big Data (Big Data Specialist)</li>
              <li>Pengembang dan Analis Perangkat Lunak dan Aplikasi (Software and Application Developers and Analyst)</li>
              <li>Analis Informasi Keamanan (Information Security Analyst)</li>
              <li>Spesialis Teknologi Baru (New Technology Specialist)</li>
              <li>Spesialis Blockchain (Blockchain Specialist)</li>
              <li>Perancang Interaksi Mesin-Manusia dan Pengalaman Pengguna (User Experience and Human-Machine Interaction Designers)</li>
              <li>Profesional Penjual dan Pemasaran (Sales and Marketing Professionals)</li>
            </ul>
          </li>

          <li id="prodi-sistem-informasi" class="mt-8">
            <strong>SISTEM INFORMASI (Terakreditasi BAIK SEKALI-LAMINFOKOM)</strong>, Program Sarjana, gelar lulusan S.Kom, kelas Reguler Siang. Kompetensi/Profil lulusan SISTEM INFORMASI :
            <ul class="list-disc ml-6 space-y-1 mt-2">
              <li><strong>Database Analyst</strong> : Ahli dalam menganalisis data yang ada di perusahaan dalam rangka keberlangsungan perusahaan tersebut.</li>
              <li><strong>System Analyst</strong> : Ahli menganalisa, menyusun, dan menerapkan sistem. Mengurus aplikasi, sistem, dan penyimpanan data, serta meningkatkan kinerja sistem yang ada.</li>
              <li><strong>IT Auditor</strong> : Profesi yang tugasnya melakukan evaluasi, pengawasan dan pengendalian infrastruktur IT secara menyeluruh.</li>
              <li><strong>Digital Business Developer</strong> : Ahli dalam meningkatkan kemampuan digital organisasi dan menyelaraskan aktivitas strategis, pemasaran, dan penjualan untuk mendekati pasar dan pelanggan, serta memungkinkan pertumbuhan yang menciptakan nilai.</li>
            </ul>
            <p><strong>Peluang/Lapangan Kerja Prodi Sistem Informasi STMIK El Rahma Yogyakarta</strong></p>
            <p>
              1. Business Analyst adalah seseorang yang merupakan bagian dari operasi bisnis dan bekerja dalam bidang yang berkaitan dengan Teknologi Informasi untuk meningkatkan kualitas layanan. Membantu dalam Integrasi dan pengujian solusi baru di perusahaan, instansi maupun organisasi. Bisnis analis tidak harus selalu bekerja dalam proyek-proyek yang berkaitan dengan IT, keahliannya juga sering diperlukan dalam bidang pemasaran dan keuangan juga. Perusahaan atau industri yang membutuhkan jasa dari bisnis analis biasanya yang bergerak di bidang keuangan, perbankan, asuransi, telekomunikasi, utilitas, layanan perangkat lunak dan sebagainya.
            </p>
            <p>
              2. Data Analyst adalah profesi yang tugasnya menganalisis data serta mendapatkan pengetahuan baru melalui data tersebut. Tingginya kebutuhan praktis data di perusahaan membuat profesi Data Analyst kian hari kian diminati. Berdasarkan survei pekerjaan masa depan yang dilakukan oleh World Economic Forum, profesi Data Analyst menempati urutan pertama sebagai pekerjaan yang diproyeksikan tumbuh hingga 33% pada tahun 2022. Mengutip di situs <a href="https://id.indeed.com/" target="_blank" rel="noopener" class="text-blue-600 underline">https://id.indeed.com/</a>, gaji Data Analyst Rata-Rata di Indonesiapan tidak main-main, yaitu Rp.5 Jutaan perbulan untuk Data Analis Junior.
            </p>
            <p>
              3. E-Business Analyst adalah Orang yang mempunyai kemampuan dalam bidang arsitektur enterprise, strategi manajemen dan rekayasa sistem informasi dengan memanfaatkan teknologi informasi terkini. Peluang kerjanya di perusahaan yang membutuhkan sistem yang yang besar seperti industri manufakture, rumah sakit dan jasa perbankan. Atau bisa mengembangkan software sendiri untuk dipasarkan ke industri-industri besar tersebut. Alumni STMIK EL Rahma ada yang mengembangkan software sendiri, yaitu software Rumah Sakit Khanzya yang sudah dipakai di 1000 an rumah sakit di seluruh Indonesia, dan software laundry 1010.dry yang sudah banyak digunakan juga di Indonesia.
            </p>
            <p>
              4. Technopreneur adalah seseorang yang mampu menangkap peluang bisnis di bidang IT, dan melakukan analisis bisnis. Menjadi seorang wirausaha di zaman serba digital seperti sekarang, seorang diharuskan juga perlu menguasai skill-skll teknologi yang mumpuni agar dapat bersaing di dunia luar. Apalagi di era industri 4.0, industri start-up digital tengah menjamur dimana-mana. Jika kamu tertarik untuk membangun perusahaan start-up digital-mu sendiri, kemampuan Technopreneur harus kamu miliki.
            </p>
          </li>
        </ol>

        <p><strong>SEBAGIAN MATA KULIAH DAN TUGAS AKHIR :</strong></p>
        <p>Bisnis Digital, Big Data, AI, SPK, IoT, Mikrokontroller, Technopreneuren</p>

        <p><strong>JALUR PENDAFTARAN, BIAYA STUDI DAN CARA PENDAFTARAN</strong></p>
        <p>
          Untuk jalur pendaftaran, biaya studi dan cara pendaftaran silahkan klik 
          <a href="https://stmikelrahma.ac.id/info-daftar-biaya-studi/biaya-pendidikan" target="_blank" rel="noopener" class="text-red-600 font-semibold underline">/info-daftar-biaya-studi/biaya-pendidikan</a>
        </p>
      </article>
</section>

</body>
</html>