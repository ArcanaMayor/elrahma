@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Gambar Galeri</h2>
    <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" value="{{ $galeri->judul }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Ganti Gambar</label>
            <input type="file" name="gambar" class="form-control">
            <p>Gambar saat ini:</p>
            <img src="{{ asset('storage/' . $galeri->gambar) }}" width="120">
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('galeri.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
