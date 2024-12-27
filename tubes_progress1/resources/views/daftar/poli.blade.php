<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrasi Poli & Dokter</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
</head>

<body>
  <header id="header" class="header-main sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="/assets/logo/LOGOKU.png" alt="HealthyCare Logo" width="50" height="50"> HealthyCare </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="/">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/index.html#about">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/index.html#service">Fasilitas & Layanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/index.html#contact">Kontak</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Lainnya
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/daftar/Daftar.html">Daftar</a></li>
                <li><a class="dropdown-item" href="/jadwalDokter/jadwalDokter.html">Jadwal Dokter</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main class="main=content vh-100" style="background-image: url('/daftar/Assets/img/daftar.png');">
    <div class="container">
      <h2>Registrasi Pemilihan Klinik & Dokter</h2>
      <div id="NamalHelp" class="form-text">Di anjurkan untuk memilih dokter dengan sesuai</div>
      <form>
        <div class="mb-3">
          <label for="exampleNama1" class="form-label">Nama Pasien</label>
          <input type="Nama" class="form-control" id="exampleNama1" aria-describedby="NamalHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputNomerRekamMedis1" class="form-label">Nomer Rekam Medis</label>
          <input type="NomerRekamMedis" class="form-control" id="exampleInputNomerRekamMedis1">
        </div>
        <div class="mb-3">
          <label for="exampleNamaKlinik1" class="form-label">Nama Klinik</label>
          <select class="form-select" aria-label="Default select example">
            <option selected>Pilih Klinik</option>
            <option value="contohklinik.html">Klinik Umum</option>
            <option value="contohklinik.html">Klinik Gigi</option>
            <option value="contohklinik.html">Klinik Ibu dan Anak</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="exampleNamaDokter1" class="form-label">Nama Dokter</label>
          <select class="form-select" aria-label="Default select example">
            <option selected>Pilih Dokter</option>
            <option value="contohdokter.html">Andi Setiawan</option>
            <option value="contohdokter.html">Budi Santoso</option>
            <option value="contohdokter.html">Dwi Lestari</option>
            <option value="contohdokter.html">Fitriani Rahmawati</option>
            <option value="contohdokter.html">Guntur Saputra</option>
          </select>
        </div>
        <div>
          <label>Tanggal Kunjungan</label>
            <input id="datepicker" width="700px">
        </div>
        <!-- <div class="container mb-3">
              <div class="row">
                <div class="col-sm-2">
                <label>Tanggal Kunjungan</klinik>
                </div>
                <div class="col-sm-4">
                  <input id="datepicker" />
                </div>
              </div>
        </div> -->
            </body>
            <script>
            $('#datepicker').datepicker();
          </script>
          </html>
          </div>
          <div class="container mt-2">
            <a href="/daftar/NomerAntrian.html" class="btn btn-danger">Submit</a>
        </div>
      </main>
    </body>
    </html>