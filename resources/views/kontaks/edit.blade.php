@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Kontak</h2>
    <form action="{{ route('kontaks.update', $kontak->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ $kontak->nama }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ $kontak->email }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Telepon</label>
            <input type="text" name="telepon" value="{{ $kontak->telepon }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Pesan</label>
            <textarea name="pesan" class="form-control" required>{{ $kontak->pesan }}</textarea>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('kontaks.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
