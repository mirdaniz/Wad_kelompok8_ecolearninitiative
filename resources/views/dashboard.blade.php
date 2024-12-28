@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div>
  <h1>Welcome To EcoLearn Initiative</h1>
  <h5>New Feeds</h5>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <div class="card-image-wrapper">
          <img class="card-img-top" src="{{ asset('images/Dampak.jpeg') }}" alt="Kekeringan">
        </div>
        <div class="card-body">
          <p class="text-muted">27 Desember 2024</p>
          <h5 class="card-title">Ngeri! Ini Sederet Bencana Akibat Perubahan Iklim Sepanjang 2024</h5>
          <p class="card-text text-primary">
            <a href="{{ url('/news1') }}">Baca Selengkapnya</a>
          </p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <div class="card-image-wrapper">
          <img class="card-img-top" src="{{ asset('images/Kekeringan.jpg') }}" alt="Banjir">
        </div>
        <div class="card-body">
          <p class="text-muted">27 Desember 2024</p>
          <h5 class="card-title">Krisis Iklim, Indonesia Alami Tambahan 122 Hari Suhu Panas</h5>
          <p class="card-text text-primary">
            <a href="{{ url('/news2') }}">Baca Selengkapnya</a>
          </p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <div class="card-image-wrapper">
          <img class="card-img-top" src="{{ asset('images/Turki.png') }}" alt="Kebakaran Hutan">
        </div>
        <div class="card-body">
          <p class="text-muted">27 Desember 2024</p>
          <h5 class="card-title">Perubahan iklim perpanjang masa panen teh di Turki</h5>
          <p class="card-text text-primary">
            <a href="{{ url('/news3') }}">Baca Selengkapnya</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <h5 class="mt-5">Mini Quiz</h5>
  <div class="quiz-container">
    <p><strong>Soal:</strong> Apa penyebab utama perubahan iklim?</p>
    <form method="POST" action="{{ url('/submit-quiz') }}">
      @csrf
      <div>
        <input type="radio" id="jawaban1" name="jawaban" value="1">
        <label for="jawaban1">Emisi Gas Rumah Kaca</label>
      </div>
      <div>
        <input type="radio" id="jawaban2" name="jawaban" value="2">
        <label for="jawaban2">Hujan Deras</label>
      </div>
      <div>
        <input type="radio" id="jawaban3" name="jawaban" value="3">
        <label for="jawaban3">Aktivitas Gunung Berapi</label>
      </div>
      <button type="submit" class="btn btn-primary mt-3" style="background-color:rgb(75, 113, 76); color: white;">Kirim Jawaban</button>
    </form>
  </div>
  @if(session('result'))
    <div class="alert mt-3 {{ session('result') == 'Benar' ? 'alert-success' : 'alert-danger' }}">
      Jawaban Anda: {{ session('result') }}
    </div>
  @endif
</div>
@endsection
