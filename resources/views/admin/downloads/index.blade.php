@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">📂 Manajemen File Download</h1>

    {{-- Tombol tambah file --}}
    <div class="mb-3">
        <a href="{{ route('downloads.create') }}" class="btn btn-primary">
            + Tambah File
        </a>
    </div>

    {{-- Notifikasi sukses / error --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Tabel data --}}
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th style="width: 50px;">No</th>
                    <th>Judul</th>
                    <th style="width: 120px;">File</th>
                    <th style="width: 120px;">Thumbnail</th>
                    <th style="width: 180px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($downloads as $download)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $download->title }}</td>
                        <td class="text-center">
                            <a href="{{ asset('storage/' . $download->file) }}" 
                               target="_blank" 
                               class="btn btn-info btn-sm">
                                Lihat File
                            </a>
                        </td>
                        <td class="text-center">
                            @if($download->image)
                                <img src="{{ asset('storage/' . $download->image) }}" 
                                     alt="thumbnail" 
                                     class="img-thumbnail" 
                                     style="max-width: 80px;">
                            @else
                                <span class="text-muted">Tidak ada</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="{{ route('downloads.edit', $download) }}" 
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>
                            <form action="{{ route('downloads.destroy', $download) }}" 
                                  method="POST" 
                                  class="d-inline"
                                  onsubmit="return confirm('Yakin ingin menghapus file ini?')">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">
                            Belum ada file tersedia.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="mt-3">
        {{ $downloads->links() }}
    </div>
</div>
@endsection
