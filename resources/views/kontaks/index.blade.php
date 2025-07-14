@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Manajemen Kontak</h2>
    <a href="{{ route('kontaks.create') }}" class="btn btn-primary mb-3">+ Tambah Kontak</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Pesan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kontaks as $kontak)
            <tr>
                <td>{{ $kontak->nama }}</td>
                <td>{{ $kontak->email }}</td>
                <td>{{ $kontak->telepon }}</td>
                <td>{{ $kontak->pesan }}</td>
                <td>
                    <a href="{{ route('kontaks.edit', $kontak->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('kontaks.destroy', $kontak->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus kontak ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
