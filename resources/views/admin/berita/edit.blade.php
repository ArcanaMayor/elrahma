@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Berita</h1>

    <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input 
                type="text" 
                name="judul" 
                id="judul" 
                class="form-control" 
                value="{{ old('judul', $berita->judul) }}" 
                required
            >
        </div>

        <div class="mb-3">
            <label for="ckeditor-classic" class="form-label">Isi Berita</label>
            <textarea 
                name="isi" 
                id="ckeditor-classic" 
                class="form-control" 
                rows="10"
            >{{ old('isi', $berita->isi) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fas fa-check"></i> Simpan
        </button>
        <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </form>
</div>
@endsection
