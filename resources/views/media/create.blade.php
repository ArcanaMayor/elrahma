@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Upload File Baru</h2>
    <form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>File</label>
            <input type="file" name="file" class="form-control" required>
        </div>
        <button class="btn btn-success">Upload</button>
        <a href="{{ route('media.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
