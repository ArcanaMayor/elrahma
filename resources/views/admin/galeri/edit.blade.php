@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Gambar</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" id="judul" 
                   class="form-control" 
                   value="{{ old('judul', $galeri->judul) }}" required>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Ganti Gambar (Opsional)</label>
            <input type="file" name="gambar" id="gambar" class="form-control">

            @if($galeri->gambar)
                <div class="mt-2">
                    <p>Gambar Saat Ini:</p>
                    <img src="{{ asset('storage/' . $galeri->gambar) }}" 
                         alt="{{ $galeri->judul }}" 
                         style="max-height: 200px; border-radius: 5px;">
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
