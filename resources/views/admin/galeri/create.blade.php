@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Gambar Galeri</h2>
    <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i></button>
    </form>
</div>
@endsection
