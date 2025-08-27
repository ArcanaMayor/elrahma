@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h3>Edit Mata Kuliah</h3>
    <form action="{{ route('admin.prodi.mataKuliahs.update', $mataKuliah) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label class="form-label">Kode</label>
            <input type="text" name="kode" value="{{ $mataKuliah->kode }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Mata Kuliah</label>
            <input type="text" name="nama" value="{{ $mataKuliah->nama }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">SKS</label>
            <input type="number" name="sks" value="{{ $mataKuliah->sks }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Semester</label>
            <input type="text" name="semester" value="{{ $mataKuliah->semester }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Prasyarat</label>
            <input type="text" name="prasyarat" value="{{ $mataKuliah->prasyarat }}" class="form-control">
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('admin.prodi.mataKuliahs.index', $mataKuliah->prodi_id) }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
