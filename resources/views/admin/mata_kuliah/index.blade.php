@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Mata Kuliah Prodi {{ $prodi->nama ?? '' }}</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Tombol tambah mata kuliah --}}
    <a href="{{ route('admin.prodi.mataKuliahs.create', $prodi->id) }}" class="btn btn-primary mb-3">+ Tambah Mata Kuliah</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th width="200px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($mataKuliahs as $index => $mk)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $mk->kode }}</td>
                    <td>{{ $mk->nama }}</td>
                    <td>{{ $mk->sks }}</td>
                    <td>
                        {{-- Tombol edit --}}
                        <a href="{{ route('admin.prodi.mataKuliahs.edit', [$prodi->id, $mk->id]) }}" 
                           class="btn btn-warning btn-sm">Edit</a>

                        {{-- Tombol hapus --}}
                        <form action="{{ route('admin.prodi.mataKuliahs.destroy', [$prodi->id, $mk->id]) }}" 
                              method="POST" class="d-inline"
                              onsubmit="return confirm('Yakin hapus mata kuliah ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada mata kuliah untuk prodi ini.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
