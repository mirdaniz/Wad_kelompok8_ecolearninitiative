@extends('layouts.app')

@section('title', 'Edit Aktivitas')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Edit Aktivitas</h1>
    <form action="{{ route('activities.update', $activity->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="activity_type" class="form-label">Jenis Aktivitas</label>
            <select name="activity_type" id="activity_type" class="form-control" required>
                <option value="lesson" {{ $activity->activity_type == 'lesson' ? 'selected' : '' }}>Membaca Lesson</option>
                <option value="quiz" {{ $activity->activity_type == 'quiz' ? 'selected' : '' }}>Mengerjakan Quiz</option>
                <option value="feedback" {{ $activity->activity_type == 'feedback' ? 'selected' : '' }}>Mengisi Feedback</option>
                <option value="forum" {{ $activity->activity_type == 'forum' ? 'selected' : '' }}>Mengisi Forum</option>
            </select>
            @error('activity_type')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <input type="text" name="description" id="description" class="form-control" 
                value="{{ $activity->description }}" required>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="activity_time" class="form-label">Tanggal & Waktu</label>
            <input type="datetime-local" name="activity_time" id="activity_time" class="form-control" 
                value="{{ $activity->activity_time ? \Carbon\Carbon::parse($activity->activity_time)->format('Y-m-d\TH:i') : '' }}" required>
            @error('activity_time')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>
@endsection
