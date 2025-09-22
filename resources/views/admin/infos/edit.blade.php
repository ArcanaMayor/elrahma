@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h3>Edit Info Prodi</h3>
    <form action="{{ route('admin.prodi.infos.update', ['prodi' => $info->prodi_id, 'info' => $info]) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label class="form-label">Judul Info</label>
            <input type="text" name="judul" value="{{ $info->judul }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="5" required>{{ $info->deskripsi }}</textarea>
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('admin.prodi.infos.index', $info->prodi_id) }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection