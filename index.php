<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
  <title>Peduli Covid | Lindungi Diri Anda</title>
</head>

<body style="background-color: #8fc2bc">
  <!-- Code untuk Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #ecf4f4">
    <div class="container-fluid">
      <!-- brand -->
      <a class="navbar-brand fw-bold" href="index.php">Peduli Covid</a>
      <!-- Button agar responsive -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Isi Navbar -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto me-3 mb-2 mb-lg-auto">
          <li class="nav-item">
            <!-- Link untuk ke halaman about -->
            <a class="nav-link fw-bold" href="About us.html">About</a>
          </li>
          <li class="nav-item">
            <!-- Link untuk ke halaman contact -->
            <a class="nav-link fw-bold" href="CONTACT US MAIN.html">Contact</a>
          </li>

          <container class="d-flex">
            <!-- Sebelum login -->
            <!-- Link untuk ke halaman login -->
            <?php if (isset($_SESSION['user']) == '') { ?>
              <a class="btn btn-success" href="Login.php" role="button" style="width: 110px">Log in</a>
              <!-- Setelah login -->
            <?php } else { ?>
              <li class="nav-item dropdown">
                <a class="nav-link fw-bold dropdown-toggle link-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo "$_SESSION[user]"; ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li>
                    <a class="dropdown-item fw-bold" style="white-space: nowrap" href="profil.php">Profil</a>
                  </li>
                  <li>
                    <a class="dropdown-item fw-bold" style="white-space: nowrap" href="logout.php">Log out</a>
                  </li>
                </ul>
              </li>
            <?php } ?>
        </ul>
        </container>
      </div>
    </div>
  </nav>
  <!-- Isi homepage -->
  <div class="container-fluid py-5 bg-gradient" style="background-color: #8fc2bc">
    <!-- Text home -->
    <div class="row">
      <!-- konten home untuk layar xxl -->
      <div class="col container-fluid d-none d-xxl-block" style="padding: 100px 0 0 50px">
        <h1 class="display-2 text-start">
          <b>Selamat datang di website Peduli Covid</b>
        </h1>
        <p class="display-5 text-start">
          Lakukan pencegahan Covid-19 mulai dari sekarang demi keselamatan dan
          kesejahteraan bersama.
        </p>

        <!-- Sebelum login -->
        <!-- Link untuk ke halaman daftar -->
        <?php if (isset($_SESSION['user']) == '') { ?>
          <a class="btn btn-lg btn-success" href="formregister.html" role="button">DAFTAR SEKARANG</a>
          <!-- Setelah login -->
        <?php } else {
        } ?>
      </div>
      <!-- konten home untuk layar xl ke bawah -->
      <div class="col container-fluid d-xl-block d-xxl-none text-center">
        <center>
          <h1 class="display-2">
            <b>Selamat datang di website Peduli Covid</b>
          </h1>
          <p class="display-5">
            Lakukan pencegahan Covid-19 mulai dari sekarang demi keselamatan
            dan kesejahteraan bersama.
          </p>
          <!-- Link untuk ke halaman daftar -->
          <?php if (isset($_SESSION['user']) == '') { ?>
            <a class="btn btn-lg btn-success" href="formregister.html" role="button">DAFTAR SEKARANG</a>
            <!-- Setelah login -->
          <?php } else {
          } ?>
        </center>
      </div>
      <!-- untuk membuat kolom gambar ke line baru saat layar xl -->
      <div class="w-100 d-xl-block d-xxl-none"></div>
      <!-- Gambar dokter layar xxl -->
      <div class="col container d-none d-xxl-block">
        <img src="img/Dokter.png" class="d-block" alt="gambarDokter" width="800px" />
      </div>
      <!-- Gambar dokter layar xl -->
      <div class="col container d-xl-block d-xxl-none">
        <center>
          <img src="img/Dokter.png" class="d-block img-fluid" alt="gambarDokter" width="800px" />
        </center>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>