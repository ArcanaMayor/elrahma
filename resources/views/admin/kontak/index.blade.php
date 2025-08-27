@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Daftar Pesan Kontak</h2>

    @if(session('success'))
        <div class="alert alert-success mt-2">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Waktu</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($kontaks as $index => $kontak)
                <tr>
                    <td>{{ $index + $kontaks->firstItem() }}</td>
                    <td>{{ $kontak->name }}</td>
                    <td>{{ $kontak->email }}</td>
                    <td>{{ $kontak->subject }}</td>
                    <td>{{ $kontak->created_at->format('d-m-Y H:i') }}</td>
                    <td>
                        <a href="{{ route('admin.kontak.show', $kontak->id) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('admin.kontak.destroy', $kontak->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin ingin menghapus pesan ini?')" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" class="text-center">Belum ada pesan masuk</td></tr>
            @endforelse
        </tbody>
    </table>

    {{ $kontaks->links() }}
</div>
@endsection
