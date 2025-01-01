@extends('layouts.app') <!-- Pastikan path layout benar -->

@section('title', 'Tambah Aktivitas') <!-- Menyesuaikan bagian title -->

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Aktivitas</h1>
    <form action="{{ route('activities.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="activity_type" class="form-label">Jenis Aktivitas</label>
            <select name="activity_type" id="activity_type" class="form-control" required>
                <option value="" disabled selected>Pilih Jenis Aktivitas</option>
                <option value="lesson">Membaca Lesson</option>
                <option value="quiz">Mengerjakan Quiz</option>
                <option value="feedback">Mengisi Feedback</option>
                <option value="forum">Mengisi Forum</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="Masukkan deskripsi aktivitas" required>
        </div>
        <div class="mb-3">
            <label for="activity_time" class="form-label">Tanggal & Waktu</label>
            <input type="datetime-local" name="activity_time" id="activity_time" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('activities.index') }}" class="btn btn-secondary">Kembali</a> <!-- Tombol kembali ke daftar aktivitas -->
    </form>
</div>
@endsection
