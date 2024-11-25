@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Buat Informasi Baru</h1>
    <form method="POST" action="{{ route('dashboard.infos.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="form-group">
            <label for="content">Deskripsi:</label>
            <textarea class="form-control" name="content" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
