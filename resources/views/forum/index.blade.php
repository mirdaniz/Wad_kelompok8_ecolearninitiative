@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Forum Diskusi</h2>
        <a href="{{ route('forum.create') }}" class="btn btn-primary mb-3">Buat Forum Baru</a>

        <!-- Menampilkan notifikasi -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('info'))
            <div class="alert alert-info">
                {{ session('info') }}
            </div>
        @endif

        <div class="list-group">
            @foreach ($forums as $forum)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <h5>{{ $forum->title }}</h5>
                        <p>{{ Str::limit($forum->content, 100) }}</p>
                    </div>
                    <div>
                        
                        <a href="{{ route('forum.edit', $forum->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('forum.destroy', $forum->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
