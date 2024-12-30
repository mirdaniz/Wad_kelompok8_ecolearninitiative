@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Forum</h2>

        <!-- Menampilkan notifikasi -->
        @if(session('info'))
            <div class="alert alert-info">
                {{ session('info') }}
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('forum.update', $forum->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Subjek</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $forum->title) }}" required>
            </div>
            <div class="form-group">
                <label for="content">Pesan</label>
                <textarea class="form-control" id="content" name="content" rows="5" required>{{ old('content', $forum->content) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update Forum</button>
            <a href="{{ route('forum.index') }}" class="btn btn-secondary mt-3">Cancel</a>
        </form>
    </div>
@endsection
