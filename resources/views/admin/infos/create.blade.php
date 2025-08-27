@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h3>Tambah Info Prodi ({{ $prodi->nama }})</h3>
    <form action="{{ route('admin.prodi.infos.store', $prodi) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Judul Info</label>
            <input type="text" name="judul" class="form-control" placeholder="Contoh: Visi, Misi, Tujuan" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="5" required></textarea>
        </div>
        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.prodi.infos.index', $prodi) }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
