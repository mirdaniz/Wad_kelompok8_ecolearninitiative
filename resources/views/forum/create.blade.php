@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Buat Forum Baru</h2>

        <form action="{{ route('forum.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Subjek</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="content">Pesan</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Kirim Forum</button>
            <a href="{{ route('forum.index') }}" class="btn btn-secondary mt-3">Cancel</a>
        </form>
    </div>
@endsection
