@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow-lg rounded" style="max-width: 400px; width: 100%; padding: 20px;">
        <h2 class="text-center mb-4" style="font-weight: 600; color: #2c3e50;">Login</h2>
        
        <!-- Display Errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Login Form -->
        <form method="POST" action="{{ route('login.store') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label" style="font-weight: 600;">Email</label>
                <input type="email" name="email" id="email" class="form-control" required style="border-radius: 8px;">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label" style="font-weight: 600;">Password</label>
                <input type="password" name="password" id="password" class="form-control" required style="border-radius: 8px;">
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-3" style="font-weight: 600;">Login</button>
            
            <p class="mt-3 text-center">Belum punya akun?<a href="{{ route('register') }}" class="text-primary">Register</a></p>
        </form>
    </div>
</div>
@endsection
