@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Menu</h2>
    <form action="{{ route('menus.update', $menu->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" 
                   value="{{ old('nama', $menu->nama) }}" required>
        </div>

        <div class="mb-3">
            <label>URL</label>
            <input type="text" name="url" class="form-control" 
                   value="{{ old('url', $menu->url) }}">
        </div>

        <div class="mb-3">
            <label>Ikon</label>
            <input type="text" name="ikon" class="form-control" 
                   value="{{ old('ikon', $menu->ikon) }}">
        </div>

        <div class="mb-3">
            <label>Aktif</label>
            <select name="aktif" class="form-control">
                <option value="1" {{ old('aktif', $menu->aktif) == 1 ? 'selected' : '' }}>Ya</option>
                <option value="0" {{ old('aktif', $menu->aktif) == 0 ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Parent Menu</label>
            <select name="parent_id" class="form-control">
                <option value="">-- Tidak ada (Menu Utama) --</option>
                @foreach($menus as $m)
                    <option value="{{ $m->id }}" 
                        {{ old('parent_id', $menu->parent_id) == $m->id ? 'selected' : '' }}>
                        {{ $m->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('menus.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
