@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">➕ Tambah File Download</h1>

    {{-- Error validation --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('downloads.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">File</label>
            <input type="file" name="file" class="form-control" required>
            <small class="text-muted">Format: PDF, DOCX, PPTX, ZIP, dll.</small>
        </div>

        <div class="mb-3">
            <label class="form-label">Thumbnail (opsional)</label>
            <input type="file" name="image" class="form-control">
            <small class="text-muted">Format: JPG, PNG, max 2MB.</small>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('downloads.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
