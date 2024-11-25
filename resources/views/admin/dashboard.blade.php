@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <!-- Welcome Card -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4>Selamat datang di Dasbor Admin</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Welcome, Admin!</h5>
                            <p>Berikut ikhtisar singkat tentang dasbor Anda dan apa yang dapat Anda kelola.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <!-- Stats Section -->
                        <div class="col-md-3">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Total Pengguna</h5>
                                    <p class="card-text">{{ $totalUsers }}</p>
                                    <a href="{{ route('users.index') }}" class="btn btn-primary">Kelola Users</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Total Galery</h5>
                                    <p class="card-text">{{ $totalGalleries }}</p>
                                    <a href="{{ route('dashboard.galleries.index') }}" class="btn btn-primary">Kelola Galery</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Total Agenda</h5>
                                    <p class="card-text">{{ $totalAgendas }}</p>
                                    <a href="{{ route('dashboard.agendas.index') }}" class="btn btn-primary">Kelola Agenda</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Total Info</h5>
                                    <p class="card-text">{{ $totalInfos }}</p>
                                    <a href="{{ route('dashboard.infos.index') }}" class="btn btn-primary">Kelola Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
