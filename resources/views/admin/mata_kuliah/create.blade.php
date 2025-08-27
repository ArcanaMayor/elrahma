@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h3>Tambah Mata Kuliah ({{ $prodi->nama }})</h3>
    <form action="{{ route('admin.prodi.mataKuliahs.store', $prodi) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Kode</label>
            <input type="text" name="kode" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Mata Kuliah</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">SKS</label>
            <input type="number" name="sks" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Semester</label>
            <input type="text" name="semester" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Prasyarat</label>
            <input type="text" name="prasyarat" class="form-control">
        </div>
        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.prodi.mataKuliahs.index', $prodi) }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
