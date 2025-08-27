@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Tambah Berita</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul') }}" required>
        </div>

        <div class="mb-3">
    <label for="ckeditor-classic" class="form-label">Isi Berita</label>
    <textarea name="isi" id="ckeditor-classic" class="form-control" rows="10">{{ old('isi') }}</textarea>
</div>


        <div class="mb-3">
            <label for="gambar" class="form-label">Image</label>
            <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i></button>
        <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></a>
    </form>
</div>
@endsection