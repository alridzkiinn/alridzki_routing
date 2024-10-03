@extends('layouts.app')

@section('content')
    <h1 class="my-4">Tambah Tugas</h1>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" name="nama" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea class="form-control" name="deskripsi" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <a href="{{ route('items.index') }}" class="btn btn-secondary mt-3">Kembali</a>
@endsection
