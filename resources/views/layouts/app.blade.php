<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Gallery Web</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@300;400&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Bundle with Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* Custom Styling for Spacing, Layout, and Colors */
        body {
            font-family: 'Poppins', sans-serif;
            padding-top: 80px;
            background-color: #f0f4f8; /* Light background */
            color: #333;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            background-color: #34495e; /* Rich dark blue-gray */
            border-bottom: 4px solid #1abc9c; /* Teal border for accent */
        }

        .navbar-nav .nav-item .nav-link {
            padding: 14px 22px;
            font-weight: 500;
            color: #ecf0f1; /* Light gray text */
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .navbar-nav .nav-item .nav-link.active, .navbar-nav .nav-item .nav-link:hover {
            background-color: #1abc9c; /* Soft teal on hover */
            color: #fff !important;
            border-radius: 5px;
        }

        .navbar-nav .nav-item .nav-link i {
            margin-right: 8px;
        }

        .alert {
            margin-top: 20px;
            font-size: 1.1rem;
        }

        footer {
            background-color: #2c3e50; /* Darker background for footer */
            color: #fff;
            text-align: center;
            padding: 40px 20px;
            margin-top: auto;
            font-size: 1rem;
            box-shadow: 0 -3px 10px rgba(0, 0, 0, 0.1);
        }

        footer a {
            color: #1abc9c;
            text-decoration: none;
            font-weight: bold;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .fade-in {
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .navbar-toggler-icon {
            background-color:  #34495e; /* Soft teal for the burger icon */
        }

        /* Hover effects for buttons */
        .btn-primary {
            background-color: #1abc9c;
            border-color: #1abc9c;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #16a085; /* Slightly darker teal */
            border-color: #16a085;
            transform: translateY(-2px);
        }

        .btn-primary:focus {
            box-shadow: 0 0 0 0.2rem rgba(26, 188, 133, 0.5);
        }

        .btn-primary:active {
            background-color: #1f6fa1;
            border-color: #1f6fa1;
            transform: translateY(0);
        }

        .navbar-brand img {
            height: 50px; /* Adjust logo size */
            width: auto;
        }

        /* New Stylish Card for Content */
        .card {
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            object-fit: cover;
            height: 200px;
            width: 100%;
            transition: transform 0.5s ease;
        }

        .card:hover img {
            transform: scale(1.1);
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-weight: bold;
            font-size: 1.25rem;
        }

        .card-text {
            color: #7f8c8d; /* Lighter gray text for description */
        }

        .card-footer {
            background-color: #ecf0f1;
            text-align: right;
        }
    </style>
</head>

<body class="fade-in">

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="https://pjj.smkn4bogor.sch.id/pluginfile.php/1/core_admin/logocompact/300x300/1662946883/LOGO%20SMKN%204.png" alt="Logo"> <!-- Replace with your image URL -->
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}"><i class=""></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('gallery.*') ? 'active' : '' }}" href="{{ route('gallery.index') }}"><i class=""></i> Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('info.index') ? 'active' : '' }}" href="{{ route('info.index') }}"><i class=""></i> Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('agenda.index') ? 'active' : '' }}" href="{{ route('agenda.index') }}"><i class=""></i> Agenda</a>
                    </li>

                    @auth
                    {{-- Link Dashboard khusus untuk Admin --}}
                    @if (Auth::user()->role === 'admin')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('dashboard.index') ? 'active' : '' }}"
                            href="{{ route('dashboard.index') }}"><i class=""></i> Dashboard
                        </a>
                    </li>
                    @endif
                    @endauth
                </ul>

                <ul class="navbar-nav">
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <form action="{{ route('logout') }}" method="POST" class="dropdown-item p-0">
                                    @csrf
                                    <button class="btn btn-link text-decoration-none w-100 text-start">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ route('login') }}"><i class=""></i> Login</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    {{-- Flash Message for Success --}}
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    {{-- Flash Message for Errors --}}
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <main class="container">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer>
        <small>© 2024 Gallery Web<a href="https://github.com" target="_blank"></a></small>
    </footer>

</body>

</html>
