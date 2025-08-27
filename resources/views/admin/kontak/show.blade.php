@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Detail Pesan</h2>

    <div class="card mt-3">
        <div class="card-body">
            <h5><b>Nama:</b> {{ $kontak->name }}</h5>
            <h6><b>Email:</b> {{ $kontak->email }}</h6>
            <p><b>Subject:</b> {{ $kontak->subject }}</p>
            <p><b>Pesan:</b> {{ $kontak->message }}</p>
            <p><b>Dikirim pada:</b> {{ $kontak->created_at->format('d-m-Y H:i') }}</p>
        </div>
    </div>

    <a href="{{ route('admin.kontak.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
