@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-5" style="font-weight: 600; color: #2c3e50;">{{ $info->title }}</h1>
    
    
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card shadow-sm rounded-lg">
                <div class="card-body">
                    <p class="card-text" style="font-size: 1rem; color: #2c3e50; line-height: 1.6;">
                        {{ $info->content }}
                    </p>
                    <a href="{{ route('info.index') }}" class="btn btn-secondary mt-3">
                        <i class="fas fa-arrow-left"></i> Kembali ke Daftar Info
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
