@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-5" style="font-weight: 700; color: #2c3e50;">{{ $gallery->title }}</h1>
    <p class="text-center text-muted mb-5" style="font-size: 1.1rem; color: #7f8c8d;">{{ $gallery->description }}</p>

    <div class="row">
        @foreach($gallery->photos as $photo)
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg rounded-lg overflow-hidden h-100">
                    <!-- Image with overlay on hover -->
                    <div class="card-img-container">
                        <img src="{{ $photo->image_url }}" class="card-img-top" alt="{{ $photo->title }}" style="object-fit: cover; height: 250px;">
                        <div class="image-overlay">
                            <span class="image-title">{{ $photo->title }}</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-truncate" style="font-size: 1.2rem; font-weight: 600; color: #2c3e50;">{{ $photo->title }}</h5>
                        <p class="card-text text-muted" style="font-size: 0.9rem; color: #7f8c8d;">{{ Str::limit($photo->description, 100, '...') }}</p>
                        <a href="{{ route('photos.show', $photo->id) }}" class="btn btn-secondary w-100 mt-3" style="font-weight: 600; transition: background-color 0.3s ease;">Lihat Photo</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection

<style>
    /* Card hover effects */
    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    /* Card image overlay */
    .card-img-container {
        position: relative;
        height: 250px;
        overflow: hidden;
    }

    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.4);
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .card-img-container:hover .image-overlay {
        opacity: 1;
    }

    .image-title {
        font-size: 1.5rem;
        font-weight: bold;
        text-transform: uppercase;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }

    /* Button hover effect */
    .btn-secondary:hover {
        background-color: #34495e;
        border-color: #34495e;
    }
</style>
