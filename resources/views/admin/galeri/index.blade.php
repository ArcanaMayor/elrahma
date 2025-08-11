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
                <div class="card">
                    <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->judul }}">
                    <div class="card-body text-center">
                        <h6>{{ $item->judul }}</h6>
                        <form action="{{ route('admin.galeri.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus gambar ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm mt-2">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
