@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Hero Section -->
    <section class="text-center my-5">
        <h1 class="display-4" style="font-weight: 600; color: #2c3e50;">Welcome to Gallery Web</h1>
        <p class="lead" style="font-size: 1.2rem; color: #7f8c8d;">{{ $welcomeMessage }}</p>
    </section>

    <!-- Home Content Section -->
    <section class="row text-center my-5">
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg rounded">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 1.3rem; font-weight: 600; color: #2c3e50;">Jelajahi Galeri Kami</h5>
                    
                    <a href="{{ route('gallery.index') }}" class="btn btn-primary w-100 mt-2">Lihat Gallery</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-lg rounded">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 1.3rem; font-weight: 600; color: #2c3e50;">Periksa Agenda Kami</h5>
                    
                    <a href="{{ route('agenda.index') }}" class="btn btn-secondary w-100 mt-2">Lihat Agenda</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-lg rounded">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 1.3rem; font-weight: 600; color: #2c3e50;">Baca Informasi Terkini</h5>
                    
                    <a href="{{ route('info.index') }}" class="btn btn-info w-100 mt-2">Lihat Info</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps Section -->
    <section class="my-5">
        <h3 class="text-center" style="font-weight: 600; color: #2c3e50;">Our Location</h3>
        <div class="map-container" style="width: 100%; height: 450px; border: 1px solid #ddd;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31704.398742240563!2d106.824694!3d-6.640733000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c8b16ee07ef5%3A0x14ab253dd267de49!2sSMK%20Negeri%204%20Bogor%20(Nebrazka)!5e0!3m2!1sid!2sid!4v1731816148667!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</div>
@endsection
