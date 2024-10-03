@extends('layouts.app')

@section('content')
    <h1 class="my-4">Daftar Tugas</h1>
    <a href="{{ route('items.create') }}" class="btn btn-primary mb-3">Tambah Tugas</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Nama Tugas</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>
                        <a href="{{ route('items.edit', $item) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
