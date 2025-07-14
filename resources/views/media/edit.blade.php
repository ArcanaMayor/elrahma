@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit File</h2>
    <form action="{{ route('media.update', $media->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" value="{{ $media->judul }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>File (kosongkan jika tidak diganti)</label>
            <input type="file" name="file" class="form-control">
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('media.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
