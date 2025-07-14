@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Menu</h2>
    <form action="{{ route('menus.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>URL</label>
            <input type="text" name="url" class="form-control">
        </div>
        <div class="mb-3">
            <label>Ikon</label>
            <input type="text" name="ikon" class="form-control">
        </div>
        <div class="mb-3">
            <label>Aktif</label>
            <select name="aktif" class="form-control">
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
            </select>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('menus.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
