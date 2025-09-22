@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Mata Kuliah - {{ $mataKuliah->nama }}</h1>

    <form action="{{ route('admin.prodi.mata_kuliah.update', [$prodi->id, $mataKuliah->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="kode" class="form-label">Kode Mata Kuliah</label>
            <input type="text" name="kode" id="kode" value="{{ $mataKuliah->kode }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Mata Kuliah</label>
            <input type="text" name="nama" id="nama" value="{{ $mataKuliah->nama }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="sks" class="form-label">Jumlah SKS</label>
            <input type="number" name="sks" id="sks" value="{{ $mataKuliah->sks }}" class="form-control" required min="1">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.prodi.mata_kuliah.index', $prodi->id) }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
