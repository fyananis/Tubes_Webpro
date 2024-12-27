<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMEPAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
  <header id="header" class="header-main sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset('assets/img/LOGOKU.png') }}" alt="HealthyCare Logo" width="50" height="50"> HealthyCare
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#service">Fasilitas & Layanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Kontak</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Lainnya
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ url('/daftar/Daftar.html') }}">Daftar</a></li>
                <li><a class="dropdown-item" href="{{ url('/jadwalDokter/jadwalDokter.html') }}">Jadwal Dokter</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="btn btn-danger" href="{{ url('masuk.html') }}">Masuk</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section id="text-intro-section" style="background-image: url('{{ asset('assets/img/bg-healthycare.png') }}');">
    <div class="container">
      <div class="caption">
        <h1>Selamat Datang di HealthyCare</h1>
        <h2>Your Health, Our Priority</h2>
      </div>
    </div>
  </section>

  <section id="about">
    <div class="container">
      <h2>Tentang Kami</h2>
      <div id="content-about">
        <p>Klinik HealthyCare adalah fasilitas kesehatan yang didedikasikan untuk memberikan layanan medis berkualitas bagi masyarakat...</p>
        <!-- Isi Konten -->
      </div>
    </div>
  </section>
  
  <section id="service">
    <div class="container">
      <h2>Fasilitas dan Layanan</h2>
      <!-- Konten -->
    </div>
  </section>
  
  <section id="contact">
    <div class="container">
      <h2>Kontak Kami</h2><br>
      <div class="d-grid" style="grid-template-columns: 1fr 1fr; gap: 10px;">
        <div id="content">
          <h3>Hubungi Kami</h3>
          <!-- Form Kontak -->
          <form action="#" method="POST">
            @csrf
            <div>
              <label for="name">Nama:</label>
              <input type="text" id="name" name="name" required placeholder="Masukkan Nama Anda">
            </div>
            <div>
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required placeholder="Masukkan Email Anda">
            </div>
            <div>
              <label for="subject">Subjek:</label>
              <input type="text" id="subject" name="subject" required placeholder="Masukkan Subjek">
            </div>
            <div>
              <label for="message">Pesan:</label>
              <textarea id="message" name="message" required placeholder="Tulis pesan Anda"></textarea>
            </div>
            <button type="submit">Kirim</button>
          </form>
        </div>
        <div id="map">
          <iframe 
            src="https://maps.google.com/maps?q=-6.973064,107.630347&t=&z=13&ie=UTF8&iwloc=&output=embed" 
            allowfullscreen="" 
            loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </section>
    
  <footer class="custom-footer text-center py-4">
    <p>&copy; 2024 HealthyCare. All rights reserved.</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
