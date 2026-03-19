<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pesanan Berhasil — Naga Barong Tech</title>
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
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link active" href="form.html">Form</a></li>
          <li class="nav-item"><a class="nav-link" href="profil.php">Profile</a></li>
          <li class="nav-item"><a class="nav-link" href="produk.html">Products</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <?php
    if (isset($_GET['nama'])) {
      $nama = $_GET['nama'];
    } else {
      $nama = "";
    }

    if (isset($_GET['nohp'])) {
      $nohp = $_GET['nohp'];
    } else {
      $nohp = "";
    }

    if (isset($_GET['jumlah'])) {
      $jumlah = $_GET['jumlah'];
    } else {
      $jumlah = "";
    }

    if (isset($_GET['produk'])) {
      $produk = $_GET['produk'];
    } else {
      $produk = "";
    }

    if (isset($_GET['tujuan'])) {
      $tujuan = $_GET['tujuan'];
    } else {
      $tujuan = "";
    }

    if (isset($_GET['bayar'])) {
      $bayar = $_GET['bayar'];
    } else {
      $bayar = "";
    }

    if (isset($_GET['fitur'])) {
      $fitur = $_GET['fitur'];
    } else {
      $fitur = array();
    }

    $namaproduk = "";
    if ($produk == "rtx5090") {
      $namaproduk = "RTX 5090 Naga Edition";
    } else if ($produk == "rtx2080") {
      $namaproduk = "RTX 2080 Naga Series";
    } else if ($produk == "ai-superchip") {
      $namaproduk = "AI Superchip Naga X1";
    } else if ($produk == "naga-pro") {
      $namaproduk = "Naga Barong Pro GPU";
    }

    $namatujuan = "";
    if ($tujuan == "gaming") {
      $namatujuan = "Gaming";
    } else if ($tujuan == "ai") {
      $namatujuan = "AI / Machine Learning";
    } else if ($tujuan == "render") {
      $namatujuan = "3D Rendering";
    } else if ($tujuan == "mining") {
      $namatujuan = "Crypto Mining";
    }

    $namabayar = "";
    if ($bayar == "transfer") {
      $namabayar = "Transfer Bank";
    } else if ($bayar == "cod") {
      $namabayar = "COD (Cash on Delivery)";
    } else if ($bayar == "cicilan") {
      $namabayar = "Cicilan 0%";
    } else if ($bayar == "crypto") {
      $namabayar = "Cryptocurrency";
    }

    $adaerror = false;

    if ($nama == "" || $nohp == "" || $jumlah == "" || $produk == "" || $tujuan == "" || $bayar == "") {
      $adaerror = true;
    }

    if ($jumlah != "" && ($jumlah < 1 || $jumlah > 100)) {
      $adaerror = true;
    }
  ?>

  <section class="container my-5">
    <div class="kotak-hasil text-center">

      <?php
        if ($adaerror == true) {
      ?>
          <div class="ikon-ceklis mb-4">
            <i class="ph-fill ph-warning-circle" style="font-size:80px; color:#e74c3c;"></i>
          </div>
          <h2 class="judul mb-2" style="color:#e74c3c;">Pesanan Gagal!</h2>
          <p class="teks-hasil mb-5">Data yang kamu masukkan tidak lengkap atau tidak valid. Silahkan kembali dan isi form dengan benar.</p>
          <a href="form.html" class="tombol">← Kembali ke Form</a>

      <?php
        } else {
      ?>
          <div class="ikon-ceklis mb-4">
            <i class="ph-fill ph-check-circle"></i>
          </div>
          <h2 class="judul mb-2">Pesanan Berhasil Dikirim!</h2>
          <p class="teks-hasil mb-5">
            Terima kasih telah memesan GPU dari <strong>Naga Barong Tech</strong>.<br>
            Tim kami akan segera menghubungi kamu untuk konfirmasi pesanan.
          </p>

          <div class="kotak-info text-start mb-5" style="max-width:600px; margin:0 auto;">
            <h4 class="judul mb-4" style="font-size:20px;">Ringkasan Pesanan</h4>
            <table class="table table-borderless" style="color:#ffffff; background-color:transparent;">
              <tbody>
                <tr>
                  <td style="color:#32CD32; font-weight:600; width:45%;">Nama</td>
                  <td style="color:#ffffff;"><?php echo $nama; ?></td>
                </tr>
                <tr>
                  <td style="color:#32CD32; font-weight:600;">Nomor HP</td>
                  <td style="color:#ffffff;"><?php echo $nohp; ?></td>
                </tr>
                <tr>
                  <td style="color:#32CD32; font-weight:600;">Produk</td>
                  <td style="color:#ffffff;"><?php echo $namaproduk; ?></td>
                </tr>
                <tr>
                  <td style="color:#32CD32; font-weight:600;">Jumlah Unit</td>
                  <td style="color:#ffffff;"><?php echo $jumlah; ?> unit</td>
                </tr>
                <tr>
                  <td style="color:#32CD32; font-weight:600;">Tujuan Penggunaan</td>
                  <td style="color:#ffffff;"><?php echo $namatujuan; ?></td>
                </tr>
                <tr>
                  <td style="color:#32CD32; font-weight:600;">Metode Pembayaran</td>
                  <td style="color:#ffffff;"><?php echo $namabayar; ?></td>
                </tr>
                <tr>
                  <td style="color:#32CD32; font-weight:600;">Fitur Tambahan</td>
                  <td style="color:#ffffff;">
                    <?php
                      if (count($fitur) == 0) {
                        echo "Tidak ada fitur tambahan";
                      } else {
                        $labelfitur = array(
                          "rgb"       => "RGB Naga Lighting",
                          "overclock" => "Factory Overclock",
                          "warranty"  => "Extended Warranty 3 Tahun",
                          "liquid"    => "Liquid Cooling Kit"
                        );
                        for ($i = 0; $i < count($fitur); $i++) {
                          echo $labelfitur[$fitur[$i]];
                          if ($i < count($fitur) - 1) {
                            echo ", ";
                          }
                        }
                      }
                    ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="row g-4 mb-5 justify-content-center">
            <div class="col-md-4">
              <div class="card kartu kartu-kecil h-100 text-center p-3">
                <i class="ph-fill ph-package" style="font-size:36px; color:#32CD32;"></i>
                <h5 class="mt-3">Pesanan Diproses</h5>
                <p>GPU kamu sedang kami siapkan dari gudang teknologi terkini.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card kartu kartu-kecil h-100 text-center p-3">
                <i class="ph-fill ph-truck" style="font-size:36px; color:#32CD32;"></i>
                <h5 class="mt-3">Estimasi Pengiriman</h5>
                <p>Pengiriman akan tiba dalam 3–7 hari kerja ke lokasi kamu.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card kartu kartu-kecil h-100 text-center p-3">
                <i class="ph-fill ph-headset" style="font-size:36px; color:#32CD32;"></i>
                <h5 class="mt-3">Butuh Bantuan?</h5>
                <p>Hubungi support kami di <strong>support@nagabarong.tech</strong></p>
              </div>
            </div>
          </div>

          <a href="index.php" class="tombol">← Kembali ke Halaman Utama</a>

      <?php
        }
      ?>

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
