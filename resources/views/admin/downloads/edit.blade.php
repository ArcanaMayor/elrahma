@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit File Download</h2>

    <form action="{{ route('admin.downloads.update', $download) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- Judul --}}
        <div class="mb-3">
            <label>Judul</label>
            <input 
                type="text" 
                name="title" 
                class="form-control" 
                value="{{ old('title', $download->title) }}" 
                required
            >
        </div>

        {{-- Deskripsi --}}
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea 
                name="description" 
                class="form-control"
                rows="4"
            >{{ old('description', $download->description) }}</textarea>
        </div>

        {{-- File --}}
        <div class="mb-3">
            <label>File (kosongkan jika tidak ingin mengganti)</label>
            <input 
                type="file" 
                name="file" 
                class="form-control"
            >
            <small class="text-muted">
                File sekarang: <a href="{{ asset('storage/' . $download->file) }}" target="_blank"><i class="fas fa-file-alt"></i>File sekarang</a>
            </small>
        </div>

        {{-- Tombol --}}
        <button class="btn btn-success"><i class="fas fa-check"></i></button>
        <a href="{{ route('admin.downloads.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></a>
    </form>
</div>
@endsection
