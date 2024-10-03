@extends('layouts.app')

@section('content')
    <h1 class="my-4">Edit Item</h1>
    <form action="{{ route('items.update', $item) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" name="nama" value="{{ $item->nama }}" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea class="form-control" name="deskripsi" required>{{ $item->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
    </form>
    <a href="{{ route('items.index') }}" class="btn btn-secondary mt-3">Kembali</a>
@endsection
