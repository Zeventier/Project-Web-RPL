<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<title>Tentang Kami</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
<style>
  body,
  html {
    height: 100%;
  }

  .bgimg {
    background-position: center;
    background-size: cover;
    background-image: url("img/bgimg.jpg");
    min-height: 75%;
  }

  .menu {
    display: none;
  }
</style>

<body>
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
            <a class="nav-link fw-bold" href="About us.php">About</a>
          </li>
          <li class="nav-item">
            <!-- Link untuk ke halaman contact -->
            <a class="nav-link fw-bold" href="CONTACT US MAIN.php">Contact</a>
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

  <!-- Header with image -->
  <header class="bgimg w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
      <span class="w3-tag">Buka 24 jam</span>
    </div>
    <div class="w3-display-middle w3-center">
      <span class="w3-text-white" style="font-size:90px">Peduli<br>Covid</span>
    </div>
    <div class="w3-display-bottomright w3-center w3-padding-large">
      <span class="w3-text-white">Jl. Biduri 3 No. 81 Rt.17 Komp. Bataman Indah Kel. Belimbing Raya Kec. Murung Pudak
        Kab. Tabalong Kode Pos 71571</span>
    </div>
  </header>

  <!-- Add a background color and large text to the whole page -->
  <div class="w3-sand w3-large">

    <!-- About Container -->
    <div class="w3-container" id="about">
      <div class="w3-content" style="max-width:700px">
        <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT US</span></h5>
        <p>Peduli Covid merupakan website dimana masyarakat bisa melakukan berbagai macam hal seperti mengisi kuesioner
          untuk cek status mandiri atau cek berkala untuk penyintas
          COVID-19, melihat sebaran kasus COVID-19, mengetahui lokasi rawan persebaran COVID-19 se-Indonesia, Melihat
          tips-tips kesehatan dalam mencegah penularan atau prosedur
          adaptasi kebiasaan baru, dan mengirim pesan kegawatdaruratan COVID-19 atau panggilan secara langsung kepada
          tim satgas COVID-19 dengan kontak yang telah disediakan.</p>
        <div class="w3-panel w3-leftbar w3-light-grey">
          <p><i>"Mencegah lebih baik daripada mengobati."</i></p>
        </div>
        <img src="img/smol.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
        <p><strong>Jam buka:</strong> Setiap hari 24 jam.</p>
        <p><strong>Alamat:</strong> Jl. Biduri 3 No. 81 Rt.17 Komp. Bataman Indah Kel. Belimbing Raya Kec. Murung Pudak
          Kab. Tabalong Kode Pos 71571</p>
      </div>
    </div>

    <!-- End page content -->
  </div>

  <!-- Footer -->
  <footer class="w3-center w3-light-grey w3-padding-48 w3-large">
    <p>&copy; 2021 Peduli Covid</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>