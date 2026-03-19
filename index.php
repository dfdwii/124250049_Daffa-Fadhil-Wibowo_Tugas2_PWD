<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Naga Barong Tech</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body>

  <section class="hero">
    <div class="isi-hero">
      <b>Naga Barong Technology</b>
    </div>
  </section>

  <nav class="navbar navbar-expand-lg navbar-atas">
    <div class="container-fluid px-4">
      <a class="navbar-brand" href="index.php">
        <img src="https://imgs.search.brave.com/FGs3uLuNMP0G4KPIEa8PWN4yVaQ1GpZirW8mgXS4I0Q/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9jZG4u/cGl4YWJheS5jb20v/cGhvdG8vMjAyNS8w/Mi8yOC8xMS80MC9k/cmFnb24tOTQzNzMw/M182NDAucG5n" alt="logo" width="50" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <i class="ph-fill ph-list" style="font-size:24px;color:#32CD32;"></i>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto gap-3">
          <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="form.html">Form</a></li>
          <li class="nav-item"><a class="nav-link" href="profil.php">Profile</a></li>
          <li class="nav-item"><a class="nav-link" href="produk.html">Products</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="bagian-tentang container my-5">
    <div class="kotak-info">
      <h2 class="judul">Tentang Kami</h2>
      <p>
        Naga Barong Tech adalah sebuah proyek inovasi teknologi mutakhir yang memadukan kekuatan estetika naga legendaris dengan kecanggihan perangkat keras masa depan. Proyek ini merepresentasikan perpaduan harmonis antara desain ornamen 'barong' yang ikonik dan performa komputasi tinggi.
      </p>
      <p class="mt-3" style="color:#32CD32; font-weight:600;">
        <?php
          date_default_timezone_set("Asia/Jakarta");
          $tanggal = date("d F Y");
          $waktu = date("H:i:s");
          echo "Tanggal : $tanggal <br>";
          echo "Waktu : $waktu";
        ?>
      </p>
      <a href="form.html" class="tombol mt-4 d-inline-block">Beli Sekarang &rarr;</a>
    </div>
  </section>

  <section class="container my-5">
    <h2 class="judul text-center mb-4">Keunggulan Kami</h2>
    <?php
      $keunggulan = array("Performa Tinggi", "Garansi Resmi 3 Tahun", "AI Ready", "Desain Estetik Naga Barong");
      $deskripsi = array(
        "Ditenagai arsitektur GPU generasi terbaru untuk FPS dan render maksimal.",
        "Setiap produk dilengkapi garansi resmi hingga 3 tahun dari Naga Barong Tech.",
        "Dioptimalkan untuk beban kerja AI dan Machine Learning skala besar.",
        "Balutan ornamen naga barong yang ikonik dengan RGB lighting yang memukau."
      );

      for ($i = 0; $i < 4; $i++) {
        echo '<div class="card kartu kartu-kecil mb-3 p-3">';
          echo '<h5 style="color:#32CD32; font-weight:700; margin-bottom:4px;">' . $keunggulan[$i] . '</h5>';
          echo '<p style="color:#aaa; font-size:14px; margin:0;">' . $deskripsi[$i] . '</p>';
        echo '</div>';
      }
    ?>
  </section>

  <section class="container my-5">
    <h2 class="judul text-center mb-4">Produk Unggulan</h2>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="card kartu h-100">
          <img src="assets/5090naga.png" class="card-img-top" alt="RTX 5090 Naga" />
          <div class="card-body">
            <h5 class="card-title">RTX 5090 Naga Edition</h5>
            <p class="card-text">GPU flagship dengan arsitektur naga terbaru. Performa AI superchip kelas dunia untuk masa depan.</p>
            <a href="form.html" class="tombol-kecil">Pesan Sekarang</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card kartu h-100">
          <img src="assets/2080n.png" class="card-img-top" alt="RTX 2080 Naga" />
          <div class="card-body">
            <h5 class="card-title">RTX 2080 Naga Edition</h5>
            <p class="card-text">Perpaduan estetika naga barong dengan teknologi komputasi tinggi. Cocok untuk kreator dan gamer profesional.</p>
            <a href="form.html" class="tombol-kecil">Pesan Sekarang</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="kaki-atas">
      <div class="kaki-kiri">
        <h3>Revolusi GPU Berbasis<br>Naga Barong Technology.</h3>
        <p>Optimalkan performa komputasi dengan kecerdasan dan inovasi maksimal.</p>
      </div>
      <div class="kaki-kontak">
        <h4>Contact Us</h4>
        <p>Email: info@nagabarong.tech</p>
        <p>Phone: +62 812-3456-7890</p>
        <p>Address: Ngawi, Jawa Timur</p>
      </div>
      <div class="kaki-sosmed">
        <h4>Follow Us</h4>
        <div class="tombol-sosmed">
          <a href="https://www.instagram.com/daffafadhw/" target="_blank"><i class="ph-fill ph-instagram-logo"></i></a>
          <a href="https://www.linkedin.com/in/daffa-fadhil-wibowo-95b298365/" target="_blank"><i class="ph-fill ph-linkedin-logo"></i></a>
        </div>
      </div>
    </div>
    <div class="kaki-bawah">
      <p>&copy; 2030 Naga Barong Tech. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
