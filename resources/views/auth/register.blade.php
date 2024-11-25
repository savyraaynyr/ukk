@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow-lg rounded" style="max-width: 400px; width: 100%; padding: 20px;">
        <h2 class="text-center mb-4" style="font-weight: 600; color: #2c3e50;">Create an Account</h2>

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
        
        <!-- Registration Form -->
        <form method="POST" action="{{ route('register.store') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label" style="font-weight: 600;">Full Name</label>
                <input type="text" name="name" id="name" class="form-control" required style="border-radius: 8px;">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label" style="font-weight: 600;">Email Address</label>
                <input type="email" name="email" id="email" class="form-control" required style="border-radius: 8px;">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label" style="font-weight: 600;">Password</label>
                <input type="password" name="password" id="password" class="form-control" required style="border-radius: 8px;">
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label" style="font-weight: 600;">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required style="border-radius: 8px;">
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-3" style="font-weight: 600;">Register</button>
            
            <p class="mt-3 text-center">Sudah punya akun? <a href="{{ route('login') }}" class="text-primary">Login</a></p>
        </form>
    </div>
</div>
@endsection
