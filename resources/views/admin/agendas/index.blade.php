@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Kelola Agenda</h1>
    <a href="{{ route('dashboard.agendas.create') }}" class="btn btn-primary mb-3">Tambah Agenda</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Tanggal Acara</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agendas as $agenda)
            <tr>
                <td>{{ $agenda->title }}</td>
                <td>{{ $agenda->description }}</td>
                <td>{{ $agenda->event_date }}</td>
                <td>
                    <a href="{{ route('dashboard.agendas.edit', $agenda) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('dashboard.agendas.destroy', $agenda) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apa kamu yakin?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
