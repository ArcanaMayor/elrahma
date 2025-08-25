@extends('layouts.app') {{-- sesuaikan dengan layout publik --}}

@section('content')
<section id="el-rahma-news-detail" class="news-detail-section" style="background-color: #f8f9fa; padding: 60px 0;">
  <div class="container">
    
    <!-- Section Header -->
    <div class="section-header text-center" style="margin-bottom: 40px;">
      <h2 style="color: #2c3e50; font-weight: 700;">
        {{ $berita->judul }}
        <span style="display: block; width: 80px; height: 3px; background: #e74c3c; margin: 15px auto 0;"></span>
      </h2>
      <p class="section-subtitle" style="color: #7f8c8d; font-size: 16px; margin-top: 10px;">
        Dipublikasikan {{ $berita->created_at->format('d M Y') }} • {{ $berita->created_at->diffForHumans() }}
      </p>
    </div>

    <!-- News Content -->
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="card shadow-sm" style="border-radius: 10px; overflow: hidden;">
          
          <!-- Gambar -->
          @if($berita->gambar)
          <img src="{{ asset('storage/'.$berita->gambar) }}" 
               alt="{{ $berita->judul }}" 
               class="img-fluid w-100" 
               style="max-height: 450px; object-fit: cover;">
          @endif
          
          <!-- Isi -->
          <div class="card-body" style="padding: 30px;">
            <div class="news-content" style="color: #2c3e50; font-size: 16px; line-height: 1.8;">
              {!! nl2br(e($berita->isi)) !!}
            </div>
            
            <!-- Tombol kembali -->
            <div class="mt-4">
              <a href="{{ route('berita.index') }}" 
                 class="btn btn-danger" 
                 style="padding: 10px 25px; border-radius: 30px; font-weight: 600;">
                ← Kembali ke Berita
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection
