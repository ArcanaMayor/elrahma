@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Info Prodi</h1>

    {{-- Notifikasi sukses --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Tombol tambah info --}}
    <a href="{{ route('admin.prodi.infos.create', $prodi->id) }}" class="btn btn-primary mb-3">+ Tambah Info</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th width="200px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($infos as $index => $info)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $info->judul }}</td>
                    <td>{{ Str::limit($info->deskripsi, 100) }}</td>
                    <td>
                        {{-- Tombol edit --}}
                        <a href="{{ route('admin.prodi.infos.edit', [$prodi->id, $info->id]) }}" 
                           class="btn btn-warning btn-sm">Edit</a>

                        {{-- Tombol hapus --}}
                        <form action="{{ route('admin.prodi.infos.destroy', [$prodi->id, $info->id]) }}" 
                              method="POST" class="d-inline"
                              onsubmit="return confirm('Yakin hapus info ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Belum ada info untuk prodi ini.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
