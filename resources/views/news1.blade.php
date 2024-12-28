@extends('layouts.app')

@section('title', 'Detail Berita 1')

@section('content')
<div class="container">
    <h1>Ngeri! Ini Sederet Bencana Akibat Perubahan Iklim Sepanjang 2024</h1>
    <p class="text-muted">27 Desember 2024</p>
    <img src="{{ asset('images/Dampak.jpeg') }}" class="img-fluid" alt="Kekeringan">
    <p>Hampir seluruh wilayah di planet Bumi mengalami dampak dahsyat berbagai bencana akibat Perubahan iklim sepanjang tahun 2024. Tahun ini adalah tahun terpanas dalam sejarah, dengan suhu yang memecahkan rekor di atmosfer dan lautan bertindak se[erti bahan bakar untuk cuaca ekstrem di seluruh dunia Panas ekstrem, yang terkadang dijuluki 'pembunuh diam-diam', juga terbukti mematikan di Thailand, India, dan Amerika Serikat. Kondisi di Meksiko sangat ekstrem sehingga monyet howler jatuh mati dari pohon, sementara Pakistan membuat jutaan anak-anak tetap di rumah saat suhu udara naik di atas 50 derajat Celsius. Yunani mencatat gelombang panas paling awal yang pernah terjadi di awal musim panas, yang menjadi terpanas di Eropa. Negara ini memaksa penutupan Acropolis dan mengalami kebakaran hutan yang mengerikan. </p>
    <a href="{{ url('/') }}" class="btn btn-primary" style="background-color:rgb(75, 113, 76); color: white;">Kembali ke Dashboard</a>
</div>
@endsection
