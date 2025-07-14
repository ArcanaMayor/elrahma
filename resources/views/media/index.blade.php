@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Manajemen File Download</h2>
    <a href="{{ route('media.create') }}" class="btn btn-primary mb-3">+ Upload File</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>File</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($media as $m)
            <tr>
                <td>{{ $m->judul }}</td>
                <td>
                    <a href="{{ asset('storage/' . $m->file) }}" target="_blank">Download</a>
                </td>
                <td>
                    <a href="{{ route('media.edit', $m->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('media.destroy', $m->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus file ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
