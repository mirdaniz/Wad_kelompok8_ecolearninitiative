@extends('layouts.app')

@section('title', 'Detail Berita 3')

@section('content')
<div class="container">
    <h1>Perdana! Perubahan iklim perpanjang masa panen teh di Turki</h1>
    <p class="text-muted">27 Desember 2024</p>
    <img src="{{ asset('images/Turki.png') }}" class="img-fluid" alt="Kebakaran Hutan">
    <p>Turki mencatat fenomena unik akibat perubahan iklim, di mana masa panen teh di wilayah Laut Hitam mengalami perpanjangan yang belum pernah terjadi sebelumnya. Para petani melaporkan bahwa panen yang biasanya berlangsung tiga kali dalam setahun kini bertambah menjadi empat kali. Suhu yang lebih hangat dan curah hujan yang tidak menentu menjadi faktor utama di balik perubahan ini. Menurut laporan dari Kementerian Pertanian Turki, kondisi ini memberikan peluang peningkatan produksi teh nasional hingga 20% dibanding tahun sebelumnya, meskipun perubahan tersebut menimbulkan tantangan baru dalam pengelolaan lahan dan kualitas produk.Namun, para ahli mengingatkan bahwa fenomena ini bukan tanpa risiko. Peningkatan suhu yang terus-menerus dapat memengaruhi kadar antioksidan dan kualitas rasa teh Turki, yang menjadi ciri khas komoditas ini di pasar global. Selain itu, ancaman hama dan penyakit tanaman yang lebih agresif turut membayangi para petani. Sementara perubahan ini menawarkan peluang ekonomi, pemerintah Turki menekankan pentingnya pendekatan berkelanjutan dalam menghadapi dampak perubahan iklim, termasuk penerapan teknologi pertanian ramah lingkungan untuk menjaga kualitas sekaligus meminimalkan risiko jangka panjang.</p>
    <a href="{{ url('/') }}" class="btn btn-primary" style="background-color:rgb(75, 113, 76); color: white;">Kembali ke Dashboard</a>
</div>
@endsection
