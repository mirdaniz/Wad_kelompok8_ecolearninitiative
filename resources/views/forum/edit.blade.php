@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Forum</h1>
    <form method="POST" action="{{ route('forum.update', $forum->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="Subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="Subject" name="Subject" value="{{ $forum->Subject }}" required>
        </div>
        <div class="mb-3">
            <label for="Message" class="form-label">Message</label>
            <textarea class="form-control" id="Message" name="Message" required>{{ $forum->Message }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
