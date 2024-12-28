@extends('layouts.app')

@section('title', 'Edit Profil')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h4>Edit Profil</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('profiles.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" id="name" class="form-control form-control-lg" value="{{ $profile->name }}">
                        </div>

                        <div class="mb-4">
                            <label for="gender" class="form-label">Jenis Kelamin</label>
                            <select name="gender" id="gender" class="form-select form-select-lg" required>
                                <option value="Laki-laki" {{ $profile->gender == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ $profile->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control form-control-lg" value="{{ $profile->email }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="phone" class="form-label">No. Telepon</label>
                            <input type="text" name="phone" id="phone" class="form-control form-control-lg" value="{{ $profile->phone }}" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('profiles.show') }}" class="btn btn-secondary btn-lg">Batal</a>
                            <button type="submit" class="btn btn-success btn-lg">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
