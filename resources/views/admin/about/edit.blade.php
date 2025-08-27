@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit About Section</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-lg border-0 p-4">
        <form action="{{ route('admin.about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $about->title) }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="ckeditor-classic">{{ old('description', $about->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Image</label><br>
                @if($about->image)
                    <img src="{{ asset('storage/'.$about->image) }}" alt="Current Image" width="200" class="mb-2">
                @endif
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i></button>
        </form>
    </div>
</div>
@endsection

