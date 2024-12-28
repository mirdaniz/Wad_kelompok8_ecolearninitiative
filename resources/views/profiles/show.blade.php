@extends('layouts.app')

@section('title', 'Profil Saya')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h4>Profil Diri</h4>
        </div>
        <div class="card-body">
            <div class="d-flex align-items-center mb-4">
                <img src="{{ asset('images/default-profile.png') }}" alt="Foto Profil" class="rounded-circle me-3" style="width: 100px; height: 100px;">
                <div>
                    <h5>{{ $profile->name }}</h5>
                    <p class="text-muted">Gender: {{ $profile->gender }}</p>
                </div>
            </div>
            <hr>
            <h6 class="fw-bold">Kontak</h6>
            <p><strong>Email:</strong> {{ $profile->email }}</p>
            <p><strong>No. Telepon:</strong> {{ $profile->phone }}</p>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('profile.edit') }}" class="btn btn-warning">Edit Profil</a>
        </div>
    </div>
</div>
@endsection
