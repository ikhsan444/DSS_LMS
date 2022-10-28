<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<div id="konten_form">
    <div class="container">
        <div class="data">
        <div class="row">
        <div class="col-md-3">
          <!-- Tabs nav -->
          <div class="nav flex-column nav-pills nav-pills-custom " id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
              <i class="bi bi-caret-down-fill"></i>
              <span class="font-weight-bold small text-uppercase">MENU UTAMA</span></a>
            </button>
            <button class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
              <i class="bi bi-caret-down-fill"></i>
              <span class="font-weight-bold small text-uppercase">KRITERIA</span></a>
            </button>
            <button class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
              <i class="bi bi-caret-down-fill"></i>
              <span class="font-weight-bold small text-uppercase">ALTERNATIF</span></a>
            </button>
            <button class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
              <i class="bi bi-caret-down-fill"></i>
              <span class="font-weight-bold small text-uppercase">HASIL PERHITUNGAN</span></a>
            </button>
          </div>
        </div>


        <div class="col-md-9">
          <!-- Tabs content -->
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <h4 class="font-italic mb-4">Menu Utama</h4>
              <p class="font-italic text-muted mb-2">Berikut adalah langkah-langkah dalam metode TOPSIS. Lengkapi
                  data untuk mendapatkan hasil perhitungan.
              </p>
            </div>

            <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              <h4 class="font-italic mb-4">Kriteria</h4>
              <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Kode Kriteria</th>
      <th scope="col">Nama Kriteria</th>
      <th scope="col">Atribut Kriteria</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">C1</th>
      <td>Functional Suitability</td>
      <td>Benefit</td>
    </tr>
    <tr>
      <th scope="row">C2</th>
      <td>Performance Efficiency</td>
      <td>Cost</td>
    </tr>
    <tr>
      <th scope="row">C3</th>
      <td>Compatibility</td>
      <td>Benefit</td>
    </tr>
    <tr>
      <th scope="row">C4</th>
      <td>Usability</td>
      <td>Benefit</td>
    </tr>
    <tr>
      <th scope="row">C5</th>
      <td>Reliability</td>
      <td>Benefit</td>
    </tr>
    <tr>
      <th scope="row">C6</th>
      <td>Security</td>
      <td>Cost</td>
    </tr>
    <tr>
      <th scope="row">C7</th>
      <td>Maintainability</td>
      <td>Cost</td>
    </tr>
    <tr>
      <th scope="row">C8</th>
      <td>Portability</td>
      <td>Benefit</td>
    </tr>
    <tr>
  </tbody>
</table>
<!-- batas variabel----------------------------------------------- -->

<table class="table table-hover">
  <thead>
    <tr>
    <th scope="col">No</th>
      <th scope="col">Nama Variabel</th>
      <th scope="col">Bobot Variabel</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Sangat Penting</td>
      <td>5</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Penting</td>
      <td>4</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Kurang Penting</td>
      <td>3</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Tidak Penting</td>
      <td>2</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>sangat Tidak Penting</td>
      <td>1</td>
    </tr>
    
  </tbody>
</table>
</div>
<!-- ---------------------- -->
<div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
    <h4 class="font-italic mb-4">Alternatif</h4>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Kode Alternatif</th>
      <th scope="col">Nama Alternatif</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">A1</th>
      <td>Atutor</td>
    </tr>
    <tr>
      <th scope="row">A2</th>
      <td>Chamilo</td>
    </tr>
    <tr>
      <th scope="row">A3</th>
      <td>Dokeos</td>
    </tr>
    <tr>
      <th scope="row">A4</th>
      <td>eFront</td>
    </tr>
    <tr>
      <th scope="row">A5</th>
      <td>FormaLMS</td>
    </tr>
    <tr>
      <th scope="row">A6</th>
      <td>ILIAS</td>
    </tr>
    <tr>
      <th scope="row">A7</th>
      <td>Moodle</td>
    </tr>
    <tr>
      <th scope="row">A8</th>
      <td>Opigno</td>
    </tr>
  </tbody>
</table>
</div>

        <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
          <h4 class="font-italic mb-4">Hasil Perhitungan</h4>
          <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nama Anda</th>
      <th scope="col">Functional Suitability</th>
      <th scope="col">Performance Efficiency</th>
      <th scope="col">Compatibility</th>
      <th scope="col">Usability</th>
      <th scope="col">Reliability</th>
      <th scope="col">Security</th>
      <th scope="col">Maintainability</th>
      <th scope="col">Portability</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">R1</th>
      <td>
        <select class="form-select" id="inputGroupSelect01">
            <option value="1">Sangat Penting</option>
            <option value="2">Penting</option>
            <option value="3">Kurang Penting</option>
            <option value="4">Tidak Penting</option>
            <option value="5">Sangat Tidak Penting</option>
            </select>
        </td>
        <td>
        <select class="form-select" id="inputGroupSelect01">
            <option value="1">Sangat Penting</option>
            <option value="2">Penting</option>
            <option value="3">Kurang Penting</option>
            <option value="4">Tidak Penting</option>
            <option value="5">Sangat Tidak Penting</option>
            </select>
        </td>
        <td>
        <select class="form-select" id="inputGroupSelect01">
            <option value="1">Sangat Penting</option>
            <option value="2">Penting</option>
            <option value="3">Kurang Penting</option>
            <option value="4">Tidak Penting</option>
            <option value="5">Sangat Tidak Penting</option>
            </select>
        </td>
        <td>
        <select class="form-select" id="inputGroupSelect01">
            <option value="1">Sangat Penting</option>
            <option value="2">Penting</option>
            <option value="3">Kurang Penting</option>
            <option value="4">Tidak Penting</option>
            <option value="5">Sangat Tidak Penting</option>
            </select>
        </td>
        <td>
        <select class="form-select" id="inputGroupSelect01">
            <option value="1">Sangat Penting</option>
            <option value="2">Penting</option>
            <option value="3">Kurang Penting</option>
            <option value="4">Tidak Penting</option>
            <option value="5">Sangat Tidak Penting</option>
            </select>
        </td>
        <td>
        <select class="form-select" id="inputGroupSelect01">
            <option value="1">Sangat Penting</option>
            <option value="2">Penting</option>
            <option value="3">Kurang Penting</option>
            <option value="4">Tidak Penting</option>
            <option value="5">Sangat Tidak Penting</option>
            </select>
        </td>
        <td>
        <select class="form-select" id="inputGroupSelect01">
            <option value="1">Sangat Penting</option>
            <option value="2">Penting</option>
            <option value="3">Kurang Penting</option>
            <option value="4">Tidak Penting</option>
            <option value="5">Sangat Tidak Penting</option>
            </select>
        </td>
        <td>
        <select class="form-select" id="inputGroupSelect01">
            <option value="1">Sangat Penting</option>
            <option value="2">Penting</option>
            <option value="3">Kurang Penting</option>
            <option value="4">Tidak Penting</option>
            <option value="5">Sangat Tidak Penting</option>
            </select>
        </td>
    <tr>
  </tbody>
</table>
<button type="button " class="btn btn-outline-success">Tampilkan Hasil</button>
        </div>
      </div>
    </div>
  </div>
</div>

        </div>
    </div>
</div>



<?= $this->endSection() ?>