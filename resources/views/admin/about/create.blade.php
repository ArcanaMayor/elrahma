@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Create About Section</h2>

    <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
    <div class="mb-3">
    <label for="ckeditor-classic" class="form-label">Deskripsi</label>
    <textarea name="content" id="ckeditor-classic" class="form-control" rows="10"></textarea>
</div>


        <div class="form-group mb-3">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('ckeditor/ckeditor.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => console.error(error));
    </script>
@endpush
