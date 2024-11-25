@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-5" style="font-weight: 600; color: #2c3e50;">Daftar Informasi</h1>
    
    <!-- Info List with Titles and Excerpts -->
    <div class="row">
        @foreach ($infos as $info)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm rounded-lg h-100">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 1.2rem; font-weight: 600; color: #2c3e50;">
                            <a href="{{ route('infos.show', $info->id) }}" class="text-dark text-decoration-none">
                                {{ $info->title }}
                            </a>
                        </h5>
                        <p class="card-text" style="font-size: 0.9rem; color: #7f8c8d;">
                            {{ Str::limit($info->content, 24, '...') }}
                        </p>
                        <a href="{{ route('infos.show', $info->id) }}" class="btn btn-primary w-100">
                            <i class="fas fa-eye"></i> 
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
