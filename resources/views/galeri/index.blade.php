@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Manajemen Galeri</h2>
    <a href="{{ route('galeri.create') }}" class="btn btn-primary mb-3">+ Tambah Gambar</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($galeri as $g)
            <tr>
                <td>{{ $g->judul }}</td>
                <td><img src="{{ asset('storage/' . $g->gambar) }}" width="100"></td>
                <td>
                    <a href="{{ route('galeri.edit', $g->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('galeri.destroy', $g->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus gambar ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection