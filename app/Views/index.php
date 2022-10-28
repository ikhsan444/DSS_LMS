<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<div id="hero">
  <div class="container h-100">
    <div class="row h-100">
      <div class="col-md-6 hero-tagline my-auto">
        <h1>Selamat Datang di Sistem Pendukung Keputusan</h1>
        <p><span>Tentukan LMS (Learning Management System) sesuai dengan kebutuhan
          organisasi yang anda miliki.
        </span></p>

        <button type="button" class="btn btn-outline-light">Mulai Perhitungan</button>
      </div>
    </div>
  </div>
</div>

<div id="konten">
  <div class="container h-100">
    <div class="row h-100">
      <div class="col-md-6 konten-tagline my-auto">
        <h1>Teori Algortitma TOPSIS</h1>
        <p>Metode TOPSIS adalah salah satu metode pengambilan keputusan multikriteria yang pertama kali diperkenalkan oleh Yoon dan Hwang pada tahun 1981. Metode ini banyak 
          digunakan untuk pengambilan keputusan yang mempunyai multikriteria atau kriteria yang banyak.</p>
          <button type="button" class="btn btn-outline-success">Selengkapnya</button>
      </div>
      <div class="col-md-6 konten-tagline my-auto">
        <img src="http://4.bp.blogspot.com/-MUpP1GVVpLA/UWYluPOqF9I/AAAAAAAAAS0/6HkaTkvgzXU/s1600/1+Bagan+Hierarkhi.png" class="img-fluid">
</div>
    </div>
  </div>
</div>
<!-- batas -->
<div id="konten2">
  <div class="container h-100">
    <div class="row h-100">
      <div class="col-md-12 konten2-tagline my-auto">
        <h1>Perhitungan Algortitma TOPSIS</h1>
        <p>Tentukan LMS yang sesuai dengan kebutuhan organisasi anda.</p>
          <div class="text-center">
          <button type="button " class="btn btn-outline-success">Mulai Sekarang</button>
          </div>
      </div>

    </div>
  </div>
</div>
<div class="line"></div>

<div id="konten3">
  <div class="container h-100">
    <div class="row h-100">
      <div class="col-md-6 konten3-tagline my-auto">
        <h1>Algoritma Lainya</h1>
        <p>Selain Algortitma TOPSIS banyak metode lain yang daoat digunakan untuk
          pengambilan keputusan yang mempunyai multikriteria atau kriteria yang banyak.</p>
      </div>
      <div class="col-md-6 konten3-tagline my-auto">
      <div class="card">
      <div class="card-body">
        <h5 class="card-title">MOORA</h5>
        <p class="card-text">Multi-Objective Optimization on the basis of Ratio Analysis</p>
        <a href="#" class="btn btn-success">Coba Sekarang</a>
      </div>
    </div>
</div>

    </div>
  </div>
</div>
<?= $this->endSection() ?>
