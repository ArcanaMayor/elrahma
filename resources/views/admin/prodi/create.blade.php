@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h3>Tambah Prodi</h3>
    <form action="{{ route('admin.prodi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama Prodi</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Akreditasi</label>
            <input type="text" name="akreditasi" class="form-control">
        </div>
        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.prodi.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
