@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $forum->Subject }}</h1>
    <p>{{ $forum->Message }}</p>
    <a href="{{ route('forum.index') }}" class="btn btn-secondary">Back to Forum</a>
    <a href="{{ route('forum.edit', $forum->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('forum.destroy', $forum->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
</div>
@endsection
