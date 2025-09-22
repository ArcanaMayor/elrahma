@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Mata Kuliah - {{ $prodi->nama }}</h1>

    <a href="{{ route('admin.prodi.mata_kuliah.create', $prodi->id) }}" class="btn btn-primary mb-3">
        + Tambah Mata Kuliah
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mataKuliahs as $index => $mk)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $mk->kode }}</td>
                    <td>{{ $mk->nama }}</td>
                    <td>{{ $mk->sks }}</td>
                    <td>
                        <a href="{{ route('admin.prodi.mata_kuliah.edit', [$prodi->id, $mk->id]) }}" class="btn btn-sm btn-warning">
                            Edit
                        </a>

                        <form action="{{ route('admin.prodi.mata_kuliah.destroy', [$prodi->id, $mk->id]) }}" 
                              method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Yakin mau hapus mata kuliah ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
