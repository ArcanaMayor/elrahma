@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $info->judul }}</h2>

    @if($info->gambar)
        <img src="{{ asset('storage/' . $info->gambar) }}" class="img-fluid mb-3" style="max-height:300px; object-fit:cover;">
    @endif

    <p><strong>Dibaca:</strong> {{ $info->views }} kali</p>

    <div>
        {!! nl2br(e($info->konten)) !!}
    </div>

    <a href="{{ route('infos.index') }}" class="btn btn-secondary mt-3">← Kembali</a>
</div>
@endsection
