@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-5" style="font-weight: 600; color: #2c3e50;">Daftar Agenda</h1>
    
    <!-- Agenda List with Titles and Excerpts -->
    <div class="row">
        @foreach ($agendas as $agenda)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm rounded-lg h-100">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 1.2rem; font-weight: 600; color: #2c3e50;">
                            <a href="{{ route('agendas.show', $agenda->id) }}" class="text-dark text-decoration-none">
                                {{ $agenda->title }}
                            </a>
                        </h5>
                        <p class="card-text" style="font-size: 0.9rem; color: #7f8c8d;">
                            {{ Str::limit($agenda->description, 24, '...') }}
                        </p>
                        <p class="text-muted" style="font-size: 0.9rem;">
                            Tanggal Acara: {{ \Carbon\Carbon::parse($agenda->event_date)->format('M d, Y') }}
                        </p>
                        <a href="{{ route('agendas.show', $agenda->id) }}" class="btn btn-primary w-100">
                            <i class="fas fa-eye"></i> 
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
