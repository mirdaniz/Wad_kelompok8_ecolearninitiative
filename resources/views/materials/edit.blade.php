@extends('layouts.app')

@section('content')
<h2>Edit Materi</h2>

<form action="{{ route('materials.update', $material->id) }}" method="forum" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label>Judul Materi:</label><br>
    <input type="text" name="title" value="{{ old('title', $material->title) }}" required><br><br>

    <label>Konten:</label><br>
    <textarea name="content" rows="5" required>{{ old('content', $material->content) }}</textarea><br><br>

    <label>Gambar:</label><br>
    <input type="file" name="image"><br><br>
    @if ($material->image)
        <div>
            <strong>Gambar Lama:</strong><br>
            <img src="{{ asset('storage/' . $material->image) }}" alt="Image" width="150"><br>
            <small>Gambar yang sudah diunggah sebelumnya</small>
        </div>
    @endif

    <button class="btn btn-success">Update</button>
</form>
<hr>
<a href="{{ route('materials.index') }}" class="btn btn-primary">Kembali ke Daftar Materi</a>

@endsection
