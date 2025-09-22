@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Konten Manajemen El Rahma</h2>
    <a href="{{ route('admin.tentang_elrahma.create') }}" class="btn btn-primary mb-3"><i class="fa fa-plus"></i></a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Link</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->judul }}</td>
                <td><img src="{{ asset('storage/'.$item->gambar) }}" width="100"></td>
                <td>{{ Str::limit($item->deskripsi, 50) }}</td>
                <td>{{ $item->link }}</td>
                <td>
                    <a href="{{ route('admin.tentang_elrahma.edit', $item->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                    <form action="{{ route('admin.tentang_elrahma.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</div>
@endsection
