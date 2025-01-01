@extends('layouts.app') <!-- Perbaiki path untuk file layout -->

@section('title', 'Riwayat Aktivitas') <!-- Sesuai dengan bagian title pada layout -->

@section('content')
<div class="container">
    <h1 class="mb-4">Riwayat Aktivitas</h1>
    <a href="{{ route('activities.create') }}" class="btn btn-success mb-3">Tambah Aktivitas</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Jenis Aktivitas</th>
                <th>Deskripsi</th>
                <th>Tanggal & Waktu</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($activities as $activity)
            <tr>
                <td>{{ ucfirst($activity->activity_type) }}</td>
                <td>{{ $activity->description }}</td>
                <td>{{ \Carbon\Carbon::parse($activity->activity_time)->format('d M Y, H:i') }}</td> <!-- Format tanggal -->
                <td>
                    <a href="{{ route('activities.edit', $activity->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Belum ada aktivitas yang tercatat.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
