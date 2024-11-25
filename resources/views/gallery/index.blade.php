@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-5">Gallery</h1>

    <div class="row">
        @foreach($galleries as $gallery)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm rounded overflow-hidden">
                    {{-- Check if the gallery has photos --}}
                    @if ($gallery->photos->isNotEmpty())
                        <img src="{{ $gallery->photos->first()->image_url }}" 
                             class="card-img-top" 
                             alt="{{ $gallery->title }}" 
                             style="object-fit: cover; height: 220px;">
                    @else
                        <img src="https://via.placeholder.com/600x400" 
                             class="card-img-top" 
                             alt="No Image Available"
                             style="object-fit: cover; height: 220px;">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title text-truncate" style="font-size: 1.2rem; font-weight: 600; color: #2c3e50;">
                            {{ $gallery->title }}
                        </h5>
                        <p class="card-text" style="font-size: 0.9rem; color: #7f8c8d;">
                            {{ Str::limit($gallery->description, 100, '...') }}
                        </p>
                        {{-- Link to show gallery --}}
                        <a href="{{ route('gallery.show', ['gallery' => $gallery->id]) }}" class="btn btn-primary w-100 mt-3">
                            <i class="fas fa-eye"></i> 
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

