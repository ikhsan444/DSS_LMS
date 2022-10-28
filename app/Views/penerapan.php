<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<div id="konten4">
    <div class="container h-100">
    <div class="card shadow">
        <div class="card-body">
    <div class="row h-100">
      <div class="col-md-12 konten3-tagline my-auto">
        <h1>Penerapan Algortitma TOPSIS</h1>
        <br>
        <p >Kapan menggunakan metode TOPSIS?
            <br>
            Metode TOPSIS digunakan sebagai suatu upaya untuk menyelesaikan permasalahan multiple criteria decision making. Hal ini disebabkan konsepnya sederhana dan mudah dipahami, komputasinya
            efisien dan memiliki kemampuan untuk mengukur kinerja relatif dari alternatif-alternatif keputusan</p>
        <p>Contoh studi kasus yang penilainnya menggunakan metode TOPSIS, yaitu:</p>
        <ol start="1">
            <li>Penetuan penerima beasiswa.</li>
            <li>Uji kualitas perangkat lunak.</li>
            <li>Penilaian kinerja karyawan.</li>
        </ol>
        <h5>Langkah-langkah  ketika menggunakan algoritma TOPSIS</h5>
        <ol start="1">
            <li>Menentukan kriteria & alternatif.</li>
            <li>Menentukan bobot prefensi untuk setiap kriteria.</li>
            <li>Membentuk matriks keputusan ternormalisasi.</li>
            <li>Mencari matriks ternormalisasi terbobot.</li>
            <li>Mencari matriks solusi ideal positif dan matriks solusi ideal negatif</li>
            <li>    Menentukan jarak antara nilai setiap alternatif dengan matriks solusi ideal positif dan negatif.
            </li>
            <li>    Menentukan nilai preferensi untuk setiap alternatif.</li>


        </ol>
      </div>

    </div>
  </div>
</div>
</div>
</div>

<?= $this->endSection() ?>