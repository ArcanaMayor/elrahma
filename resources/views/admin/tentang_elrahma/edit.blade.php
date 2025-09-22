@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Tentang El Rahma</h2>
    <form action="{{ route('admin.tentang_elrahma.update', $tentangElrahma->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" value="{{ $tentangElrahma->judul }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="4" required>{{ $tentangElrahma->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label>Gambar</label>
            @if($tentangElrahma->gambar)
                <div><img src="{{ asset('storage/'.$tentangElrahma->gambar) }}" width="150"></div>
            @endif
            <input type="file" name="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <label>Link</label>
            <input type="text" name="link" value="{{ $tentangElrahma->link }}" class="form-control">
        </div>
        <button class="btn btn-success">Update</button>
    </form>
</div>
@endsection
