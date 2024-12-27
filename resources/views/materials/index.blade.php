@extends('layouts.app')

@section('title', 'Lesson Materials')

@section('styles')
  <style>
    .material-image {
      width: 100%;  
      max-width: 500px;
      height: auto;
      margin: 10px auto;
    }
    p.text-muted {
      font-size: 1.1rem;
      line-height: 1.6;
    }
  </style>
@endsection

@section('content')
<div>
  <div>
    @foreach ($materials as $key => $material)
      <div class="mb-4">
        <h1 class="fw-bold text-center">{{ $material->title }}</h1>
        @if ($material->image)
          <div class="text-center">
            <img src="{{ asset('storage/' . $material->image) }}" alt="Image" class="material-image">
          </div>
        @endif
        <p class="text-muted">{{ $material->content }}</p>
      </div>
    @endforeach
  </div>
</div>
@endsection
