@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h3>Edit Prodi</h3>
    <form action="{{ route('admin.prodi.update', $prodi) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nama Prodi</label>
            <input type="text" name="nama" value="{{ $prodi->nama }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Akreditasi</label>
            <input type="text" name="akreditasi" value="{{ $prodi->akreditasi }}" class="form-control">
        </div>
        <button class="btn btn-success">Update</button>
        <a href="{{ route('admin.prodi.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
