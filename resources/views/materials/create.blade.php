@extends('layouts.app')

@section('content')
<h2>Kelola Materi</h2>
<h3>Tambah Materi</h3>
<form action="{{ route('materials.store') }}" method="forum" enctype="multipart/form-data">
    @csrf
    <label>Judul Materi:</label><br>
    <input type="text" name="title" value="{{ old('title') }}" required><br><br>
    <label>Konten:</label><br>
    <textarea name="content" rows="5" required>{{ old('content') }}</textarea><br><br>
    <label>Gambar:</label><br>
    <input type="file" name="image"><br><br>
    <button class="btn btn-success">Simpan</button>
</form>
<hr>
<h3>Daftar Materi</h3>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Konten</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($materials as $key => $material)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $material->title }}</td>
                <td>{{ $material->content }}</td>
                <td>
                    <a href="{{ route('materials.edit', $material->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('materials.destroy', $material->id) }}" method="forum" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus materi ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<hr>
<a href="{{ route('materials.index') }}" class="btn btn-primary">Kembali ke Daftar Materi</a>

@endsection
