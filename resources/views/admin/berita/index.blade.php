@extends('layouts.app') {{-- sesuaikan dengan layout admin kamu --}}

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Manajemen Berita</h2>

    {{-- Notifikasi sukses --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="mb-3">
        <a href="{{ route('admin.berita.create') }}" class="btn btn-primary">+ Tambah Berita</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th width="5%">No</th>
                <th width="20%">Judul</th>
                <th>Isi</th>
                <th width="20%">Gambar</th>
                <th width="20%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($beritas as $key => $berita)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $berita->judul }}</td>
                    <td>{{ Str::limit($berita->isi, 100) }}</td>
                    <td>
                        @if($berita->gambar)
                            <img src="{{ asset('storage/'.$berita->gambar) }}" width="120" class="img-thumbnail">
                        @else
                            <small class="text-muted">Tidak ada gambar</small>
                        @endif
                    </td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="{{ route('admin.berita.edit', $berita) }}" class="btn btn-sm btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('admin.berita.destroy', $berita) }}" method="POST" onsubmit="return confirm('Yakin hapus berita ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada berita</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center">
        {{ $beritas->links() }}
    </div>
</div>
@endsection
