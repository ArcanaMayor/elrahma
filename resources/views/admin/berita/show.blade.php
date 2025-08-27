<!-- ====== Detail Berita ====== -->
<section id="el-rahma-news-detail" class="news-detail-section py-5" style="background-color: #f8f9fa;">
  <div class="container">

    <!-- Judul Berita -->
    <div class="text-center mb-5">
      <h2 class="fw-bold" style="color: #2c3e50; font-size: 2rem;">
        {{ $berita->judul }}
      </h2>
      <div style="width: 80px; height: 3px; background: #e74c3c; margin: 15px auto;"></div>
      <p class="text-muted mb-0" style="font-size: 15px;">
        Dipublikasikan {{ $berita->created_at->format('d M Y') }} • {{ $berita->created_at->diffForHumans() }}
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="bg-white shadow-sm rounded p-3">

          <!-- Gambar -->
          @if($berita->gambar)
          <div class="text-center mb-4">
            <img src="{{ asset('storage/'.$berita->gambar) }}" 
                 alt="{{ $berita->judul }}" 
                 class="img-fluid rounded shadow-sm"
                 style="max-height: 480px; object-fit: cover;">
          </div>
          @endif

          <!-- Isi Berita -->
          <div class="px-2 pb-3" style="color: #2c3e50; font-size: 17px; line-height: 1.8;">
            {!! nl2br(e($berita->isi)) !!}
          </div>

          <!-- Tombol kembali -->
          <div class="mt-3">
            <a href="{{ route('home') }}" 
               class="btn btn-outline-danger px-4 py-2 rounded-pill fw-semibold">
              ← Kembali ke Berita
            </a>
          </div>

        </div>
      </div>
    </div>

  </div>
</section>
