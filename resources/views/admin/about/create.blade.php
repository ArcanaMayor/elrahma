@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create About Section</h1>

    <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input 
                type="text" 
                name="title" 
                id="title" 
                class="form-control" 
                placeholder="Masukkan judul" 
                required
            >
        </div>

        <div class="form-group mb-3">
            <label for="description">Deskripsi</label>
            <textarea 
                name="description" 
                id="editor" 
                class="form-control" 
                rows="6" 
                placeholder="Masukkan deskripsi"
                required
            ></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="image">Image</label>
            <input 
                type="file" 
                name="image" 
                id="image" 
                class="form-control"
            >
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>

{{-- CKEditor --}}
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');
</script>
@endsection
