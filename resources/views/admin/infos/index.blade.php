@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Info Prodi</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

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
            @foreach ($infos as $index => $info)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $info->judul }}</td>
                    <td>{{ Str::limit($info->deskripsi, 100) }}</td>
                    <td>
                        <a href="{{ route('admin.prodi.infos.edit', [$prodi->id, $info->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.prodi.infos.destroy', $info->id) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Yakin hapus info ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
