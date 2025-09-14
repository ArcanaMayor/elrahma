@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah File Download</h2>
    <form action="{{ route('admin.downloads.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>File</label>
            <input type="file" name="file" class="form-control" required>
        </div>
        <button class="btn btn-success"><i class="fas fa-check"></i></button>
    </form>
</div>
@endsection
