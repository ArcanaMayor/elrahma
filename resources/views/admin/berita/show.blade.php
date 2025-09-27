<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>El Rahma News</title>
</head>
<body>
  <!-- ====== Detail Berita ====== -->
<section id="el-rahma-news-detail" class="news-detail-section py-5" style="background-color: #f4f6f9;">
  <div class="container">

    <!-- Judul Berita -->
    <div class="text-center mb-5">
      <h2 class="fw-bold display-5 text-dark mb-3">
        {{ $berita->judul }}
      </h2>
      <div class="mx-auto" style="width: 100px; height: 4px; background: linear-gradient(90deg, #e74c3c, #c0392b); border-radius: 5px;"></div>
      <p class="text-muted mt-3" style="font-size: 15px;">
        <i class="bi bi-calendar-event me-1"></i> 
        {{ $berita->created_at->translatedFormat('d F Y') }} 
        • 
        <i class="bi bi-clock-history me-1"></i> 
        {{ $berita->created_at->diffForHumans() }}
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">

        <!-- Card Berita -->
        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
          @if($berita->gambar)
          <div class="position-relative">
            <img src="{{ asset('storage/'.$berita->gambar) }}" 
                 alt="{{ $berita->judul }}" 
                 class="img-fluid w-100"
                 style="max-height: 480px; object-fit: cover;">
            <div class="position-absolute bottom-0 start-0 w-100" 
                 style="height: 120px; background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
            </div>
          </div>
          @endif

          <div class="card-body p-5">
            <!-- Isi Berita -->
            <article class="berita-content" style="color: #2c3e50; font-size: 17px; line-height: 1.9; text-align: justify;">
              {!! $berita->isi !!}
            </article>

            <!-- Divider -->
            <hr class="my-5">

            <!-- Tombol kembali -->
            <div class="text-center">
              <a href="{{ route('home') }}" 
                 class="btn btn-danger px-4 py-2 rounded-pill fw-semibold shadow-sm hover-scale">
                ← Kembali ke Daftar Berita
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<style>
  /* Konten berita */
  .berita-content p {
    margin-bottom: 1.2rem;
  }
  .berita-content ul, 
  .berita-content ol {
    margin-left: 1.5rem;
    margin-bottom: 1.2rem;
  }
  .berita-content img {
    max-width: 100%;
    height: auto;
    margin: 1.5rem 0;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
  }

  /* Hover efek tombol */
  .hover-scale {
    transition: transform .2s ease, box-shadow .2s ease;
  }
  .hover-scale:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 16px rgba(231, 76, 60, 0.3);
  }
</style>

</body>
</html>