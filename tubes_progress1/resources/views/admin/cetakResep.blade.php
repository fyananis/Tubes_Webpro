<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/admin/assets/css/admin.css">
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
              <a class="nav-link" href="/admin/beranda.html">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/inputDokter.html">Input Dokter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/inputNorekam.html">Input Norekam Pasien</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/jadwalDokter/jadwalDokter.html">Jadwal Dokter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/cekNorekam.html">Cek Norekam Pasien</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/admin/cetakResep.html">Cetak Resep</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Lainnya
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/admin/adminLogin.html">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container mt-5">
    <h2 class="text-center">Cetak Resep</h2>
    <hr class="my-3">
    <form class="mt-4">
      <div class="mb-3">
        <label for="rekamMedis" class="form-label">Masukan Nomor Rekam Medis Pasien</label>
        <input type="text" class="form-control" id="rekamMedis" placeholder="No. CM">
      </div>
      <button type="submit" class="btn btn-danger">Submit</button>
    </form>
  </div>
  
    
  <footer class="custom-footer text-center py-4">
    <p>&copy; 2024 HealthyCare. All rights reserved.</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>