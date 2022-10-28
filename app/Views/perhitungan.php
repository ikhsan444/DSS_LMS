<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<div id="konten4">
  <div class="container h-100">
  <div class="card shadow">
    <div class="card-body">
    <div class="row h-100">
      <div class="col-md-12 konten3-tagline my-auto">
        <h1>Langkah-langkah Perhitungan Algortitma TOPSIS</h1>
        <br>
        <ol start="1">
          <li>Menggambarkan  alternatif  (m)  dan  kriteria  (n)  ke  dalam  sebuah  matriks, dimana  Xij adalah  pengukuran  pilihan  dari  alternatif  ke-i  dan  kriteria  ke-j.Matriks ini dapat dilihat pada persamaan satu
            <br>
            <b>
              <img src="https://nerims.files.wordpress.com/2014/03/matriks1.jpg">
            </b>
          </li>
          <li>Membuat matriks keputusan yang ternormalisas
            <br>
            <b>
              <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/c073cf6ed08dd52a18b69bf9213919887e8433ba" alt="">
            </b>
          </li>
          <li>Membuat matriks keputusan yang ternormalisasi terbobot</li>
          <br>
          <img src="http://anindyadev.com/source/Tutorial%20Lain-Lain/TOPSIS/T2.png" alt="">
          <li>Menentukan matriks solusi ideal positif dan matriks solusi ideal negatif
            <br>
            <img src="http://anindyadev.com/source/Tutorial%20Lain-Lain/TOPSIS/T3.png" alt="">
            <br>
            <img src="http://anindyadev.com/source/Tutorial%20Lain-Lain/TOPSIS/T4.png" alt="">
                      </li>
          <li>Menentukan jarak antara nilai setiap alternatif dengan matriks solusi ideal positif (D+) dan
              (D-) matriks solusi ideal negatif
            <br>
            <img src="http://anindyadev.com/source/Tutorial%20Lain-Lain/TOPSIS/T5.png" alt="">
            <br>
            <img src="http://anindyadev.com/source/Tutorial%20Lain-Lain/TOPSIS/T6.png" alt=""></li>
          <li>Menentukan nilai preferensi untuk setiap alternatif. Nilai preferensi merupakan kedekatan
            suatu alternatif terhadap solusi ideal</li>
            <br>
            <img src="http://anindyadev.com/source/Tutorial%20Lain-Lain/TOPSIS/T7.png" alt="">
            <li>Membuat pemeringkatan dari hasil nilai preferensi untuk setiap alternatif</li>
            
        </ol>
      </div>

    </div>
  </div>
</div>
</div>
</div>

<?= $this->endSection() ?>