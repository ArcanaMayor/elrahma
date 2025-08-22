@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit About Section</h1>
    <form action="{{ route('admin.about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $about->title }}">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" id="tinymce-editor" class="form-control">{{ $about->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Image</label>
            <div class="mb-2">
                @if($about->image)
                    <img src="{{ asset('storage/' . $about->image) }}" class="img-fluid rounded" width="200">
                @endif
            </div>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection

@push('scripts')
    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/q23oijllb0bh4qykqtjcusb7uz11j58hfgtviaj22aerotgy/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
    selector: '#tinymce-editor',
    height: 500,
    plugins: 'print preview paste importcss searchreplace autolink autosave save ' +
             'directionality code visualblocks visualchars fullscreen image link media ' +
             'template codesample table charmap hr pagebreak nonbreaking anchor toc ' +
             'insertdatetime advlist lists wordcount imagetools textpattern noneditable help ' +
             'charmap quickbars emoticons',
    menubar: 'file edit view insert format tools table help',
    toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | ' +
             'alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist checklist | ' +
             'forecolor backcolor casechange permanentpen formatpainter removeformat | pagebreak | ' +
             'charmap emoticons | fullscreen preview save print | ' +
             'insertfile image media pageembed template link anchor codesample | ' +
             'a11ycheck ltr rtl | showcomments addcomment',
    toolbar_sticky: true,
    autosave_restore_when_empty: true,
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});

    </script>
@endpush
