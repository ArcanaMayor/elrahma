@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pesan Kontak</h1>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Pesan</th>
                <th>Status</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kontaks as $kontak)
            <tr>
                <td>{{ $kontak->name }}</td>
                <td>{{ $kontak->email }}</td>
                <td>{{ $kontak->subject }}</td>
                <td>{{ $kontak->message }}</td>
                <td>{{ $kontak->status }}</td>
                <td>{{ $kontak->created_at->format('d-m-Y H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
