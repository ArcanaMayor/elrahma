@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Manajemen Galeri</h2>
    <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary mb-3">+ Tambah Gambar</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        @foreach($galeri as $item)
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                    <img src="{{ asset('storage/' . $item->gambar) }}" 
                         class="card-img-top"
                         alt="{{ $item->judul }}"
                         style="height:200px; object-fit:cover; border-radius:5px;">

                    <div class="card-body text-center d-flex flex-column">
                        <h6 class="mb-3">{{ $item->judul }}</h6>

                        <div class="mt-auto">
                            <a href="{{ route('admin.galeri.edit', $item->id) }}" 
                               class="btn btn-warning btn-sm me-1">Edit</a>

                            <form action="{{ route('admin.galeri.destroy', $item->id) }}" 
                                  method="POST" 
                                  onsubmit="return confirm('Hapus gambar ini?')" 
                                  class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
