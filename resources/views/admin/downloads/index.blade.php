@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Download Management</h2>
    <a href="{{ route('admin.downloads.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i></a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Judul</th>
            <th>File</th>
            <th>Aksi</th>
        </tr>
        @foreach($downloads as $download)
        <tr>
            <td>{{ $download->title }}</td>
            <td><a href="{{ asset('storage/' . $download->file) }}" target="_blank"><i class="fas fa-file-alt"></i> Lihat</a></td>
            <td>
                <a href="{{ route('admin.downloads.edit', $download) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                <form action="{{ route('admin.downloads.destroy', $download) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $downloads->links() }}
</div>
@endsection
