@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">✏️ Edit File Download</h1>

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

    <form action="{{ route('downloads.update', $download) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $download->title) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">File</label>
            <input type="file" name="file" class="form-control">
            <small class="text-muted">Kosongkan jika tidak ingin mengganti file.</small>
            @if($download->file)
                <p class="mt-2">
                    <a href="{{ asset('storage/' . $download->file) }}" target="_blank" class="btn btn-info btn-sm">
                        Lihat File Lama
                    </a>
                </p>
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Thumbnail</label>
            <input type="file" name="image" class="form-control">
            <small class="text-muted">Kosongkan jika tidak ingin mengganti thumbnail.</small>
            @if($download->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $download->image) }}" alt="thumbnail" class="img-thumbnail" style="max-width: 120px;">
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('downloads.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
