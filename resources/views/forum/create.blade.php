@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Forum</h1>
    <form method="POST" action="{{ route('forum.store') }}">
        @csrf
        <div class="mb-3">
            <label for="Subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="Subject" name="Subject" required>
        </div>
        <div class="mb-3">
            <label for="Message" class="form-label">Message</label>
            <textarea class="form-control" id="Message" name="Message" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
