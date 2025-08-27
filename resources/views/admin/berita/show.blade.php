<!-- ====== Detail Berita ====== -->
<section id="el-rahma-news-detail" class="news-detail-section py-5" style="background-color: #f8f9fa;">
  <div class="container">

    <!-- Judul Berita -->
    <div class="text-center mb-5">
      <h2 class="fw-bold" style="color: #2c3e50; font-size: 2.2rem;">
        {{ $berita->judul }}
      </h2>
      <div style="width: 80px; height: 3px; background: #e74c3c; margin: 15px auto;"></div>
      <p class="text-muted mb-0" style="font-size: 14px;">
        Dipublikasikan {{ $berita->created_at->translatedFormat('d F Y') }} • {{ $berita->created_at->diffForHumans() }}
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-9">
        <div class="bg-white shadow-sm rounded p-4">

          <!-- Gambar -->
          @if($berita->gambar)
          <div class="text-center mb-4">
            <img src="{{ asset('storage/'.$berita->gambar) }}" 
                 alt="{{ $berita->judul }}" 
                 class="img-fluid rounded shadow-sm"
                 style="max-height: 450px; object-fit: cover;">
          </div>
          @endif

          <!-- Isi Berita -->
          <article class="berita-content" style="color: #2c3e50; font-size: 16px; line-height: 1.9;">
            {!! $berita->isi !!}
          </article>

          <!-- Tombol kembali -->
          <div class="mt-4">
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

<style>
  .berita-content p {
    margin-bottom: 1rem;
  }
  .berita-content ul, 
  .berita-content ol {
    margin-left: 1.5rem;
    margin-bottom: 1rem;
  }
  .berita-content img {
    max-width: 100%;
    height: auto;
    margin: 1rem 0;
    border-radius: 8px;
  }
</style>
