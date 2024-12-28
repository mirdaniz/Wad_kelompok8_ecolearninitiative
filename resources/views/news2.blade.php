@extends('layouts.app')

@section('title', 'Detail Berita 2')

@section('content')
<div class="container">
    <h1>Krisis Iklim, Indonesia Alami Tambahan 122 Hari Suhu Panas</h1>
    <p class="text-muted">27 Desember 2024</p>
    <img src="{{ asset('images/Kekeringan.jpg') }}" class="img-fluid" alt="Banjir">
    <p>Laporan terbaru dari World Weather Attribution (WWA) dan Climate Central menunjukkan, krisis iklim memicu hari dengan gelombang panas yang lebih panjang pada 2024.Gelombang panas adalah kondisi yang menyebabkan suhu udara naik secara signifikan dalam waktu singkat, melebihi batas normal musim panas. Para peneliti menyebutkan, hampir setengah dari negara-negara di dunia mengalami suhu panas yang berisiko bagi kesehatan selama dua bulan. Penduduk di negara kepulauan Karibia dan Pasifik paling terdampak suhu panas yang berbahaya tersebut. "Di sekuruh dunia, suhu harian yang cukup panas sampai membahayakan kesehatan manusia menjadi lebih umum karena perubahan iklim," ungkap peneliti Climate Central Joseph Giguere dikutip dari The Guardian, Jumat (27/12/2024). Mereka mencatat, Inggris, Amerika Serikat dan Australia juga mengalami periode suhu tinggi tambahan selama tiga minggu akibat polusi bahan bakar fosil. Pada November 2024, krisis iklim memicu terjadinya puluhan gelombang panas yang sebelumnya dianggap tidak mungkin terjadi.</p>
    <a href="{{ url('/') }}" class="btn btn-primary" style="background-color:rgb(75, 113, 76); color: white;">Kembali ke Dashboard</a>
</div>
@endsection
