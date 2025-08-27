@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h3>Manajemen Prodi</h3>
    <a href="{{ route('admin.prodi.create') }}" class="btn btn-primary mb-3">+ Tambah Prodi</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Prodi</th>
                <th>Akreditasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prodis as $prodi)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $prodi->nama }}</td>
                    <td>{{ $prodi->akreditasi ?? '-' }}</td>
                    <td>
                        <a href="{{ route('admin.prodi.infos.index', $prodi) }}" class="btn btn-sm btn-info">Info</a>
                        <a href="{{ route('admin.prodi.mataKuliahs.index', $prodi) }}" class="btn btn-sm btn-warning">Mata Kuliah</a>
                        <a href="{{ route('admin.prodi.edit', $prodi) }}" class="btn btn-sm btn-success">Edit</a>
                        <form action="{{ route('admin.prodi.destroy', $prodi) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
