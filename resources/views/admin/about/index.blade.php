@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Manajemen Infos (PMB)</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($about)
        <div class="card shadow-lg border-0">
            <div class="row g-0 align-items-center">
                <div class="col-md-8 p-4">
                    <h3 class="fw-bold">{{ $about->title }}</h3>
                    <p class="text-muted" style="text-align: justify;">
                        {!! $about->description !!}
                    </p>
                    <a href="{{ route('admin.about.edit', $about->id) }}" class="btn btn-warning mt-3">
                        <i class="fas fa-edit"></i>
                    </a>
                </div>
                <div class="col-md-4 text-center p-3">
                    @if($about->image)
                        <img src="{{ asset('storage/' . $about->image) }}" 
                             class="img-fluid rounded shadow" 
                             alt="About Image">
                    @endif
                </div>
            </div>
        </div>
    @else
        <a href="{{ route('admin.about.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
    @endif
</div>
@endsection
