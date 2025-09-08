@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2>{{ $download->title }}</h2>
    <hr>

    @if($download->image)
        <img src="{{ asset('storage/'.$download->image) }}" class="img-fluid mb-3" alt="{{ $download->title }}">
    @endif

    @if($download->description)
        <p>{{ $download->description }}</p>
    @endif

    <a href="{{ asset('storage/'.$download->file) }}" class="btn btn-success" download>📥 Download File</a>
    <a href="{{ route('home') }}" class="btn btn-secondary">⬅ Kembali</a>
</div>
@endsection
