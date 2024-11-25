@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Kelola Informasi</h1>
    <a href="{{ route('dashboard.infos.create') }}" class="btn btn-primary mb-3">Tambah Info</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Isi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($infos as $info)
            <tr>
                <td>{{ $info->title }}</td>
                <td>{{ $info->content }}</td>
                <td>
                    <a href="{{ route('dashboard.infos.edit', $info) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('dashboard.infos.destroy', $info) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
