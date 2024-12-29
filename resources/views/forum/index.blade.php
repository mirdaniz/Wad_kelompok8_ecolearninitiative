@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Forum Discussions</h1>
    <a href="{{ route('forum.create') }}" class="btn btn-primary mb-3">Create New Forum</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($forums as $forum)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $forum->Subject }}</td>
                    <td>{{ Str::limit($forum->Message, 50) }}</td>
                    <td>
                        <a href="{{ route('forum.show', $forum->id) }}" class="btn btn-info btn-sm">Read</a>
                        <a href="{{ route('forum.edit', $forum->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('forum.destroy', $forum->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
